<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
//use Illuminate\support\Facades\Log;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Table;
use App\Models\Booking;
use Carbon\Carbon;
use Stripe;
use Illuminate\Support\Facades\Session;

use Barryvdh\DomPDF\Facade\Pdf;



class HomeController extends Controller
{
    public function index()
    {
        $data=food::all();

        $user_id=Auth::id();

        $count=cart::where('user_id',$user_id)->count();

        return view("home",compact("data",'count'));
    }

    public function reservation()
    {
        $user_id=Auth::id();

        $data=Table::all();

        $count=cart::where('user_id',$user_id)->count();

        return view("reservation",compact('count','data'));
    }


    public function about()
    {
        $user_id=Auth::id();

        $count=cart::where('user_id',$user_id)->count();

        return view("about",compact('count'));
    }

    public function contact()
    {
        $user_id=Auth::id();

        $count=cart::where('user_id',$user_id)->count();

        return view("contact",compact('count'));
    }


    public function menu()
    {
        $data=food::all();

        $user_id=Auth::id();

        $count=cart::where('user_id',$user_id)->count();

        return view("menu",compact("data",'count'));
    }


    public function gallery()
    {
        $data=food::all();

        $user_id=Auth::id();

        $count=cart::where('user_id',$user_id)->count();

        return view("gallery",compact("data",'count'));
    }


    public function redirects()
    {
        $data=food::all();
        $usertype= Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.adminhome');
        }

        else
        {

            $user_id=Auth::id();

            $count=cart::where('user_id',$user_id)->count();

            return view('home',compact('data','count'));
        }
    }


    public function addcart(Request $request, $id)
    {


        if(Auth::id())
        {
            $user_id=Auth::id();

            $foodid=$id;

            $food_exist_id = Cart::where('food_id','=',$id)->where('user_id','=',$user_id)->get('id')->first();


            if($food_exist_id)
            {

                $cart=Cart::find($food_exist_id)->first();

                $quantity=$cart->quantity;

                $cart->quantity=$quantity + $request->quantity;

                $cart->save();

                return redirect()->back()->with('message','Food Added Successfully');

            }
            else
            {

                $quantity=$request->quantity;

                $cart=new cart;

                $cart->user_id=$user_id;

                $cart->food_id=$foodid;

                $cart->quantity=$quantity;

                $cart->save();


                return redirect()->back()->with('message','Food Added Successfully');

            }

        }

        else
        {
            return redirect('/login');
        }


    }

    public function showcart(Request $request, $id)
    {
        $count = cart::where('user_id', $id)->count();

        if (Auth::id() == $id) {
            $data2 = cart::where('user_id', $id)->get();
            $data = cart::where('user_id', $id)
                ->join('food', 'carts.food_id', '=', 'food.id')
                ->get();

            // Calculate subtotal
            $total=0;
            $subtotal = 0;
            foreach ($data as $item) {
                $total=($item->quantity * $item->price);
                $subtotal += $total;
            }

            return view('showcart', compact('count', 'data', 'data2', 'subtotal'));
        } else {
            return redirect()->back();
        }
    }



    public function remove($id)
    {
        $data=cart::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function orderconfirm(Request $request)
    {
        foreach ($request->foodname as $key => $foodname) {
            $data = new Order;

            $data->user_id = auth()->id(); // Associate order with the logged-in user
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;


            $data->save();
        }

        // Clear the cart details from the database
        Cart::where('user_id', auth()->id())->delete(); // Assuming 'user_id' is used to associate cart items with the user

        return redirect()->back()->with('success', 'Order confirmed and cart cleared.');
    }




    public function table_details($id)
    {
        $data=Table::find($id);

        $user_id=Auth::id();

        $count=cart::where('user_id',$user_id)->count();

        return view('table_details',compact('data','count'));
    }





    public function add_booking(Request $request ,$id)
    {
        $request->validate([
            'check_in' => 'required|date_format:h:i A',
            'check_out' => 'required|date_format:h:i A|after:check_in',
        ]);

        $data = new Booking();

        $data->table_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->date = $request->date;

        $check_in = $request->check_in;
        $check_out = $request->check_out;

        $isBooked = Booking::where('table_id', $id)
            ->where('date', $request->date)
            ->where(function($query) use ($check_in, $check_out) {
                $query->where('check_in', [$check_in])
                    ->orWhere('check_out', [$check_out])
                    ->orWhere(function($query) use ($check_in, $check_out) {
                        $query->where('check_in', '<=', $check_in)
                                ->where('check_out', '>=', $check_out);
                    });
            })
            ->exists();

        if($isBooked)
        {
            return redirect()->back()->with([
                'message' => 'Table was already booked, please try different time.',
                'message_type' => 'error'
            ]);
        }
        else
        {
            $data->check_in = $check_in;
            $data->check_out = $check_out;
            $data->save();

            return redirect()->back()->with([
                'message' => 'Booking added successfully.',
                'message_type' => 'success'
            ]);
        }
    }




    public function show_order()
    {

        $data = Order::where('user_id', auth()->id())->get(); // Retrieve orders for the logged-in user

        // Set the local time zone to Sri Lankan time
        $localTimeZone = 'Asia/Colombo';

        // Sort data by created_at in descending order
        $sortedData = $data->sortByDesc('created_at');

        // Group the data by created_at with timezone adjustment
        $groupedData = $sortedData->groupBy(function ($item) use ($localTimeZone) {
            return Carbon::parse($item->created_at)->setTimezone($localTimeZone)->format('Y-m-d H:i:s');
        });



        return view('showorder', compact('data','groupedData'));
    }

    public function print($id)
    {
        $order=Order::find($id);

        $pdf = Pdf::loadView('pdf',compact('order'));
        return $pdf->download('invoice.pdf');
    }




    public function stripe($subtotal)
    {
        return view('stripe', compact('subtotal'));
    }



    public function stripePost(Request $request, $subtotal)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $subtotal * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from complete"
        ]);

        foreach ($request->foodname as $key => $foodname) {
            $data = new Order;

            $data->user_id = auth()->id(); // Associate order with the logged-in user
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->payment_status="paid";


            $data->save();
        }

        // Clear the cart details from the database
        Cart::where('user_id', auth()->id())->delete(); // Assuming 'user_id' is used to associate cart items with the user

        return redirect('showcart');
    }



}

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

            $quantity=$request->quantity;

            $cart=new cart;

            $cart->user_id=$user_id;

            $cart->food_id=$foodid;

            $cart->quantity=$quantity;

            $cart->save();


            return redirect()->back();
        }

        else
        {
            return redirect('/login');
        }


    }


    public function showcart(Request $request, $id)
    {

        $count=cart::where('user_id',$id)->count();

            if(Auth::id()==$id)
            {
                $data2=cart::select('*')->where('user_id', '=' , $id)->get();

                $data=cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();

                return view('showcart',compact('count','data','data2'));
            }

            else
            {
                return redirect()->back();
            }
    }


    public function remove($id)
    {
        $data=cart::find($id);

        $data->delete();

        return redirect()->back();
    }

    // public function orderconfirm(Request $request)
    // {

    //     foreach($request->foodname as $key =>$foodname)
    //     {


    //         $data=new order;

    //         $data->foodname=$foodname;

    //         $data->price=$request->price[$key];

    //         $data->quantity=$request->quantity[$key];

    //         $data->name=$request->name;

    //         $data->phone=$request->phone;

    //         $data->address=$request->address;

    //         $data->save();



    //     }

    //     return redirect()->back();

    // }



    public function orderconfirm(Request $request)
    {
        foreach ($request->foodname as $key => $foodname) {
            $data = new Order;

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


        $check_in = $request ->check_in;

        $check_out = $request ->check_out;

        $isBooked = Booking::where('table_id',$id)
        ->where('check_in','<=','check_out')
        ->where('check_out','<=','check_in')->exists();

        if($isBooked)
        {

            return redirect()->back()->with('message', 'Table was already booked, please try diffrent time.');

        }
        else
        {


            $data->check_in = $request->check_in;

            $data->check_out = $request->check_out;

            $data->save();

            return redirect()->back()->with('message', 'Booking added successfully.');
        }







    }


    public function show_order()
    {

        $data=Order::all();


        return view('showorder',compact('data'));
    }

    public function print($id)
    {
        $order=Order::find($id);

        $pdf = Pdf::loadView('pdf',compact('order'));
        return $pdf->download('invoice.pdf');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;

use App\Models\Order;

use App\Models\Table;

use App\Models\Booking;

use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }



    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function deletemenu($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function foodmenu()
    {
        $data = food::all();
        return view("admin.foodmenu",compact('data'));
    }


    public function updateview($id)
    {
        $data=food::find($id);
        return view("admin.updateview",compact("data"));
    }


    public function update(Request $request, $id)
    {
        $data=food::find($id);

        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();

                $request->image->move('foodimage',$imagename);

                $data->image=$imagename;

                $data->title=$request->title;

                $data->price=$request->price;

                $data->description=$request->description;

                $data->save();

                return redirect()->back();

    }


    public function upload(Request $request)
    {
        $data = new food;

        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();

                $request->image->move('foodimage',$imagename);

                $data->image=$imagename;

                $data->title=$request->title;

                $data->price=$request->price;

                $data->description=$request->description;

                $data->save();

                return redirect()->back();
    }


    public function reservation(Request $request)
    {
        $data = new reservation;


                $data->name=$request->name;

                $data->email=$request->email;

                $data->phone=$request->phone;

                $data->guest=$request->guest;

                $data->date=$request->date;

                $data->time=$request->time;

                $data->save();

                return redirect()->back();
    }


    public function viewreservation()
    {
        if(Auth::id())
        {
            $data=Booking::all();

            return view("admin.adminreservation",compact("data"));
        }

        else
        {
            return redirect('login');
        }

    }


    public function orders()
    {

        $data=order::all();

        return view('admin.orders',compact('data'));
    }


    public function search(Request $request)
    {
        $search=$request->search;

        $data=order::where('name','Like','%'.$search.'%')->orwhere('foodname','Like','%'.$search.'%')
        ->get();

        return view('admin.orders',compact('data'));
    }



    public function create_table()
    {
        $data=Table::all();

        return view('admin.create_table',compact('data'));
    }

    public function add_table(Request $request)
    {

        $data = new Table;

        $data->table_title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->table_type = $request->type;

        $image=$request->image;

        if($image){

            $imagename =time().'.'.$image->getClientOriginalExtension();

            $request->image->move('table',$imagename);

            $data->image=$imagename;

        }

        $data->save();

        return redirect()->back();

    }



    public function table_delete($id)
    {
        $data=table::find($id);
        $data->delete();
        return redirect()->back();
    }



    public function table_update($id)
    {
        $data=Table::find($id);
        return view("admin.update_table",compact("data"));
    }



    public function edit_table(Request $request, $id)
    {
        $data=Table::find($id);

        $data->table_title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->table_type = $request->type;

        $image=$request->image;

        if($image){

            $imagename =time().'.'.$image->getClientOriginalExtension();

            $request->image->move('table',$imagename);

            $data->image=$imagename;

        }

        $data->save();

        return redirect()->back();


    }

    public function delete_reservation($id)
    {
        $data=Booking::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function approve_book($id)
    {
        $booking = Booking::find($id);

        $booking->status='approve';

        $booking->save();

        return redirect()->back();
    }



    public function reject_book($id)
    {
        $booking = Booking::find($id);

        $booking->status='reject';

        $booking->save();

        return redirect()->back();
    }


}

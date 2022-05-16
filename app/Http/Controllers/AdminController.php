<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;
use App\Models\Order;
use  Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view("admin.user",compact("data"));
    }

    public function deleteuser($id){
        $data = User::findOrFail($id);
        $data->destroy($id);
        return redirect()->back();
    }

    public function foodmenu(){
        
        $data = food::all();
        return view("admin.foodmenu",compact("data"));
    }

    public function upload(Request $request){

        $data = new food;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image = $imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();

    }

    public function deletemenu($id){
        $data = food::findOrFail($id);
        $data->destroy($id);
        return redirect()->back();
    }

    public function updateview($id){
        $data = food::findOrFail($id);
        return view("admin.updateview",compact("data"));
    }

    public function update(Request $request, $id){
        $data = food::findOrFail($id);
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image = $imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();

        return redirect()->back();
      
    }

    public function reservation(Request $request){

        $data = new reservation;

        

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();

        return redirect()->back();

    }

    public function viewreservations(){
        if(Auth::id()){

        $data = reservation::all();
        return view("admin.adminreservation",compact('data'));
    }
    else{
        return redirect('login');
    }
    }

    public function viewchefs(){

        $data = Chef::all();
        return view("admin.adminchef",compact("data"));
    }

    public function uploadchef(Request $request){
        $data = new Chef;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);

        $data->image = $imagename;

        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();

        return redirect()->back();
    }

    public function viewupdatechef($id){

        $data = Chef::find($id);
        
        return view("admin.updatechef",compact("data"));
    }



    public function updatecheffood(Request $request,$id){
        $data = chef::findOrFail($id);
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image = $imagename;
        }
        
        $data->name=$request->name;
        $data->speciality=$request->speciality;
       
        $data->save();
        return redirect()->back();
    }

    public function deletechef($id){
        $data = Chef::findOrFail($id);
        $data->destroy($id);
        return redirect()->back();
    }

    public function orders(){
        $data=order::all();

        return view('admin.orders',compact('data'));
    }
}

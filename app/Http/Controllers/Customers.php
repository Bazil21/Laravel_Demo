<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class Customers extends Controller
{
    //
    public function index(){
        return view("customer");
    }
    public Function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->dob = $request['dob'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->save();
        return redirect("/customer/view");
    }
    public Function view(){
        $customers = Customer::all();
        $data = compact("customers");
        return view("customer-view")->with($data);
    }
}

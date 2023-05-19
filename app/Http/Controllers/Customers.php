<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Customers extends Controller
{
    //
    public function index()
    {
        $url = url("/customer");
        $title = "Create Customer";
        $customer=new Customer();
        $data = compact("url", "title","customer");
        return view("customer")->with($data);
    }
    public function store(Request $request)
    {
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
        return redirect("/customer");
    }
    public function view()
    {
        $customers = Customer::all();
        $data = compact("customers");
        return view("customer-view")->with($data);
    }
    public function trash()
    {
        $customers = Customer::onlyTrashed()->get();
        $data = compact("customers");
        return view("customer-trash")->with($data);
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('/customer');
    }

    public function restore($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect('/customer');
    }
    public function forcedelete($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->forcedelete();
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect("/customer");
        } else {
            $url = url("/customer/update") . "/" . $id;
            $title = "Update Customer";
            $data = compact("customer", "url", "title");
            return view("customer")->with($data);
        }
    }
    public function update($id, Request $request){
        $customer = Customer::find($id);
        // pm($request->all());exit;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->dob = $request['dob'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->save();
        return redirect("customer");
    }
}

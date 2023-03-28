<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Validate\Rule;
use DB;

class CustomerController extends Controller
{
    public function index()
    {
        // return 'Customers';

        $data = DB::table("customers")->get();
        return view('customer.index',['customers'=>$data]);
    }
    
    public function delete($id)
    {
        $delete = DB::table("customers")
        ->where("id","=",$id)
        ->delete();
        return redirect('/')->withSuccess(__('customer has been deleted successfully!'));
    }

    public function add()
    {
        return view('customer.add');
    }

    public function save(Request $req){
        $validated=$req->validate([
            'lastname'=>'required',
            'firstname'=>'required',
            'email'=>'required',
            'contactNumber'=>'required',
            'address'=>'required'
        ]);

        $customer=Customer::create($validated);
        return redirect("/");
    }

    public function edit($id){
        $data=Customer::findorFail($id);
        return view('customer.edit', ['customers'=>$data]);
    }

    public function update(Request $request)
    {
        $validated=$request->validate([
            'lastName'=>['required'],
            'firstName'=>['required'],
            'email'=>['required'],
            'contactNumber'=>['required'],
            'address'=>['required']
        ]);

        $data = Customer::find($request->id);
        $data->lastName=$request->lastName;
        $data->firstName=$request->firstName;
        $data->email=$request->email;
        $data->contactNumber=$request->contactNumber;
        $data->address=$request->address;

        $data->save();
        return redirect('/')->withSuccess(__('customer updated'));
    
    }
}

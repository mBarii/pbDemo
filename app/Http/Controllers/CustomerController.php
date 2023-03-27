<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
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

}

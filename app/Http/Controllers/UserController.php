<?php

namespace App\Http\Controllers;
use App\Company;
use App\Customer;
use Illuminate\Http\Request;
class UserController extends Controller
{
  public function index(){

  // $activecustomers = Customer::active()->get();
  // $inactiveCustomers = Customer::inactive()->get();
    //dd($inactiveCustomers);
     $customers = Customer::all();
    // dd($customers );
    return view('customers.index',compact('customers'));
    // return view('customers.index',compact('activecustomers','inactiveCustomers'));
  }

  public function create(){
      $companies = Company::all();

    return view('customers.create',compact('companies'));
  }

  public function store(Request $request)
     {
       $data = $request->validate([
           'name' => 'required|max:25|min:4',
           'email' => 'required|email',
           'active' => 'required',
           'company_id' => 'required',

       ]);
      //  dd($data);
     Customer::create($data);
        // $customer = new Customer;
        // $customer->name=$request->name;
        // $customer->email=$request->email;
        // $customer->active=$request->active;
        // $customer->save();
        return Redirect()->to('customers');
  }
}

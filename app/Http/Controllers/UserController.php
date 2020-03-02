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
      $customer = new Customer();

    return view('customers.create',compact('companies','customer'));
  }

  public function store(Request $request)
     {
    //   dd($request);
       // $data = $request->validate([
       //     'name' => 'required|max:25|min:4',
       //     'email' => 'required|email',
       //     'active' => 'required',
       //     'company_id' => 'required',
       // ]);
      //  dd($data);
     // Customer::create($data);
        Customer::create($this->validateRequest());
        // $customer = new Customer;
        // $customer->name=$request->name;
        // $customer->email=$request->email;
        // $customer->active=$request->active;
        // $customer->save();
        return redirect('customers');
  }
  public function show(Customer $customer){

  //  $customer = Customer::find($customer);
    // $customer = Customer::where('id',$customer)->firstorFail();
   // dd($customer);
   return view ('customers.show',compact('customer'));
  }
  public function edit(Customer $customer){
      $companies = Company::all();
       return view('customers.edit',compact('customer','companies'));

  }

  public function update(Request $request ,Customer $customer ){
    $customer->update($this->validateRequest());

    return redirect ('customers/'.$customer->id);

  }
  private function validateRequest(){
    return request()-> validate([
      'name' => 'required|max:25|min:4',
      'email' => 'required|email',
      'active' => 'required',
      'company_id' => 'required',
    ]);
  }
}

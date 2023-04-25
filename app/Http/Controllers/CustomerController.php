<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
class CustomerController extends Controller
{


    public function store(Request $request){
        $customer = new Customer;

        
        
        $customer->name = $request->get('name');
        $customer->phone = $request->get('phone');
        $customer->email = $request->get('email');
        $customer->address = $request->get('address');
        $customer->city = $request->get('city');
        $customer->country = $request->get('country');
        
        $customer->Service_id = $request->get('service');

        $request->validate([
            'email' => 'required|email',
            'address' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'country' => 'required',
          ]);
        
        $customer->save();

        $emails = [
        
            'email' => $request->get('email'),
            
        ];
        
        Mail::to($emails['email'])->send(new OrderMail());

        return view('thankyou');
    }

    public function read(){
        $customers = Customer::all();
        
        return view('readCustomers', compact('customers'));
    }

    public function edit($email)
    {
        $customer = Customer::find($email);
        return view('updateCustomers')->with(['customer' => $customer]);
    }
    
    public function update(Request $request,$email)
    {
        $customer = Customer::find($email);
        $customer->name = $request->get('name');
        $customer->phone = $request->get('phone');
        $customer->email = $request->get('email');
        $customer->address = $request->get('address');
        $customer->city = $request->get('city');
        $customer->country = $request->get('country');
        
        $customer->save();
        return redirect('readCustomers');
        
    }

    public function delete($email)
    {
        Customer::destroy($email);
        return redirect('readCustomers');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create(){
        return view('customers.create');
    }   

    public function store(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:customers',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);

        $customer = new Customer($request->all()); 

        if($request->hasFile('image')){
            $customer->image = $request->image->store('customers', 'public');
        }

        $customer->save();
        return redirect()->route('customers.index')->with('success', 'Customer added successfully');
    }   

    public function show(Customer $customer){
        return view('customers.show', compact('customer'));
    }   

    public function edit(Customer $customer){
        return view('customers.edit', compact('customer'));
    }   

    public function update(Request $request, $id){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);

        $customer = Customer::find($id);
        $customer -> first_name = $request->first_name;
        $customer -> last_name = $request->last_name;
        $customer -> phone = $request->phone;
        $customer -> address = $request->address;
        $customer -> city = $request->city;

        if($request->hasFile('image')){
            if($customer->image && Storage::disk('public')->exists($customer->image)){
                Storage::disk('public')->delete($customer->image);
            }
            
            $customer -> image = $request -> image -> store('customers', 'public');
        }

        $customer->save();
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully');
    }   

    public function destroy(Customer $customer){
        if($customer->image ){
            Storage::disk('public')->delete($customer->image);
        }  

        $customer -> delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully');
    }   

    
}

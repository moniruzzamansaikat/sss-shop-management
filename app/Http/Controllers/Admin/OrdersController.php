<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('orders.index', compact('orders'));
    }

    public function create(){
        $products = \App\Models\Product::all();
        $customers = \App\Models\Customer::all();
        return view('orders.create', compact('products', 'customers'));
    }

    public function store(Request $request){
        return $request -> all(); 
        $this->validate($request, [
            'customer_id' => 'required|integer',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
            'payment_method' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);


        $product = Product::find($request->product_id);
        
        $product->sold += 1; 
        $product->quantity -= 1;

        $product -> save();

        $order = new Order();
        $order->customer_id = $request->customer_id;
        $order->product_id = $request->product_id;
        $order->quantity = $request->quantity;
        $order->status = $request->status;
        $order->payment_method = $request->payment_method;
        $order->total_amount = $product->price * $request->quantity;
        $order->save();
        
        return redirect()->route('orders.index')->with('success', 'Order created successfully');

    }

    public function show($id){
    }

    public function edit($id){
        return view('orders.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy(Order $order){
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
    }

    public function invoice(Order $order){
        return view('orders.invoice', compact('order'));
    }

    public function make_complete(Order $order){
        $order -> status = 'completed';
        $order -> save();
        return redirect()->route('orders.index')->with('success', 'Order completed successfully');
    }
}

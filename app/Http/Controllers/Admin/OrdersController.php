<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){
        return view('orders.index');
    }

    public function create(){
        return view('orders.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
    }

    public function edit($id){
        return view('orders.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}

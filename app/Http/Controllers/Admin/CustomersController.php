<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        return view('customers.index');
    }

    public function create(){
        return view('customers.create');
    }   

    public function store(Request $request){
        //
    }   

    public function show($id){
        return view('customers.show');
    }   

    public function edit($id){
        return view('customers.edit');
    }   

    public function update(Request $request, $id){
        //
    }   

    public function destroy($id){
        //
    }   

    
}

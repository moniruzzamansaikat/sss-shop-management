<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        return view('users.show');
    }

    public function edit($id){
        return view('users.edit');
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }

}

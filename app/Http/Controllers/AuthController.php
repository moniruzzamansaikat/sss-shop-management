<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($request->only(['email', 'password']))){
            return redirect()->route('index');
        } else {
            return redirect()->route('login.index')->with('error', 'Invalid credentials');
        }
    }

    public function destroy(){
        auth()->logout();

        return redirect()->route('login.index');
    }
}

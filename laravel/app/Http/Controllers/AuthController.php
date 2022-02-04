<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('back.auth.login');
    }
    public function loginPost(Request $request){
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('index');
        }
        return redirect()->route('login')->withErrors('Email veya şifre hatalı');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

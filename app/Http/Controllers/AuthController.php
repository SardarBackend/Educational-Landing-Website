<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('public.Auth.login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    } 
}

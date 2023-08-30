<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function forgot_password(){
        return view('auth.forgot-password');
    }
    function register(){
        return view('auth.register');
    }
}

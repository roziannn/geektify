<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login.index');
    }

    public function forgot(){
        return view('login.forgot-pw');
    }

    public function register(){
        return view('login.register');
    }
}

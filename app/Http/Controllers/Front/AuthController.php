<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(){
        return view('localry.auth.login');
    }

    public function register(){
        return view('localry.auth.register');
    }

    public function forgot(){
        return view('localry.auth.forgot');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(){
        return view('authentication.login');
    }

    public function getRegister(){
        return view('authentication.register');
    }

    public function getResetpassword(){
        return view('authentication.register');
    }
}

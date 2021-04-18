<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('dashboard.index');
        }else{
            return view('authentication.login');
        }
    }

    public function postLogin(Request $request){

        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Chưa nhập tài khoản',
                'password.required' => 'Chưa nhập mật khẩu'
            ]
        );

        if (auth('web')->attempt(['name' => $request->username, 'password' => $request->password])) {
            // dd('đăng nhập thành công');
            return redirect()->route('dashboard.index');
        } else {
            // dd('đăng nhập không thành công');
            return redirect()->route('authentication.login')->with('flash_data', ['type' => 'error', 'message' => 'Thông tin tài khoản hoặc mật khẩu không đúng'])->withInput();
        }
    }


    public function getRegister(){
        return view('authentication.register');
    }

    public function getResetpassword(){
        return view('authentication.resetpassword');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('authentication.login');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required',
            ]
            ,[
                'email.required'=>'وارد کردن ایمیل الزامی است',
                'password.required'=>'وارد کردن رمز الزامی است',
            ]

        );

        if (Auth::attempt(['email'=>$request->email , 'password'=>$request->password] ,($request->has('remember') ? true : false))){
            return redirect()->route('dashboard.index');
        }else
            return redirect()->route('login' )->withErrors(['msg'=>'ورود ناموفق']);

    }

    public function logout()
    {
//        dd(Auth::logout());
        Auth::logout();
        return redirect()->route('login');
    }
}


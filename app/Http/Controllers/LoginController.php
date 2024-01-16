<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function loginpage()
    {
        return view('auth.loginpage');
    }

    public function proseslogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:5',
        ]);

        $username = $request->username;
        $password = $request->password;

        if(Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->with('error', 'username atau password tidak sesuai');
        }
    }

    public function logout(Request $request) {
        auth()->guard('web')->logout();
        session()->flush();

        return redirect()->route('loginpage');
    }
}

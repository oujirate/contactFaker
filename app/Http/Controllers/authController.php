<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request){
        Session::put('username', $request->username);
        return redirect()->route('home');
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function register() {
        return redirect()->route('login');
    }

    public function logout() {
        Session::forget('username');
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class profileController extends Controller
{
    public function profile() {
        $username = Session::get('username');

        if (!Session::has('username')) {
            return redirect()->route('login');
        }

        return view('pages.profile.index',compact('username'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Faker\Factory as Faker;
use App\Models\ContactModel;


class HomeController extends Controller
{
    public function home() {
        $username = Session::get('username');
        $totalContacts = ContactModel::count();
        $recentContacts = ContactModel::latest()->take(3)->get();
        $contactsByCompany = ContactModel::select('company')
        ->groupBy('company')
        ->selectRaw('count(*) as count')
        ->orderBy('count', 'desc')
        ->limit(3)
        ->pluck('count', 'company');


        if (!Session::has('username')) {
            return redirect()->route('login');
        }

        return view('home.index',compact('username','totalContacts','recentContacts','contactsByCompany'));
    }
}

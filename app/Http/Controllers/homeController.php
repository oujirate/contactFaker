<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Faker\Factory as Faker;


class homeController extends Controller
{
    public function home() {
        $username = Session::get('username');

        if (!Session::has('username')) {
            return redirect()->route('login');
        }

        $faker = Faker::create();

        for ($i=0; $i<10; $i++){
            $contacts[] = [
                'name' => $faker->name,
                'email' => $faker->email,
                'address' => $faker->address,
                'notelp' => $faker->phoneNumber,
                'company' => $faker->company,
            ];
        }

        return view('home.index',compact('contacts','username'));
    }
}

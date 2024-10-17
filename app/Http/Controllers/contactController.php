<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Session;


class contactController extends Controller
{
    public function contacts() {

        if (!Session::has('username')) {
            return redirect()->route('login');
        }

        $faker = Faker::create();

        for ($i=0; $i<50; $i++){
            $contacts[] = [
                'name' => $faker->name,
                'email' => $faker->email,
                'address' => $faker->address,
                'notelp' => $faker->phoneNumber,
                'company' => $faker->company,
            ];
        }

        return view('pages.contacts.index',compact('contacts'));
    }
}

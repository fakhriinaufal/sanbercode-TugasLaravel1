<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function mulaiRegister() {
        return view('register');
    }

    public function register(Request $request) {

        $firstName = $request["firstName"];
        $lastName = $request["lastName"];
        // dd($request->all());
        return view('welcome2', ['firstName' => $firstName, 'lastName' => $lastName]);

    }
}

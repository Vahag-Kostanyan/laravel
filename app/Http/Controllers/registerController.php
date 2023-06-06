<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index () {
        return view('register.index');
    }

    public function store (Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->boolean('remember');
        dd($name, $email, $password, $remember);
        }
}

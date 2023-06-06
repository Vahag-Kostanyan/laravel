<?php

namespace App\Http\Controllers;

// use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function index () {
        return view('login.index');
    }

    public function store (Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->boolean('remember');
        alert(__('welcome'));

        // dd(Currency::all());
        return redirect()->route('user.post');
    }
}

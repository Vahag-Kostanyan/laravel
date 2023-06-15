<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index () {
        return view('register.index');
    }

    public function store (Request $request) {
        $validate = validate($request->all(), User::getUserValidate());

        $user = User::query()->create( array_merge($validate, [
            'password' =>bcrypt($validate['password'])
        ]));
        
        return redirect()->route('user');
    }
}

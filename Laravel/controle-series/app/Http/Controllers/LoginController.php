<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        if (!auth()->attempt($request->all())) {
            return back()->withErrors(['Invalid user and/or password.']);
        }
    }
}

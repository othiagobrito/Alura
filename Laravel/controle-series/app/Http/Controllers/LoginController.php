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
        if (!auth()->attempt($request->only(['email', 'password']))) {
            return back()->withErrors(['Invalid user and/or password.']);
        }

        return to_route('series.index');
    }
}

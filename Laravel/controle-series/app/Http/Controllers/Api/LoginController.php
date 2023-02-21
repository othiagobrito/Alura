<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (! auth()->attempt($credentials)) {
            return response()->json('Unauthorized', 401);
        }

        $user = auth()->user();

        $token = $user->createToken('token');

        return response()->json($token->plainTextToken, 200);
    }
}

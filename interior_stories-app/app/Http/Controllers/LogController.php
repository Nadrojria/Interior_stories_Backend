<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LogController extends Controller {

    public function login(Request $request) {

        if (auth()->attempt([
            'email' => $request->input('email'), 
            'password' => $request->input('password')])) {

            $user = auth()->user();

            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'user' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);
        }

        return response()->json([
            'error' => 'Unauthenticated user',
            'code' => 401,
        ], 401);
    }

    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout successfull',
        ]);
    }
}
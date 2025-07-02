<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/users', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/login', function (Request $request) {
    if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        $user = auth()->user();

    $token = $user->createToken('auth_token')->plainTextToken;
    return response()->json([
        'user'          => $user,
        'access_token'  => $token,
        'token_type'    => 'Bearer'
    ]);
    }
    
    return response()->json([
        'error' => 'Unauthenticated user',
        'code' => 401,
    ], 401);
});


Route::post('/logout', function (Request $request) {
    $request->user()->currentAccessToken()->delete();
    return response()->json([
      'message' => 'Logout successfull'
    ]);
})->middleware('auth:sanctum');



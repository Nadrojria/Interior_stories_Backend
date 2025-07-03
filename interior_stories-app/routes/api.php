<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\UserController;
use App\Models\Furniture;



Route::get('/users', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/login', function (Request $request) {
    if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
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
});


Route::post('/logout', function (Request $request) {
    $request->user()->currentAccessToken()->delete();
    return response()->json([
        'message' => 'Logout successfull'
    ]);
})->middleware('auth:sanctum');



// ***** AUTHENTICATION MANAGEMENT : Routes for CRUD Roles (creation and management)
//public route
//Route::post('/auth/login', [AuthController::class, 'login']);
//protected route
//Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::post('/auth/register', [AuthController::class, 'register']);
//     //Route::get('/users', [PostController::class, 'show']);
//     //Route::put('/users/{id}', [PostController::class, 'update'])->middleware('restrictRole:customer');
// });



Route::get('/furnitures', function () {
    return Furniture::all();
});
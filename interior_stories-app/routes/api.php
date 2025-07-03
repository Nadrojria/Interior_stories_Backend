<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Models\Furniture;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;


Route::post('/login', [LogController::class, 'login']);

Route::post('/logout', [LogController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'checkUser'])
    ->middleware('auth:sanctum');

Route::get('/furnitures', function () {
    return Furniture::all();
});






// ***** AUTHENTICATION MANAGEMENT : Routes for CRUD Roles (creation and management)
//public route
//Route::post('/auth/login', [UserController::class, 'login']);
//protected route
//Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::post('/auth/register', [UserController::class, 'register']);
//     //Route::get('/users', [PostController::class, 'show']);
//     //Route::put('/users/{id}', [PostController::class, 'update'])->middleware('restrictRole:customer');
// });



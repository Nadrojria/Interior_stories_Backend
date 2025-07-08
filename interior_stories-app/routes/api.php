<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Models\Furniture;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\OrderController;

Route::post('/login', [LogController::class, 'login']);

Route::post('/logout', [LogController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'checkUser'])
    ->middleware('auth:sanctum');

Route::get('/furnitures', [FurnitureController::class, 'displayAvailableFurnitures']);

Route::post('/orders',[OrderController::class, 'createOrder'])
    ->middleware('auth:sanctum');
    
Route::get('/orders',[OrderController::class, 'getOrders'])
    ->middleware('auth:sanctum');

Route::delete('/orders/{id}', [OrderController::class, 'deleteOrder'])
    ->middleware('auth:sanctum');

Route::put('/orders',[OrderController::class, 'completeOrders'])
    ->middleware('auth:sanctum');









    
// ***** AUTHENTICATION MANAGEMENT : Routes for CRUD Roles (creation and management)
//public route
//Route::post('/auth/login', [UserController::class, 'login']);
//protected route
//Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::post('/auth/register', [UserController::class, 'register']);
//     //Route::get('/users', [PostController::class, 'show']);
//     //Route::put('/users/{id}', [PostController::class, 'update'])->middleware('restrictRole:customer');
// });






        



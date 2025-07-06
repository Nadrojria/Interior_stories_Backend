<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Models\Furniture;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\OrderController;

// Ce fichier est utilisé pour définir les routes de l'API de l'application.   

// Routes pour l'authentification et la gestion des utilisateurs
// Ces routes permettent aux utilisateurs de s'inscrire, de se connecter, de se déconnecter,
// de vérifier leur statut et de gérer leurs commandes.

// post pour connecter un utilisateur
Route::post('/login', [LogController::class, 'login']);

// post pour déconnecter l'utilisateur
Route::post('/logout', [LogController::class, 'logout'])
    ->middleware('auth:sanctum');

    // get les informations de l'utilisateur connecté
Route::get('/users', [UserController::class, 'checkUser'])
    ->middleware('auth:sanctum');

    // get des meubles disponibles
Route::get('/furnitures', [FurnitureController::class, 'displayAvailableFurnitures']);

// post pour créer une nouvelle commande
// Cette route permet à un utilisateur connecté de créer une nouvelle commande
Route::post('/order',[OrderController::class, 'newOrder'])
    ->middleware('auth:sanctum');
    
// get pour récupérer les commandes de l'utilisateur connecté
Route::get('/order',[OrderController::class, 'getOrders'])
    ->middleware('auth:sanctum');

    // delete pour supprimer une commande spécifique
Route::delete('/order/{id}', [OrderController::class, 'deleteOrder'])
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






        



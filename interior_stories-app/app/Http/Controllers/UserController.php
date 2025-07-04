<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    public function checkUser (Request $request) {
        return $request->user();
    }
}











// public function register( Request $request) {
//     $data = $request->validate([
//         'name' => 'required|unique:users',
//         'email' => 'required|unique:users',
//         'password' => 'required',
//         'role' => 'in:admin,customer',
//     ]);

//     // Set default role to 'customer' if not provided in the request
//     $userData = array_merge($data, ['role' => $data['role'] ?? 'customer']);


//     // Mass assign the validated request data to a new instance of the User model
//     $user = User::create($userData);
//     $token = $user->createToken('my-token')->plainTextToken;

//     return response()->json([
//         'token' =>$token,
//         'Type' => 'Bearer'
//     ]);
// }

// public function login(Request $request) {

//     $fields = $request->validate([
//         'name' => 'required',
//         'password' => 'required',
//     ]);

//     $user = User::where('name', $fields['name'])->first();

//     if (!$user || !Hash::check($fields['password'], $user->password)) {
//         return response([
//             'message' => 'Wrong credentials'
//         ]);
//     }

//     $token = $user->createToken('my-token')->plainTextToken;

//     return response()->json([
//         'token' => $token,
//         'Type' => 'Bearer',
//         'role' => $user->role // include user role in response
//     ]);
// }
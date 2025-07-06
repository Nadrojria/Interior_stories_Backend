<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// Gère l'authentification des utilisateurs
// Permet aux utilisateurs de se connecter et de se déconnecter
// Utilise Laravel Sanctum pour la gestion des tokens d'accès
// Authentification des utilisateurs via email et mot de passe
// Retourne un token d'accès pour les requêtes ultérieures
class LogController extends Controller {

    public function login(Request $request) {
// Valider les données de la requête
// Vérifier que l'email et le mot de passe sont fournis
        if (auth()->attempt([
            'email' => $request->input('email'), 
            'password' => $request->input('password')])) {

            $user = auth()->user();


            // générer un token d'acces
            // et le retourner avec les informations de l'utilisateur
            // Le token est utilisé pour authentifier les requêtes ultérieures
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'user' => $user,
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]);
        }
// Si l'authentification échoue, retourner une erreur
        return response()->json([
            'error' => 'Unauthenticated user',
            'code' => 401,
        ], 401);
    }
// Déconnexion de l'utilisateur
// Supprimer le token d'accès actuel de l'utilisateur
// Retourner un message de succès
    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout successfull',
        ]);
    }
}
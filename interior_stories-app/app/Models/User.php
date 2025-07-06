<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Modèle représentant un utilisateur de l'application
// Permet d'interagir avec la table 'users' (CRUD, requêtes, etc.)
// Utilisé pour gérer les utilisateurs, leur authentification et leurs rôles
// Les utilisateurs peuvent être des administrateurs ou des clients (customers)
// Le modèle inclut des fonctionnalités pour la gestion des tokens d'API et l'authentification
// Les attributs 'name', 'email', 'password' et 'role'
// sont remplissables lors de la création ou de la mise à jour d'un utilisateur
class User extends Authenticatable {

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}

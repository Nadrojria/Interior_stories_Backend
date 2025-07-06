<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modèle représentant un meuble dans la base de données.
// Permet d'interagir facilement avec la table 'furnitures' (CRUD, requêtes, etc.)
class Furniture extends Model
{
    use HasFactory;
    
    //par défaut Laravel aurait utilisé 'furniture'
    protected $table = 'furnitures'; // Forced to have furniture"s" and not furniture

    // Liste des attributs, 
    // Sécurise l'insertion/modification de données
    protected $fillable = [
        'name',
        'price',
        'category', //(ex: chaise, table, etc.)
        'status', //(available , pending, sold)
        'image',
        'description',
    ];

        // 'price' traité comme un décimal à 2 chiffres après la virgule
    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
        ];
    }
}
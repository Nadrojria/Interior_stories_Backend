<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

// Modèle représentant une commande
// Permet d'interagir avec la table 'orders' (CRUD, requêtes, etc.)
// Une commande peut avoir plusieurs items (furniture) et appartient à un utilisateur (customer)
// Les commandes sont utilisées pour gérer les achats de meubles par les utilisateurs
class Order extends Model
{
    // Attributs
    protected $fillable = [
        'id',
        'furniture_id',
        'user_id',
        'status',
        'created_at',
        'updated_at',
    ];

    // Relation : une commande peut avoir plusieurs items 
    public function orderItems() : HasMany 
    {
        return $this->hasMany(Order::class);
    }

    // Relation : une commande appartient à un utilisateur (customer)
    public function toCustomer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
     
}

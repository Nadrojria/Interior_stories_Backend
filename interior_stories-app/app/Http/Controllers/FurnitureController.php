<?php

namespace App\Http\Controllers;

//use équivalent à import
use Illuminate\Http\Request;
use App\Models\Furniture;

// Gère les meubles disponibles
// Permet d'afficher les meubles disponibles
// Utilise le modèle Furniture pour interagir avec la base de données
// Retourne une liste de meubles disponibles
// La méthode displayAvailableFurnitures retourne tous les meubles dont le statut est "available"
class FurnitureController extends Controller {

    public function displayAvailableFurnitures (Request $request) {
        return Furniture::where('status', 'available')->get();
    }
}
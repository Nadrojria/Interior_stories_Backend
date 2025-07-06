<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Furniture;

// Gère les commandes des utilisateurs
// Permet aux utilisateurs de passer des commandes pour des meubles
// Utilise le modèle Order pour interagir avec la base de données
// Retourne les commandes en cours pour l'utilisateur connecté
// Permet de supprimer une commande et de mettre à jour le statut du meuble
// La méthode newOrder crée une nouvelle commande pour un meuble spécifique
// La méthode getOrders retourne les commandes en cours pour l'utilisateur connecté
// La méthode deleteOrder supprime une commande et remet le meuble à disposition
// Assure que le meuble est marqué comme indisponible lors de la création de la commande
// Assure que le meuble est marqué comme disponible lors de la suppression de la commande
// Utilise l'authentification de Laravel pour récupérer l'utilisateur connecté
class OrderController extends Controller
{
    public function newOrder(Request $request) {
        
        $user = auth()->user();
        $user_id = $user->id;
        
        $Orderdata = Order::create([
            'user_id' => $user_id,
            'furniture_id' => $request->furniture_id,
            'status' => $request->status ?? 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Furniture::where('id', $Orderdata->furniture_id)
            ->update(['status' => 'unavailable']); 

        return response()->json([
            'message' => 'Added to cart',
            'order' => $Orderdata,
        ], 200);
    }

    public function getOrders(Request $request) {

        $user = auth()->user();
        $user_id = $user->id;

        return Order::where('status', 'pending')->where('user_id', $user_id)
            ->get();
    }

    public function deleteOrder($id) {

        $user = auth()->user();
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Article not found.'], 404);
        }

        $furniture_id = $order->furniture_id;
        $order->delete();
        
        Furniture::where('id', $furniture_id)
            ->update(['status' => 'available']); 

        return response()->json(['message' => 'Article cancelled'], 200);
    }
}

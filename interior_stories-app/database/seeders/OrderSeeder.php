<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

// Cette classe est responsable de la génération de données fictives pour les commandes
// Elle crée plusieurs commandes associées à des meubles et à un utilisateur spécifique.
// Les commandes sont insérées dans la base de données avec les champs 'furniture_id', 'user_id', 'created_at' et 'updated_at'.
// Chaque commande est liée à un meuble spécifique et à l'utilisateur avec l'ID 1.
// Les timestamps 'created_at' et 'updated_at' sont définis à la date et l'heure actuelles.
// Cela permet de simuler des commandes passées par l'utilisateur pour les meubles disponibles
class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $orders = [
            [
                'furniture_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'furniture_id' => 2,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'furniture_id' => 3,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Order::insert($orders);
    }
}


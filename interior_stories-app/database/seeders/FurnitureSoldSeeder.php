<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Furniture;

// Ce fichier est responsable de la génération de données fictives pour les meubles Sold
// Il crée un meuble spécifique qui est marqué comme "sold" (vendu) dans la base de données.
// Cela permet de simuler la vente d'un meuble dans l'application, 
// utile pour tester les fonctionnalités liées aux commandes et à la gestion des stocks.
class FurnitureSoldSeeder extends Seeder
{
    public function run(): void
    {
        Furniture::create([
            'name' => 'Soriana Sofa',
            'price' => 8100,
            'category' => 'Sofas & Armchairs',
            'status' => 'sold',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

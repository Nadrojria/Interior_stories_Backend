<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

// Cette classe est responsable de la génération de données fictives pour les utilisateurs
// Elle crée un utilisateur de test avec des informations spécifiques,
// ainsi que des meubles, des meubles vendus et des commandes associées à cet utilisateur.
class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'User Test',
            'email' => 'atest@code.com',
            'password' => Hash::make('testing')
        ]);
        $this->call([
              FurnitureSeeder::class,
          ]);
        $this->call([
              FurnitureSoldSeeder::class,
          ]);
        $this->call([
              OrderSeeder::class,
          ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Insérer un utilisateur admin
class defaultAdmin extends Seeder
{
    public function run()
    {
        User::create(
            [
            'name' => 'admin',
            'email' => 'admin@jf.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            ]
            ); 
    }
}

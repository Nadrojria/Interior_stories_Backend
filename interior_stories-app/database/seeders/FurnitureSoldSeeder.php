<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Furniture;

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

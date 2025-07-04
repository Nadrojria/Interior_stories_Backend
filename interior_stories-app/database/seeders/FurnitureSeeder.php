<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Furniture;

class FurnitureSeeder extends Seeder
{
    public function run(): void
    {
        $furnitures = [
            // Sofas & Armchairs
            [
                'name' => 'Cassina LC3 Sofa',
                'price' => 6300,
                'image' => '/assets/images/furnitures/cassina_lc3_sofa.PNG',
                'category' => 'Sofas & Armchairs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Togo Sofa',
                'price' => 5500,
                'category' => 'Sofas & Armchairs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eames Lounge Chair and Ottoman',
                'price' => 4000,
                'category' => 'Sofas & Armchairs',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Chairs & Benches
            [
                'name' => 'Set of 4 Decca Chairs',
                'price' => 1600,
                'category' => 'Chairs & Benches',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wassily Chair',
                'price' => 2500,
                'category' => 'Chairs & Benches',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Set of 2 Butterfly Chairs',
                'price' => 2000,
                'category' => 'Chairs & Benches',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Set of 10 Wishbone Chairs',
                'price' => 7500,
                'category' => 'Chairs & Benches',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Shelves & Storage
            [
                'name' => 'Michael Draper Shelving Unit',
                'price' => 2400,
                'category' => 'Shelves & Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Poul Cadovius Shelving Unit',
                'price' => 3000,
                'category' => 'Shelves & Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adam Wood Shelves',
                'price' => 1200,
                'category' => 'Shelves & Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'USM Haller Dresser',
                'price' => 1500,
                'category' => 'Shelves & Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Tables & Desks
            [
                'name' => 'Noguchi Coffee Table',
                'price' => 4000,
                'category' => 'Tables & Desks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '529 Rio Coffee Table',
                'price' => 1200,
                'category' => 'Tables & Desks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Saarinen Tulip Dining Table',
                'price' => 7500,
                'category' => 'Tables & Desks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laccio 2 Coffee Table',
                'price' => 1400,
                'category' => 'Tables & Desks',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Beds
            [
                'name' => 'Nelson Thin Edge Bed',
                'price' => 3000,
                'category' => 'Beds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Conoid Bed',
                'price' => 18000,
                'category' => 'Beds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Classic Day Bed',
                'price' => 12000,
                'category' => 'Beds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tricolore & Vecchione Teak Bed',
                'price' => 1500,
                'category' => 'Beds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Furniture::insert($furnitures);
    }
}
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
                'image' => '/assets/images/furnitures/togo_sofa.PNG',
                'category' => 'Sofas & Armchairs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eames Lounge Chair and Ottoman',
                'price' => 4000,
                'image' => '/assets/images/furnitures/eames_lounge_chair.PNG',
                'category' => 'Sofas & Armchairs',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Chairs & Benches
            [
                'name' => 'Set of 4 Cesca Chairs',
                'price' => 1600,
                'image' => '/assets/images/furnitures/cesca_chairs.jpg',
                'category' => 'Chairs & Benches',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wassily Chair',
                'price' => 2500,
                'image' => '/assets/images/furnitures/wassily_chair.jpg',
                'category' => 'Chairs & Benches',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Set of 2 Butterfly Chairs',
                'price' => 2000,
                'image' => '/assets/images/furnitures/butterfly_chairs.jpg',
                'category' => 'Chairs & Benches',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Set of 10 Wishbone Chairs',
                'price' => 7500,
                'image' => '/assets/images/furnitures/whishbone_chairs.jpg',
                'category' => 'Chairs & Benches',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Shelves & Storage
            [
                'name' => 'Michael Draper Shelving Unit',
                'price' => 2400,
                'image' => '/assets/images/furnitures/michael_draper_shelving_unit.PNG',
                'category' => 'Shelves & Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Poul Cadovius Shelving Unit',
                'price' => 3000,
                'image' => '/assets/images/furnitures/poul_cadovius_shelving_unit.PNG',
                'category' => 'Shelves & Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adam Wood Shelves',
                'price' => 1200,
                'image' => '/assets/images/furnitures/adam_wood_shelves.jpg',
                'category' => 'Shelves & Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'USM Haller Dresser',
                'price' => 1500,
                'image' => '/assets/images/furnitures/usm_haller_dresser.PNG',
                'category' => 'Shelves & Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Tables & Desks
            [
                'name' => 'Noguchi Coffee Table',
                'price' => 4000,
                'image' => '/assets/images/furnitures/noguchi_coffee_table.jpg',
                'category' => 'Tables & Desks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '529 Rio Coffee Table',
                'price' => 1200,
                'image' => '/assets/images/furnitures/529_rio_coffee_table.jpg',
                'category' => 'Tables & Desks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Saarinen Tulip Dining Table',
                'price' => 7500,
                'image' => '/assets/images/furnitures/saarinen_tulip_table.jpg',
                'category' => 'Tables & Desks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laccio 2 Coffee Table',
                'price' => 1400,
                'image' => '/assets/images/furnitures/laccio_2_coffee_table.jpg',
                'category' => 'Tables & Desks',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Beds
            [
                'name' => 'Nelson Thin Edge Bed',
                'price' => 3000,
                'image' => '/assets/images/furnitures/nelson_thin_edge_bed.PNG',
                'category' => 'Beds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Conoid Bed',
                'price' => 18000,
                'image' => '/assets/images/furnitures/conoid_bed.jpg',
                'category' => 'Beds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Classic Day Bed',
                'price' => 12000,
                'image' => '/assets/images/furnitures/classic_day_bed.jpg',
                'category' => 'Beds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tricolore & Vecchione Teak Bed',
                'price' => 1500,
                'image' => '/assets/images/furnitures/tricoire_vecchione_teak_bed.PNG',
                'category' => 'Beds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Furniture::insert($furnitures);
    }
}
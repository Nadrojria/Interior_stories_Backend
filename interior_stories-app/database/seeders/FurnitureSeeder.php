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
                'name' => 'Soriana Sofa',
                'price' => 8100,
                'image' => '/assets/images/furnitures/soriana_sofa.PNG',
                'category' => 'Sofas & Armchairs',
                'alt' => 'Ultra-soft “hot-dog” style sofa you would not want to leave',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Cassina LC3 Sofa',
                'price' => 6300,
                'image' => '/assets/images/furnitures/cassina_lc3_sofa.PNG',
                'category' => 'Sofas & Armchairs',
                'alt' => 'Robust yet plush jet-black sofa on a steel base',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Togo Sofa',
                'price' => 5500,
                'image' => '/assets/images/furnitures/togo_sofa.PNG',
                'category' => 'Sofas & Armchairs',
                'alt' => 'Four-piece, seven-seat corner sofa in leaf green with a large matching ottoman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eames Lounge Chair and Ottoman',
                'price' => 4000,
                'image' => '/assets/images/furnitures/eames_lounge_chair.PNG',
                'category' => 'Sofas & Armchairs',
                'alt' => 'Fully adjustable leather lounge chair with matching plush ottoman; modular for custom comfort',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Chairs & Benches
            [
                'name' => 'Set of 4 Cesca Chairs',
                'price' => 1600,
                'image' => '/assets/images/furnitures/cesca_chairs.jpg',
                'category' => 'Chairs & Benches',
                'alt' => 'Set of four cantilever chairs S-shaped front leg flowing into the backrest; seat and back in woven bamboo cane',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wassily Chair',
                'price' => 2500,
                'image' => '/assets/images/furnitures/wassily_chair.jpg',
                'category' => 'Chairs & Benches',
                'alt' => 'Leather sling chair on aluminum frame; close armrests with extra leather tabs for better posture',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Set of 2 Butterfly Chairs',
                'price' => 2000,
                'image' => '/assets/images/furnitures/butterfly_chairs.jpg',
                'category' => 'Chairs & Benches',
                'alt' => 'Cocoon-shaped tanned-leather chairs that cradle you like small hammocks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Set of 10 Wishbone Chairs',
                'price' => 7500,
                'image' => '/assets/images/furnitures/whishbone_chairs.jpg',
                'category' => 'Chairs & Benches',
                'alt' => 'Set of ten blue-green steel chairs with rounded backs and flexible woven-reed seats',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Shelves & Storage
            [
                'name' => 'Michael Draper Shelving Unit',
                'price' => 2400,
                'image' => '/assets/images/furnitures/michael_draper_shelving_unit.PNG',
                'category' => 'Shelves & Storage',
                'alt' => 'Multi-purpose shelving—two large drawers, three high shelves, one low shelf; light wood and aluminium with an ochre-yellow accent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Poul Cadovius Shelving Unit',
                'price' => 3000,
                'image' => '/assets/images/furnitures/poul_cadovius_shelving_unit.PNG',
                'category' => 'Shelves & Storage',
                'alt' => 'Wall-mounted oak system with four deep lower drawers, two upper sliding doors, and six open shelves—perfect for an entryway',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adam Wood Shelves',
                'price' => 1200,
                'image' => '/assets/images/furnitures/adam_wood_shelves.jpg',
                'category' => 'Shelves & Storage',
                'alt' => 'Three columns of finely cut wooden shelves on steel uprights',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'USM Haller Dresser',
                'price' => 1500,
                'image' => '/assets/images/furnitures/usm_haller_dresser.PNG',
                'category' => 'Shelves & Storage',
                'alt' => 'Low storage unit with two large drop-down doors and two shelves; light-green aluminum body with glass top',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Tables & Desks
            [
                'name' => 'Noguchi Coffee Table',
                'price' => 4000,
                'image' => '/assets/images/furnitures/noguchi_coffee_table.jpg',
                'category' => 'Tables & Desks',
                'alt' => 'Triangular glass-top coffee table with rounded edges on interlocking U-shaped wooden legs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '529 Rio Coffee Table',
                'price' => 1200,
                'image' => '/assets/images/furnitures/529_rio_coffee_table.jpg',
                'category' => 'Tables & Desks',
                'alt' => 'Nearly round coffee table split into six wedges, each showing oak wood and white-marble inlay',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Saarinen Tulip Dining Table',
                'price' => 7500,
                'image' => '/assets/images/furnitures/saarinen_tulip_table.jpg',
                'category' => 'Tables & Desks',
                'alt' => 'White polyester dining set—round pedestal table plus six chairs with midnight-blue seat cushions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laccio 2 Coffee Table',
                'price' => 1400,
                'image' => '/assets/images/furnitures/laccio_2_coffee_table.jpg',
                'category' => 'Tables & Desks',
                'alt' => 'Rectangular polyester coffee table on a light aluminium base, topped by a smaller tray-like over-table',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Beds
            [
                'name' => 'Nelson Thin Edge Bed',
                'price' => 3000,
                'image' => '/assets/images/furnitures/nelson_thin_edge_bed.PNG',
                'category' => 'Beds',
                'alt' => 'Complete queen-size bed with slatted base, suede headboard, and two beige bedside tables with drawers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Conoid Bed',
                'price' => 18000,
                'image' => '/assets/images/furnitures/conoid_bed.jpg',
                'category' => 'Beds',
                'alt' => 'Solid oak platform bed with bookshelf/night-table headboard and sliding-door storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Classic Day Bed',
                'price' => 12000,
                'image' => '/assets/images/furnitures/classic_day_bed.jpg',
                'category' => 'Beds',
                'alt' => 'Natural, elegant king-size Japanese-style platform bed in acacia wood',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tricoire & Vecchione Teak Bed',
                'price' => 1500,
                'image' => '/assets/images/furnitures/tricoire_vecchione_teak_bed.PNG',
                'category' => 'Beds',
                'alt' => 'Platform bed with integrated headboard and nightstands in golden light acacia wood',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Furniture::insert($furnitures);
    }
}
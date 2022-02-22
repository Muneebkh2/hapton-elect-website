<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();

        $categories = [
            [
                // 'name' => 'Electrical Switches',
                'name' => 'METAL, PVC, BL & WP SWITCHES',
                // 'image' => 'assets/category/images/electrical_switches.png',
                'image' => 'assets/category/images/switches_category.png',
                'bg_image' => 'assets/category/images/electrical_switches_bg.jpg'
            ],
            [
                // 'name' => 'Commercial Lights',
                'name' => 'MODERN LUMI`NAIRES',
                // 'image' => 'assets/category/images/commercial_lights.png',
                'image' => 'assets/category/images/lights_category.png',
                'bg_image' => 'assets/category/images/commercial_lights_bg.jpg'
            ],
            [
                // 'name' => 'Emergency Lights',
                'name' => 'EMERGENCY STD & EXIT LIGHTS',
                'image' => 'assets/category/images/emergency_lights_category.png',
                'bg_image' => 'assets/category/images/emergency_lights_category_bg.jpg'
            ],
            [
                // 'name' => 'Sensors',
                'name' => 'PIR & MICROWAVE MOTION SENSORS',
                'image' => 'assets/category/images/sensors_category.png',
                'bg_image' => 'assets/category/images/sensors_category_bg.jpg'
            ],
            [
                'name' => 'BRUSHED STEEL - FLITON',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_brushed_steel.png',
                'bg_image' => 'assets/category/images/switches/switches_brushed_steel_bg.jpg'
            ],
            [
                'name' => 'POLISHED NICKEL - FLITON',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_polished_nickel.png',
                'bg_image' => 'assets/category/images/switches/switches_polished_nickel_bg.jpg'
            ],
            [
                'name' => 'POLISHED GOLD - FLITON',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_polished_gold.png',
                'bg_image' => 'assets/category/images/switches/switches_polished_gold_bg.jpg'
            ],
            [
                'name' => 'WIDE WHITE - BALFON',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_white_balfon.png',
                'bg_image' => 'assets/category/images/switches/switches_white_balfon_bg.jpg'
            ],
            [
                'name' => 'BAKELITE - BROCK',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_baklite_brock.png',
                'bg_image' => 'assets/category/images/switches/switches_baklite_brock_bg.jpg'
            ],
            [
                'name' => 'EURO MODULES & ACCESS',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_euro_module.png',
                'bg_image' => 'assets/category/images/switches/switches_euro_module_bg.jpg'
            ],
            [
                'name' => 'METAL CLAD - ROBUST',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_metal_clad.png',
                'bg_image' => 'assets/category/images/switches/switches_metal_clad_bg.jpg'
            ],
            [
                'name' => 'WEATHERPROOF - ROBUST',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_weatherproof.png',
                'bg_image' => 'assets/category/images/switches/switches_weatherproof_bg.jpg'
            ],
            // [
            //     'name' => 'Fliton',
            //     'parent_id' => 1
            // ],
            // [
            //     'name' => 'Brock',
            //     'parent_id' => 1
            // ],
            // [
            //     'name' => 'Balfon',
            //     'parent_id' => 1
            // ],
            // [
            //     'name' => 'Euro Module',
            //     'parent_id' => 1
            // ],
            // [
            //     'name' => 'Robust',
            //     'parent_id' => 1
            // ],
            [
                'name' => 'Indoor Lighting',
                'parent_id' => 2
            ],
            [
                'name' => 'Outdoor Lighting',
                'parent_id' => 2
            ],
            [
                'name' => 'LED Exit Signs',
                'parent_id' => 3
            ],
            [
                'name' => 'LED Exit Lights',
                'parent_id' => 3
            ],
            [
                'name' => 'Emergency Drivers',
                'parent_id' => 3
            ],
            [
                'name' => 'Brushed Steel',
                'parent_id' => 5
            ],
            [
                'name' => 'Polished Gold',
                'parent_id' => 5
            ],
            [
                'name' => 'Polished Nickel',
                'parent_id' => 5
            ],
            [
                'name' => 'Weatherproof',
                'parent_id' => 9
            ],
            [
                'name' => 'Metal Clad',
                'parent_id' => 9
            ],
        ];

        // Servcategory::insert($categories);
        collect($categories)->each(function ($category) { Category::create($category); });
    }
}

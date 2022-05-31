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
                // 'image' => 'assets/category/images/electrical_switches.webp',
                'image' => 'assets/category/images/switches_category.webp',
                'bg_image' => 'assets/category/images/electrical_switches_bg.webp'
            ],
            [
                // 'name' => 'Commercial Lights',
                'name' => 'MODERN LUMINAIRES',
                // 'image' => 'assets/category/images/commercial_lights.webp',
                'image' => 'assets/category/images/lights_category.webp',
                'bg_image' => 'assets/category/images/commercial_lights_bg.webp'
            ],
            [
                // 'name' => 'Emergency Lights',
                'name' => 'EMERGENCY STD & EXIT LIGHTS',
                'image' => 'assets/category/images/emergency_lights_category.webp',
                'bg_image' => 'assets/category/images/emergency_lights_category_bg.webp'
            ],
            [
                // 'name' => 'Sensors',
                'name' => 'PIR & MICROWAVE MOTION SENSORS',
                'image' => 'assets/category/images/sensors_category.webp',
                'bg_image' => 'assets/category/images/sensors_category_bg.webp'
            ],
            [
                'name' => 'BRUSHED STEEL - FLITON',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_brushed_steel.webp',
                'bg_image' => 'assets/category/images/switches/switches_brushed_steel_bg.webp'
            ],
            [
                'name' => 'POLISHED NICKEL - FLITON',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_polished_nickel.webp',
                'bg_image' => 'assets/category/images/switches/switches_polished_nickel_bg.webp'
            ],
            [
                'name' => 'POLISHED GOLD - FLITON',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_polished_gold.webp',
                'bg_image' => 'assets/category/images/switches/switches_polished_gold_bg.webp'
            ],
            [
                'name' => 'WIDE WHITE - BALFON',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_white_balfon.webp',
                'bg_image' => 'assets/category/images/switches/switches_white_balfon_bg.webp'
            ],
            [
                'name' => 'BAKELITE - BROCK',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_baklite_brock.webp',
                'bg_image' => 'assets/category/images/switches/switches_baklite_brock_bg.webp'
            ],
            [
                'name' => 'EURO MODULES & ACCESS',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_euro_module.webp',
                'bg_image' => 'assets/category/images/switches/switches_euro_module_bg.webp'
            ],
            [
                'name' => 'METAL CLAD - ROBUST',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_metal_clad.webp',
                'bg_image' => 'assets/category/images/switches/switches_metal_clad_bg.webp'
            ],
            [
                'name' => 'WEATHERPROOF - ROBUST',
                'parent_id' => 1,
                'image' => 'assets/category/images/switches/switches_weatherproof.webp',
                'bg_image' => 'assets/category/images/switches/switches_weatherproof_bg.webp'
            ],
            [
                'name' => 'Led Downlights',
                'parent_id' => 2,
                'image' => 'assets/category/images/luminaries/luminaries_downlight.webp',
                'bg_image' => 'assets/category/images/luminaries/luminaries_downlight_bg.webp'
            ],
            [
                'name' => 'Led SpotLights',
                'parent_id' => 2,
                'image' => 'assets/category/images/luminaries/luminaries_spotlight.webp',
                'bg_image' => 'assets/category/images/luminaries/luminaries_spotlight_bg.webp'
            ],
            [
                'name' => 'Led Panel Lights',
                'parent_id' => 2,
                'image' => 'assets/category/images/luminaries/luminaries_panel_light.webp',
                'bg_image' => 'assets/category/images/luminaries/luminaries_panel_light_bg.webp'
            ],
            [
                'name' => 'Led Ceiling & Pendant Lights',
                'parent_id' => 2,
                'image' => 'assets/category/images/luminaries/luminaries_ceiling_light.webp',
                'bg_image' => 'assets/category/images/luminaries/luminaries_ceiling_light_bg.webp'
            ],
            [
                'name' => 'Led Track Lights',
                'parent_id' => 2,
                'image' => 'assets/category/images/luminaries/luminaries_track_light.webp',
                'bg_image' => 'assets/category/images/luminaries/luminaries_track_light_bg.webp'
            ],
            [
                'name' => 'Led Linear Lights',
                'parent_id' => 2,
                'image' => 'assets/category/images/luminaries/luminaries_linear_light.webp',
                'bg_image' => 'assets/category/images/luminaries/luminaries_linear_light_bg.webp'
            ],
            [
                'name' => 'MULTI-USAGE EXIT SIGN LIGHTS',
                'parent_id' => 3,
                'image' => 'assets/category/images/emergency/emergency_multi_exit_signlight.webp',
                'bg_image' => 'assets/category/images/emergency/emergency_multi_exit_signlight_bg.webp'
            ],
            [
                'name' => 'SPECIALIZED EXIT SIGN LIGHTS',
                'parent_id' => 3,
                'image' => 'assets/category/images/emergency/emergency_special_exit_signlight.webp',
                'bg_image' => 'assets/category/images/emergency/emergency_special_exit_signlight_bg.webp'
            ],
            [
                'name' => 'EMERGENCY RECESSED DOWNlIGHT',
                'parent_id' => 3,
                'image' => 'assets/category/images/emergency/emergency_downlight.webp',
                'bg_image' => 'assets/category/images/emergency/emergency_downlight_bg.webp'
            ],
            [
                'name' => 'EMERGENCY SURFACE DOWNlIGHT & BAR LIGHT',
                'parent_id' => 3,
                'image' => 'assets/category/images/emergency/emergency_downlight_bar.webp',
                'bg_image' => 'assets/category/images/emergency/emergency_downlight_bar_bg.webp'
            ],
            [
                'name' => 'EMERGENCY TWIN-SPOTLIGHT',
                'parent_id' => 3,
                'image' => 'assets/category/images/emergency/emergency_twinspot.webp',
                'bg_image' => 'assets/category/images/emergency/emergency_twinspot_bg.webp'
            ],
            [
                'name' => 'LED EMERGENCY DRIVERS',
                'parent_id' => 3,
                'image' => 'assets/category/images/emergency/emergency_drivers.webp',
                'bg_image' => 'assets/category/images/emergency/emergency_drivers_bg.webp'
            ],
            [
                'name' => 'Microwave Sensors',
                'parent_id' => 4,
                'image' => 'assets/category/images/switches/switches_weatherproof.webp',
                'bg_image' => 'assets/category/images/switches/switches_weatherproof_bg.webp'
            ],
            [
                'name' => 'PIR Sensors',
                'parent_id' => 4,
                'image' => 'assets/category/images/switches/switches_weatherproof.webp',
                'bg_image' => 'assets/category/images/switches/switches_weatherproof_bg.webp'
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
            // [
            //     'name' => 'Indoor Lighting',
            //     'parent_id' => 2
            // ],
            // [
            //     'name' => 'Outdoor Lighting',
            //     'parent_id' => 2
            // ],
            // [
            //     'name' => 'LED Exit Signs',
            //     'parent_id' => 3
            // ],
            // [
            //     'name' => 'LED Exit Lights',
            //     'parent_id' => 3
            // ],
            // [
            //     'name' => 'Emergency Drivers',
            //     'parent_id' => 3
            // ],
            // [
            //     'name' => 'Brushed Steel',
            //     'parent_id' => 5
            // ],
            // [
            //     'name' => 'Polished Gold',
            //     'parent_id' => 5
            // ],
            // [
            //     'name' => 'Polished Nickel',
            //     'parent_id' => 5
            // ],
            // [
            //     'name' => 'Weatherproof',
            //     'parent_id' => 9
            // ],
            // [
            //     'name' => 'Metal Clad',
            //     'parent_id' => 9
            // ],
        ];

        // Servcategory::insert($categories);
        collect($categories)->each(function ($category) { Category::create($category); });
    }
}

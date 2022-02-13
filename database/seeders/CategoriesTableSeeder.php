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
                'name' => 'Electrical Switches',
                'image' => 'assets/category/images/electrical_switches.png',
                'bg_image' => 'assets/category/images/electrical_switches_bg.jpg'
            ],
            [
                'name' => 'Commercial Lights',
                'image' => 'assets/category/images/commercial_lights.png',
                'bg_image' => 'assets/category/images/commercial_lights_bg.jpg'
            ],
            [
                'name' => 'Emergency Lights',
                'image' => 'assets/category/images/emergency_lights.png',
                'bg_image' => 'assets/category/images/emergency_lights_bg.jpg'
            ],
            [
                'name' => 'Sensors',
                'image' => 'assets/category/images/sensors.png',
                'bg_image' => 'assets/category/images/sensors_bg.jpg'
            ],
            [
                'name' => 'Fliton',
                'parent_id' => 1
            ],
            [
                'name' => 'Brock',
                'parent_id' => 1
            ],
            [
                'name' => 'Balfon',
                'parent_id' => 1
            ],
            [
                'name' => 'Euro Module',
                'parent_id' => 1
            ],
            [
                'name' => 'Robust',
                'parent_id' => 1
            ],
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

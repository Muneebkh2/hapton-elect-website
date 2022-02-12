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
        Category::truncate();

        $categories = [
            [
                'name' => 'Electrical Switches',
            ],
            [
                'name' => 'Commercial Lights',
            ],
            [
                'name' => 'Emergency Lights',
            ],
            [
                'name' => 'Sensors',
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

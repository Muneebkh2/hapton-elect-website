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
                // 'slug' => 'automotive',
            ],
            [
                'name' => 'Commercial Lights',
                // 'slug' => 'business-services',
            ],
            [
                'name' => 'Emergency Lights',
                // 'slug' => 'computer-telecom-&-it-services',
            ],
            [
                'name' => 'Sensors',
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Fliton',
                'parent_id' => 1
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Brock',
                'parent_id' => 1
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Balfon',
                'parent_id' => 1
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Euro Module',
                'parent_id' => 1
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Robust',
                'parent_id' => 1
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Indoor Lighting',
                'parent_id' => 2
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Outdoor Lighting',
                'parent_id' => 2
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'LED Exit Signs',
                'parent_id' => 3
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'LED Exit Lights',
                'parent_id' => 3
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Emergency Drivers',
                'parent_id' => 3
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Brushed Steel',
                'parent_id' => 5
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Polished Gold',
                'parent_id' => 5
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Polished Nickel',
                'parent_id' => 5
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Weatherproof',
                'parent_id' => 9
                // 'slug' => 'education-&-training',
            ],
            [
                'name' => 'Metal Clad',
                'parent_id' => 9
                // 'slug' => 'education-&-training',
            ],
        ];

        // Servcategory::insert($categories);
        collect($categories)->each(function ($category) { Category::create($category); });
    }
}

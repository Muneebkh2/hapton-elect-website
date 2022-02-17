<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Product::truncate();

        $products = [
            [
                'name' => 'Product One',
                'category_id' => 10,
                'image' => '/assets/Switches.jpg'
            ],
            [
                'name' => 'Product Two',
                'category_id' => 11,
                'image' => '/assets/Switches.jpg'
            ],
            [
                'name' => 'Product Three',
                'category_id' => 12,
                'image' => '/assets/Switches.jpg'
            ],
            [
                'name' => 'Product Four',
                'category_id' => 13,
                'image' => '/assets/Switches.jpg'
            ]
        ];

        // Servcategory::insert($products);
        collect($products)->each(function ($product) { Product::create($product); });
    }
}

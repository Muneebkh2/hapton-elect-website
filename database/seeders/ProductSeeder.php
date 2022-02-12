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
        Product::truncate();

        $products = [
            [
                'name' => 'Product One',
                'category_id' => 10
            ],
            [
                'name' => 'Product Two',
                'category_id' => 11
            ],
            [
                'name' => 'Product Three',
                'category_id' => 12
            ],
            [
                'name' => 'Product Four',
                'category_id' => 13
            ]
        ];

        // Servcategory::insert($products);
        collect($products)->each(function ($product) { Product::create($product); });
    }
}

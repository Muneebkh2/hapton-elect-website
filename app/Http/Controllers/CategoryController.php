<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CategoryController extends Controller
{
    public function getCategoriesPage() {
        $categories = Category::whereNull('parent_id')->get();
        return view("pages.category", ["categories" => $categories, "type" => "category"]);
    }

    public function getSubCategoriesPage(Category $category) {
        if(count($category->subcategories)){
            return view("pages.category", ["categories" => $category->subcategories]);
        }
        else{
            return view("pages.products.index", ['category' => $category , "products" => $category->products]);
        }
    }

    public function getChildSubCatgoriesPage(Category $category, $slug) {
        $subCategory = Category::where('slug', $slug)->first();
        $product = Product::where('slug', $slug)
        ->with(["attributes", "file" => function($q){$q->where('type', 'product_image');}, "files" => function($q){$q->where('type', 'manufacturer_partners');}])->first();

        if($subCategory && count($subCategory->subcategories)){
            return view("pages.category", ["categories" => $subCategory->subcategories]);
            }elseif($subCategory){
                return view("pages.products.index", ['category' => $subCategory , "products" => $subCategory->products]);
            }
            elseif($product){
                $relatedProducts = Product::where([['id', '!=', $product->id], ['category_id', '=', $product->category_id]])->with(["file" => function($q){$q->where('type', 'product_image');}])->take(4)->get();
            return view("pages.products.detail", ["product" => $product, "category" => $category, 'relatedProducts' => $relatedProducts]);
        }
    }
}

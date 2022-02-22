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
        return view("pages.category", ["categories" => $categories, "type" => "category", "title" => "Main Categories"]);
    }
/*
    public function getCategoriesPage() {
        $categories = Category::whereNull('parent_id')->get();
    // return response()->json($categories);
        // $categories = Category::where("parent_id", null)->get();
        $title = "Main Categories";
        return view("pages.category", ["categories" => $categories, "type" => "category", "title" => $title]);
    }

    public function getSubCategoriesPage($subCategory) {
        $subCategory = Category::where("slug", $subCategory)->with('subcategory')->get();
        // echo "<pre>";print_r($subCategory);exit;
        $currentURL = URL::current();
        preg_match("/[^\/]+$/", $currentURL, $matches);
        $title = $matches[0];
        return view("pages.category", ["categories" => $subCategory, "type" => "sub-category", "title" => $title]);
*/

    public function getSubCategoriesPage(Category $category) {
        if(count($category->subcategories)){
            return view("pages.category", ["categories" => $category->subcategories, "type" => "category", "title" => $this->getPageTitle()]);
        }
        else{
            return view("pages.products.index", ['category' => $category , "products" => $category->products, "title" => $this->getPageTitle()]);
        }
    }

    public function getChildSubCatgoriesPage(Category $category, $slug) {
        $subCategory = Category::where('slug', $slug)->first();
        $product = Product::where('slug', $slug)
        ->with(["attributes", "file" => function($q){$q->where('type', 'product_image');}, "files" => function($q){$q->where('type', 'manufacturer_partners');}])->first();

        if($subCategory && count($subCategory->subcategories)){
            // dd($subCategory->subcategories);die();
            return view("pages.category", ["categories" => $subCategory->subcategories, "type" => "category", "title" => $this->getPageTitle()]);
        } else if($subCategory) {
            return view("pages.products.index", ['category' => $subCategory , "products" => $subCategory->products, "title" => $this->getPageTitle()]);
        } else if($product) {
            // echo "hahah";
            // dd($product);die();
            $relatedProducts = Product::where([
                ['id', '!=', $product->id],
                ['category_id', '=', $product->category_id]
            ])->with([
                "file" => function($q) {
                    $q->where('type', 'product_image');
                }
            ])->take(4)->get();
            return view("pages.products.detail", ["product" => $product, "category" => $category, 'relatedProducts' => $relatedProducts]);
        }
    }

    private function getPageTitle() {
        $currentURL = URL::current();
        preg_match("/[^\/]+$/", $currentURL, $matches);
        $title = $matches[0];

        return $title;
    }
}

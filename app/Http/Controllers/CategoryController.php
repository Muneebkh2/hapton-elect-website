<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CategoryController extends Controller
{
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
    }

    public function getChildSubCatgoriesPage($subCategory) {
        $currentURL = URL::current();
        // dd($currentURL);die;
        preg_match("/[^\/]+$/", $currentURL, $matches);
        $last_url_param = $matches[0]; // test
        // dd($last_url_param);die;


        // $subCategory = Category::where("slug", $subCategory)->first();
        // $childCategories = Category::where("id");
        // var_dump($subCategory->id);die;
        $subCategory = Category::where("slug", $last_url_param)->with('subcategory')->get();
        // return response()->json($subCategory);
        // echo "<pre>";print_r($subCategory);echo"</pre>";die();
        return view("pages.category", ["categories" => $subCategory, "type" => "child-category", "title" => $last_url_param]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoriesPage() {
        $categories = Category::whereNull('parent_id')->get();
        // $categories = Category::where("parent_id", null)->get();
        return view("pages.category", ["categories" => $categories]);
    }

    public function getSubCategoriesPage($subCategory) {
        $subCategory = Category::where("slug", $subCategory)->with('subcategory')->get();
        // echo "<pre>";print_r($subCategory);exit;
        return view("pages.category", ["categories" => $subCategory]);
    }

    public function getChildSubCatgoriesPage($subCategory) {
        $subCategory = Category::where("slug", $subCategory)->with('subcategory')->get();
        // echo "<pre>";print_r($subCategory);exit;
        return view("pages.category", ["categories" => $subCategory]);
    }
}

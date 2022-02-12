<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/category', [CategoryController::class, 'getCategoriesPage'])->name('category');
Route::get('/category/{subCategory}', [CategoryController::class, 'getSubCategoriesPage'])->name('sub_category');
Route::get('/category/{subCategory}/{childCategory}', [CategoryController::class, 'getChildSubCatgoriesPage'])->name('child_category');
// Route::get('/category', function () {
//     $categories = Category::where('parent_id', null)->get();
//     return view('pages.category', ['categories' => $categories]);
// })->name('category');

Route::get('/product', function () {
    return view('pages.product');
})->name('product');

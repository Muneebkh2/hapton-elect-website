<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Home | About | Contact - Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('pages.index');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::post('/contact-us-page', [\App\Http\Controllers\HomeController::class, 'sendContactEmail'])->name('contact.store');
Route::post('/newsletter-send-page', [\App\Http\Controllers\HomeController::class, 'sendNewsletterEmail'])->name('newsletter.send');

/*
|--------------------------------------------------------------------------
| Categories | Product Listing Page | Product Display Page - Routes
|--------------------------------------------------------------------------
*/
Route::get('/category/{category}/product/{product}', [ProductController::class, 'show'])->name('category.products.show');
Route::get('/category', [CategoryController::class, 'getCategoriesPage'])->name('category');
Route::get('/category/{category}', [CategoryController::class, 'getSubCategoriesPage'])->name('sub_category');
Route::get('/category/{category}/{subCategory}', [CategoryController::class, 'getChildSubCatgoriesPage'])->name('child_category');
Route::get('/category/{category}/{subCategory}/{childCategory}', [ProductController::class, 'getChildCategoryProducts'])->name('category.subCategory.ChildCategory.products');
Route::get('/category/{category}/{subCategory}/{childCategory}/{product:slug}', [ProductController::class, 'showChildCategoryProduct'])->name('category.subCategory.ChildCategory.product');
/*
|--------------------------------------------------------------------------
| Admin Dashboard | Admin Login - Routes
|--------------------------------------------------------------------------
*/
\Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(['namespace' => '\App\Http\Controllers\Admin', 'as' => 'admin::', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::resource('products', \ProductController::class);
    Route::post('products/{product}/update', [\App\Http\Controllers\Admin\ProductController::class,'updateProduct']);
    Route::get('get_products_list', '\App\Http\Controllers\Admin\ProductController@getProducts')->name('productslist');
});

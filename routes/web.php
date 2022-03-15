<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
Route::get('/category/{category}/product/{product}', [ProductController::class, 'show'])->name('category.products.show');

Route::get('/category', [CategoryController::class, 'getCategoriesPage'])->name('category');
Route::get('/category/{category}', [CategoryController::class, 'getSubCategoriesPage'])->name('sub_category');
Route::get('/category/{category}/{subCategory}', [CategoryController::class, 'getChildSubCatgoriesPage'])->name('child_category');

Route::get('/category/{category}/{subCategory}/{childCategory}', [ProductController::class, 'getChildCategoryProducts'])->name('category.subCategory.ChildCategory.products');

Route::get('/category/{category}/{subCategory}/{childCategory}/{product:slug}', [ProductController::class, 'showChildCategoryProduct'])->name('category.subCategory.ChildCategory.product');





\Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['namespace' => '\App\Http\Controllers\Admin', 'as' => 'admin::', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::resource('products', \ProductController::class);

    Route::post('products/{product}/update', [\App\Http\Controllers\Admin\ProductController::class,'updateProduct']);
     
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





$data = json_decode('{
"table_header" : {
  "1" : "article code",
  "2" : "Description",
  "3" : "Nominal Plate Size",
  "4" : "Min. Wall Box Depth",
  "5" : "BSI"
  },
  "table_values" : {
    "1" : {
      "1" : "FBS11A",
      "2" : "1 Gang 1 Way 10 A Switch",
      "3" : "87x87",
      "4" : "25",
      "5" : "BS EN 60669-1"
    },
     "2" : {
      "1" : "FBS11B",
      "2" : "1 Gang 2 Way 10 A Switch",
      "3" : "87x87",
      "4" : "25",
      "5" : "BS EN 60669-1"
    }
    
  }  
  
}');
$newData = collect($data);


// foreach ($newData["table_header"] as $key => $value) {
// 	dump($key . " " . $value);	# code...
// }

// dd("asd");


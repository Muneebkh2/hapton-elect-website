<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;

use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $products = $category->products()->with('file')->get();
        return view('pages.products.index', compact('category', 'products'));
    }





    public function getChildCategoryProducts(Category $category, Category $subCategory, $slug){
        $childCategory = Category::where('slug', $slug)->first();
         $products = $childCategory ? $childCategory->products()->with('file')->get() : '';
         if($products){
             return view('pages.products.index', ['category' => $childCategory , 'products' => $products]);
         }else{
             $product = Product::where('slug', $slug)
             ->with(["attributes", "file" => function($q){$q->where('type', 'product_image');}, "files" => function($q){$q->where('type', 'manufacturer_partners');}])->first();

             $relatedProducts = Product::where([['id', '!=', $product->id], ['category_id', '=', $product->category_id]])->with(["file" => function($q){$q->where('type', 'product_image');}])->take(4)->get();

            return view('pages.products.detail', ['category' => $childCategory , 'product' => $product, 'relatedProducts' => $relatedProducts]);
         }

    }

    public function showChildCategoryProduct(Category $category, Category $subCategory, Category $childCategory, $product){
        $product = Product::where('slug', $product)
        ->with(["attributes", "file" => function($q){$q->where('type', 'product_image');}, "files" => function($q){$q->where('type', 'manufacturer_partners');}])->first();

        $relatedProducts = Product::where([['id', '!=', $product->id], ['category_id', '=', $product->category_id]])->with(["file" => function($q){$q->where('type', 'product_image');}])->take(4)->get();
        return view('pages.products.detail', ['category' => $category, 'subCategory' => $subCategory , 'childCategory' => $childCategory, 'product' => $product, 'relatedProducts' => $relatedProducts]);

   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
       //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $productz
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

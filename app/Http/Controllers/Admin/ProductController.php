<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Attribute;
use App\Models\Category;
use App\Services\HelperService;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$products = Product::with('attributes','files')->get();*/
        return view('admin.products.index');
    }

    public function getProducts () {
        $products = Product::with('attributes','files')->get();
        return DataTables::of($products)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                /* $actionBtn = '<a href="'.url('/admin/products/'.$row->id).'" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>'; */
                $actionBtn = '<a href="'.url('/admin/products/'.$row->id).'" class="edit btn btn-success btn">Edit</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['id', 'name']);
        return view('admin.products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();

        $data['dynamic_table_header'] = json_encode($request->get('product_tbl_header'));
        $data['dynamic_table_body'] = json_encode($request->get('product_tbl_body'));

        $data['slug'] = Str::slug($request->name);

        if ($request->has('bg_image')) {
            $data['bg_image'] = HelperService::uploadAndReturnFile(request('bg_image'), 'product');
        }
        $product =  Product::create($data);

        if(count($request->attribute_name) > 0)
        {
            foreach($request->attribute_name as $key => $attribute){
                $attributes['name'] = $request->attribute_name[$key];
                $attributes['type'] = $request->attribute_type[$key];
                $attributes['value'] = $request->attribute_value[$key];
                $product->attributes()->create($attributes);
            }
        }

        HelperService::uploadFile($request->product_image, $product->id, Product::class, 'product_image', 'product');
        HelperService::uploadFiles($request->manufacturer_partners, $product->id, Product::class, 'manufacturer_partners', 'product');
        HelperService::uploadFiles($request->product_document, $product->id, Product::class, 'product_document', 'product');
        return redirect()->route('admin::products.index')->with('success', 'Product hasbeen created successfully');
    }


    public function updateProduct(UpdateProductRequest $request, Product $product)
    {

        $data = [];
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->slug = Str::slug($request->name);
        $product->dynamic_table_header = json_encode($request->get('product_tbl_header'));
        $product->dynamic_table_body = json_encode($request->get('product_tbl_body'));
        if ($request->has('bg_image')) {
            $product->bg_image = HelperService::uploadAndReturnFile(request('bg_image'), 'product');
        }

        $product->save();


        if(count($request->attribute_name) > 0)
        {
            $product->attributes()->delete();

            foreach($request->attribute_name as $key => $attribute){
                $attributes['name'] = $request->attribute_name[$key];
                $attributes['type'] = $request->attribute_type[$key];
                $attributes['value'] = $request->attribute_value[$key];
                $product->attributes()->create($attributes);
            }
        }

        if($request->has('product_image')){
            $product->files()->where('type','product_document')->delete();
            HelperService::uploadFile($request->product_image, $product->id, Product::class, 'product_image', 'product');
        }


        if($request->has('manufacturer_partners')){
            HelperService::uploadFiles($request->manufacturer_partners, $product->id, Product::class, 'manufacturer_partners', 'product');
        }

        if($request->has('product_document')){
            HelperService::uploadFiles($request->product_document, $product->id, Product::class, 'product_document', 'product');
        }
        return redirect()->route('admin::products.index')->with('success', 'Product has been updated successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $categories = Category::all(['id', 'name']);
        $image = $product->files()->where('type','product_image')->first();
        $attributes = $product->attributes;

        $manufacturerPartners = $product->files()->where('type','manufacturer_partners')->get();
        $productDocument = $product->files()->where('type','product_document')->get();

        return view('admin.products.create')->with([
            'categories' => $categories,
            'product' => $product,
            'image' => $image,
            'attributes' => $attributes,
            'manufacturerPartners' => $manufacturerPartners,
            'productDocument' => $productDocument,
        ]);
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

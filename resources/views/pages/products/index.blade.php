@extends('layouts.default', ['title' => $category->name . ' -Products', 'page' => 'products'])
@section('content')
    <div class="page-header mt-3 mb-5">
        <div class="container">
            <h1 class="page-title text-right">{{$category->name . ' Products'}}</h1>
        </div>
    </div>
    <section id="categories-grid">
        <div class="row no-gutters category-row" style="background: url('./assets/category/bg1.png') no-repeat center / cover;">
            @forelse ($products as $key => $product)
            <div class="col-md-6 category-col">
                <div class="category">
                    <a href="#">
                        <h5 class="category-title"><a href="{{Request::url()}}/{{$product->slug}}">{{$product->name}}</a></h5>
                        {{-- @if ($key == 1)
                        @dd($product->file->name)

                        @endif --}}
                        @if ($product->file )
                            <img src="{{asset($product->file ? 'storage/'.$product->file->path : '')}}" alt="Brushed-steel-fliton" class="img-fluid" />   
                        @else
                            <img src="{{ asset('/assets/no-image-available-icon.jpeg') }}" alt="Brushed-steel-fliton" class="img-fluid" />
                        @endif
                        </a>
                    </div>
                </div>
                @empty
                    <h3 class="ml-5">No Record Found</h3>
            @endforelse
        </div>
    </section>
@stop

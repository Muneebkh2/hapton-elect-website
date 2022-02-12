@extends('layouts.default', ['title' => 'Hapton Switches Ranges'])

@section('content')
{{--
@php
    dd($category);
@endphp --}}

    <div class="page-header mt-3 mb-5">
        <div class="container">
            <h1 class="page-title text-right">Hapton Switches Ranges</h1>
        </div>
    </div>

    <section id="categories-grid">

        <div class="row no-gutters category-row" style="background: url('./assets/category/bg1.png') no-repeat center / cover;">
            {{-- @dd($categories) --}}
            @foreach ($categories as $category)

            {{-- @dd($category->subcategory) --}}

            @if ($type != "category")
                @foreach ($category->subcategory as $subcategory)
                    <div class="col-md-6 category-col">
                        <div class="category">
                            <a href="#">
                                <h5 class="category-title"><a href="{{Request::url()}}/{{$subcategory->slug}}">{{$subcategory->name}}</a></h5>
                                <img src="./assets/category/Brushed-steel-fliton.png" alt="Brushed-steel-fliton" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-6 category-col">
                    <div class="category">
                        <a href="#">
                            <h5 class="category-title"><a href="{{$category->slug}}">{{$category->name}}</a></h5>
                            <img src="./assets/category/Brushed-steel-fliton.png" alt="Brushed-steel-fliton" class="img-fluid" />
                        </a>
                    </div>
                </div>
            @endif

            @endforeach
        </div>

    </section>


@stop

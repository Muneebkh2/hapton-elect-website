@extends('layouts.default', ['title' => $title, 'page' => 'category'])

@section('content')

    {{-- <div class="page-header mt-3 mb-5">
        <div class="container">
            <h1 class="page-title text-right">{{$title}}</h1>
        </div>
    </div> --}}

    <section id="categories-grid">

        <!-- <div class="row no-gutters category-row" style="background: url('./assets/category/bg1.png') no-repeat center / cover;"> -->
        <div class="row no-gutters category-row">
            @foreach ($categories as $category)

                @if ($type != "category")
                    @foreach ($category->subcategory as $subcategory)
                        <div class="col-md-6 category-col" style="background: url('{{url($subcategory->bg_image)}}') no-repeat 100% / 100%;">
                            <div class="category">
                                <a href="#">
                                    <h5 class="category-row-title"><a href="{{Request::url()}}/{{$subcategory->slug}}">{{$subcategory->name}}</a></h5>
                                    <img src="{{asset($subcategory->image)}}" alt="Brushed-steel-fliton" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-6 category-col" style="background: url('{{$category->bg_image ? url($category->bg_image) : ''}}') no-repeat 100% / 100%;">
                        <div class="category">
                            <a href="#">
                                <h5 class="category-row-title"><a href="{{Request::url()}}/{{$category->slug}}">{{$category->name}}</a></h5>
                                <img src="{{asset($category->image)}}" alt="Brushed-steel-fliton" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                @endif

            @endforeach
        </div>

    </section>


@stop

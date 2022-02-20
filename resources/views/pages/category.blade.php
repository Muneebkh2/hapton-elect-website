@extends('layouts.default', ['title' => 'Hapton Switches Ranges'])
@section('content')

    <div class="page-header mt-3 mb-5">
        <div class="container">
            <h1 class="page-title text-right">Hapton Switches Ranges</h1>
        </div>
    </div>

    <section id="categories-grid">

        <div class="row no-gutters category-row" style="background: url('./assets/category/bg1.png') no-repeat center / cover;">
            @foreach ($categories as $category)
                <div class="col-md-6 category-col">
                    <div class="category">
                        <a href="#">
                            <h5 class="category-title"><a href="{{Request::url()}}/{{$category->slug}}">{{$category->name}}</a></h5>
                            <img src="./assets/category/Brushed-steel-fliton.png" alt="Brushed-steel-fliton" class="img-fluid" />
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </section>


@stop

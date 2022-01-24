@extends('layouts.default', ['title' => 'Hapton Switches Ranges'])

@section('content')

    <div class="page-header mt-3 mb-5">
        <div class="container">
            <h1 class="page-title text-right">Hapton Switches Ranges</h1>
        </div>
    </div>

    <section id="categories-grid">
        <div class="row no-gutters category-row" style="background: url('./assets/category/bg1.png') no-repeat center / cover;">
            <div class="col-md-6 category-col">
                <div class="category">
                    <a href="#">
                        <h5 class="category-title">BRUSHED STEEL - FLITON</h5>
                        <img src="./assets/category/Brushed-steel-fliton.png" alt="Brushed-steel-fliton" class="img-fluid" />
                    </a>
                </div>
            </div>
            <div class="col-md-6 category-col">
                <div class="category">
                    <a href="#">
                        <h5 class="category-title">POLISHED GOLD - FLITON</h5>
                        <img src="./assets/category/Polished-gold-fliton.png" alt="Polished-gold-fliton" class="img-fluid" />
                    </a>
                </div>
            </div>
        </div>
        <div class="row no-gutters category-row" style="background: url('./assets/category/bg2.png') no-repeat center / cover;">
            <div class="col-md-6 category-col">
                <div class="category">
                    <a href="#">
                        <h5 class="category-title">POLISHED NICKEL - FLITON</h5>
                        <img src="./assets/category/Polished-nickel-fliton.png" alt="Polished-nickel-fliton" class="img-fluid" />
                    </a>
                </div>
            </div>
            <div class="col-md-6 category-col">
                <div class="category">
                    <a href="#">
                        <h5 class="category-title">WHITE WHITE - BALFON</h5>
                        <img src="./assets/category/white-white.png" alt="white-white" class="img-fluid" />
                    </a>
                </div>
            </div>
        </div>
        <div class="row no-gutters category-row" style="background: url('./assets/category/bg3.png') no-repeat center / cover;">
            <div class="col-md-6 category-col">
                <div class="category">
                    <a href="#">
                        <h5 class="category-title">BAKELITE - BROCK</h5>
                        <img src="./assets/category/Bakelite-brock.png" alt="Bakelite-brock-fliton" class="img-fluid" />
                    </a>
                </div>
            </div>
            <div class="col-md-6 category-col">
                <div class="category">
                    <a href="#">
                        <h5 class="category-title">EURO MODULES & ACCESS</h5>
                        <img src="./assets/category/euro-modules-access.png" alt="euro-modules-access" class="img-fluid" />
                    </a>
                </div>
            </div>
        </div>
        <div class="row no-gutters category-row" style="background: url('./assets/category/bG4.png') no-repeat center / cover;">
            <div class="col-md-12 category-col">
                <div class="category">
                    <a href="#">
                        <h5 class="category-title">METAL CLAD & WP - ROBUST</h5>
                        <img src="./assets/category/metal-clad-robust.png" alt="metal-clad-robust" class="img-fluid" />
                    </a>
                </div>
            </div>
        </div>
    </section>


@stop
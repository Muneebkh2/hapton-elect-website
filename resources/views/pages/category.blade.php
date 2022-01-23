@extends('layouts.default', ['header_class' => 'header-transparent'])

@section('content')
<div id="main-slider" class="owl-carousel owl-theme">
    <div class="slide item">
        <img src="assets/slide1.jpg" alt="" class="img-fluid w-100" />
        <div class="slide-content-box">
            <h1>HAPTON ELECT SWITCHES</h1>
            <p>Turn on your home with style with the Hapton Switches comprehensive range to suit your home.</p>
            <img src="assets/slide-switches.jpg" alt="" class="img-fluid" />
        </div>
    </div>
    <div class="slide item">
        <img src="assets/slide2.jpg" alt="" class="img-fluid w-100" />
        <div class="slide-content-box">
            <h1>LIGHTS <br>TO <br>AMAZE U</h1>
            <p>Turn on your home with style with the Hapton Switches comprehensive range to suit your home.</p>
            <img src="assets/slide-switches.jpg" alt="" class="img-fluid" />
        </div>
    </div>
</div>


<section id="categories-grid">
    <div class="row no-gutters category-row">
        <div class="col-md-6 category">
            <img src="./assets/cat1.jpg" alt="cat1" class="img-fluid w-100" />
        </div>
        <div class="col-md-6 category">
            <img src="./assets/cat2.jpg" alt="cat2" class="img-fluid w-100" />
        </div>
        <div class="col-md-6 category">
            <img src="./assets/cat3.jpg" alt="cat3" class="img-fluid w-100" />
        </div>
        <div class="col-md-6 category">
            <img src="./assets/cat4.jpg" alt="cat4" class="img-fluid w-100" />
        </div>
        <div class="col-md-6 category">
            <img src="./assets/cat5.jpg" alt="cat5" class="img-fluid w-100" />
        </div>
        <div class="col-md-6 category">
            <img src="./assets/cat6.jpg" alt="cat6" class="img-fluid w-100" />
        </div>
    </div>
</section>
@stop
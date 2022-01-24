@extends('layouts.default', ['title' => 'Recessed Downlights'])

@section('content')
<div class="breadcrumbs my-2">
    <div class="container">
        <a href="#">Lights</a> > <a href="#">Recessed Downlights</a> > <span>HD3P1</span>
    </div>
</div>

<div class="product mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 product-featured-image">
                <img src="./assets/product-featured-img.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 product-summary">
                <h1 class="product-title mb-5">Radiant Downlight Fittings</h1>
                <ul class="specification-list">
                    <li><span>Housing:</span> Anodized aluminium with glass & PVC.</li>
                    <li><span>Diffuser:</span> Highly reflective & dispersive.</li>
                    <li><span>Voltage:</span> 160V - 260V Wide range operational voltage.</li>
                    <li><span>LED:</span> Reducing energy consumption with 50,000 hrs lifetime working under temp (-20<sub>o</sub>C to 50<sub>o</sub>C)</li>
                    <li><span>Standards:</span> Manufactured in accordance with & tested as per PTPS IEC 62722</li>
                    <li><span>Chip:</span> Samsung Integrated SMD Chip</li>
                    <li><span>Color:</span> White</li>
                </ul>

                <h5>Adjustable applications</h5>

                <h4>Models</h4>
            </div>
        </div>
    </div>
</div>

<section id="related-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="product text-center">
                    <div class="img-box d-flex align-items-center justify-content-center">
                        <img src="./assets/related-1.png" alt="" class="img-fluid">
                    </div>
                    <h5>HD3-P6</h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product text-center">
                    <div class="img-box d-flex align-items-center justify-content-center">
                        <img src="./assets/related-2.png" alt="" class="img-fluid">
                    </div>
                    <h5>HD4-P3R</h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product text-center">
                    <div class="img-box d-flex align-items-center justify-content-center">
                        <img src="./assets/related-1.png" alt="" class="img-fluid">
                    </div>
                    <h5>HD4-P3S</h5>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product text-center">
                    <div class="img-box d-flex align-items-center justify-content-center">
                        <img src="./assets/related-2.png" alt="" class="img-fluid">
                    </div>
                    <h5>HD3-V2</h5>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@extends('layouts.default', ['header_class' => 'header-transparent', 'title' => 'Home'])


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
                <h1>LIGHTS <br>TO <br> AMAZE U</h1>
                <p>Turn on your home with style with the Hapton Switches comprehensive range to suit your home.</p>
                <img src="assets/slide-switches.jpg" alt="" class="img-fluid" />
            </div>
        </div>
    </div>

    <section id="categories">
        <div class="container-fluid">
            <div class="section-header text-center">
                <h6>World Class Products, Outstanding services</h6>
                <h2>Switches ... Lights ... Sensors</h2>
            </div>
            <div class="row justify-content-around categories">
                <div class="col-lg-auto">
                    <div class="category text-center">
                        <a href="#">
                            <img src="{{ asset('/assets/Switches.jpg') }}" alt="" class="img-fluid" />
                            <span class="category-title">Switches</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-auto mt-4">
                    <div class="category text-center">
                        <a href="#">
                            <img src="{{ asset('/assets/Lights.jpg') }}" alt="" class="img-fluid" />
                            <span class="category-title">Lights</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="category text-center">
                        <a href="#">
                            <img src="{{ asset('/assets/Sensors.jpg') }}" alt="" class="img-fluid" />
                            <span class="category-title">Sensors</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-auto mt-4">
                    <div class="category text-center">
                        <a href="#">
                            <img src="{{ asset('/assets/EM-Lights.jpg') }}" alt="" class="img-fluid" />
                            <span class="category-title">EM Lights</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="">
        <div class="container">
            <div class="row">
                    <div class="col-lg-4 mb-5">
                        <div class="icon-box">
                            <span class="icon"><span class="lnr lnr-home"></span></span>
                            <div class="icon-box--content">
                                <h5>Home Deserves Better</h5>
                                <p>Your elegant home deserves the Hapton Switches and Luminaries for upscale class and optimum performance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon"><span class="lnr lnr-apartment"></span></span>
                        <div class="icon-box--content">
                            <h5>Commercial Durability</h5>
                            <p>Commercial usage is far more rigid than  domestic and we at Hapton understand it very well. Robust switches and Luminaries will last a lot longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon"><span class="lnr lnr-earth"></span></span>
                        <div class="icon-box--content">
                            <h5>Global Presence</h5>
                            <p>We've a worldwide excellent distribution network so no matter wherever you are. Hapton will be there to serve you best.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon"><span class="lnr lnr-cog"></span></span>
                        <div class="icon-box--content">
                            <h5>Innovation Continued</h5>
                            <p>Technology is changing, for good, at an amazing speed and Hapton is always improving and developing new ranges for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon"><span class="lnr lnr-leaf"></span></span>
                        <div class="icon-box--content">
                            <h5>Green Future</h5>
                            <p>We are all responsible for greener and safer future for us the generations to come. All Hapton products are made with eco friendly materials.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon"><span class="lnr lnr-history"></span></span>
                        <div class="icon-box--content">
                            <h5>Unparalleled Support</h5>
                            <p>Our distribution partners are among the best in that region and you will feel complete peace of mind with pre and after sales services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="split-cta">
        <div class="container">
            <div class="he-layout-wrapper he-animated-layout-wrapper d-flex flex-wrap">
                <div class="he-lw-slider-images">
                    <div id="slider-2" class="owl-carousel owl-theme">
                        <div class="slide item">
                            <img src="{{ asset('/assets/split-cta-image.jpg') }}" alt="" class="img-fluid w-100" />
                        </div>
                        <div class="slide item">
                            <img src="{{ asset('/assets/split-cta-image.jpg') }}" alt="" class="img-fluid w-100" />
                        </div>
                        <div class="slide item">
                            <img src="{{ asset('/assets/split-cta-image.jpg') }}" alt="" class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
                <div class="he-lw-content">
                    <div class="cta-content">
                        <h3>YOU & HAPTON</h3>
                        <p>At Hapton our whole and sole focus is not just the satisfaction of our customers, but sheer
                            joy and immense pleasure in using our products. We are continuously developing new products
                            and upgrading our successful ranges.
                        </p>
                        <div class="he-btn-wrap">
                            <a itemprop="url" href="#" target="_self" class="he-btn he-btn-simple">
                                <span class="he-btn-repeating-linear"></span>
                                <span class="he-btn-text">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="stats" class="parallax" data-parallax="scroll" data-image-src="{{ asset('/assets/home-3-parallax-1.jpg') }}">
        <div class="container">
            <div class="row no-gutters">
                <div class="col">
                    <div class="text-center">
                        <span class="counter">34</span>
                        <h6 class="counter-title">World wide distributors</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <span class="counter">680</span>
                        <h6 class="counter-title">Product Ranges</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <span class="counter">100</span>
                        <h6 class="counter-title">% Customer Satisfaction</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <span class="counter">5</span>
                        <h6 class="counter-title">Million Products Sold</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <span class="counter">749</span>
                        <h6 class="counter-title">New Products in line</h6>
                    </div>
                </div>
            </div>
            <!-- <img src="assets/stats-bg.jpg" alt="" class="img-fluid w-100" /> -->
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="section-header text-center">
                <h6 class="section-header--subtitle">Superb Quality Switches, Amazing Lights</h6>
                <h2 class="section-header--title">Switches ... Lights ... Sensors</h2>
                <div class="section-header--line"></div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-4 gallery-col">
                    <div class="img-wrap p-2"><img src="{{ asset('/assets/g1.jpg') }}" alt="1" class="img-fluid w-100" /></div>
                    <div class="img-wrap p-2"><img src="{{ asset('/assets/g2.jpg') }}" alt="2" class="img-fluid w-100" /></div>
                </div>
                <div class="col-lg-4 gallery-col">
                    <div class="img-wrap p-2"><img src="{{ asset('/assets/g3.jpg') }}" alt="3" class="img-fluid w-100" /></div>
                    <div class="img-wrap p-2"><img src="{{ asset('/assets/g4.jpg') }}" alt="4" class="img-fluid w-100" /></div>
                    <div class="img-wrap p-2"><img src="{{ asset('/assets/g5.jpg') }}" alt="5" class="img-fluid w-100" /></div>

                </div>
                <div class="col-lg-4 gallery-col">
                    <div class="img-wrap p-2"><img src="{{ asset('/assets/g6.jpg') }}" alt="6" class="img-fluid w-100" /></div>
                    <div class="img-wrap p-2"><img src="{{ asset('/assets/g7.jpg') }}" alt="7" class="img-fluid w-100" /></div>
                    <div class="img-wrap p-2"><img src="{{ asset('/assets/g8.jpg') }}" alt="8 " class="img-fluid w-100" /></div>
                </div>
            </div>
        </div>
    </section>

    <section id="values">
        <div class="container">
            <div class="d-flex flex-wrap">
                <div class="value-col-1 d-flex">
                    <div class="col-inner">
                        <h3>The Core Company Values</h3>
                        <h6>Keeping the end user in our mind, we are always at work for the optimum output.</h6>
                        <p>Whether its a residential project or a commercial one, we've developed the Hapton range to win
                            the heart and mind of the clients. We offer the longest life products in the given categories and class.
                        </p>
                    </div>
                </div>
                <div class="value-col-2">
                    <div>
                        <div><h4>World Wide</h4></div>
                        <div>
                            <p>– Western Europe</p>
                            <p>– North America</p>
                            <p>– Arabian Gulf</p>
                            <p>– South East Asia</p>
                            <p>– North Africa</p>
                            <p>– South Africa</p>
                        </div>
                    </div>
                </div>
                <div class="value-col-3">
                    <div>
                        <div><h4>Products</h4></div>
                        <div>
                            <p>– Electrical Switches</p>
                            <p>– Spotlights</p>
                            <p>– Downlights</p>
                            <p>– Linear Lights</p>
                            <p>– Sensors</p>
                            <p>– Emergency Lights</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="assist-cta" data-parallax="scroll" data-image-src="{{ asset('/assets/home-3-parallax-2.jpg') }}">
        <div class="container">
            <div class="content text-center">
                <h1>LET US ASSIST YOU</h1>
                <a itemprop="url" href="#" target="_self" class="he-btn he-btn-medium he-btn-solid">
                    <span class="he-btn-border-holder"></span>
                    <span class="he-btn-line-holder"></span>
                    <span class="he-btn-text">Read More</span>
                </a>
            </div>
        </div>
    </div>

    <section id="products-range">
        <div class="container">
            <div class="he-layout-wrapper he-animated-layout-wrapper d-flex flex-wrap">
                <div class="he-lw-image" style="background-image: url({{ asset('/assets/home-3-img-2.jpg') }});background-repeat: no-repeat;background-size: cover;">
                    <img src="{{ asset('/assets/home-3-img-2.jpg') }}" alt="" class="img-fluid d-none">
                </div>
                <div class="he-lw-content" style="background-color: #1B1B1B">
                    <div class="products-range-tabs--inner">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="switches-tab" data-toggle="tab" href="#switches" role="tab" aria-controls="switches" aria-selected="true">Switches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="lights-tab" data-toggle="tab" href="#lights" role="tab" aria-controls="lights" aria-selected="false">Lights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sensors-tab" data-toggle="tab" href="#sensors" role="tab" aria-controls="sensors" aria-selected="false">Sensors & EM Lights</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-3" id="myTabContent">
                            <div class="tab-pane fade show active" id="switches" role="tabpanel" aria-labelledby="switches-tab">
                                <p>Hapton Switches are among the finest in the world. Fliton Metal range is a grandiose line of pure class.
                                    Bexly PVC range is aesthetically marvelous and Bakelite range is economical & sturdy.
                                </p>
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>Fliton - Brushed Steel</li>
                                            <li>Fliton - Polished Gold</li>
                                            <li>Fliton - Brushed Gold</li>
                                            <li>Fliton - Polished Nickel</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>Fliton - Antique Brass</li>
                                            <li>Brock - Bakelite White</li>
                                            <li>Bexly - PVC White</li>
                                            <li>Bexly - PVC Gold</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="lights" role="tabpanel" aria-labelledby="lights-tab">
                                <p>Hapton Switches are among the finest in the world. Fliton Metal range is a grandiose line of pure class.
                                    Bexly PVC range is aesthetically marvelous and Bakelite range is economical & sturdy.
                                </p>
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>Fliton - Brushed Steel</li>
                                            <li>Fliton - Polished Gold</li>
                                            <li>Fliton - Brushed Gold</li>
                                            <li>Fliton - Polished Nickel</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>Fliton - Antique Brass</li>
                                            <li>Brock - Bakelite White</li>
                                            <li>Bexly - PVC White</li>
                                            <li>Bexly - PVC Gold</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sensors" role="tabpanel" aria-labelledby="sensors-tab">
                                <p>Hapton Switches are among the finest in the world. Fliton Metal range is a grandiose line of pure class.
                                    Bexly PVC range is aesthetically marvelous and Bakelite range is economical & sturdy.
                                </p>
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>Fliton - Brushed Steel</li>
                                            <li>Fliton - Polished Gold</li>
                                            <li>Fliton - Brushed Gold</li>
                                            <li>Fliton - Polished Nickel</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>Fliton - Antique Brass</li>
                                            <li>Brock - Bakelite White</li>
                                            <li>Bexly - PVC White</li>
                                            <li>Bexly - PVC Gold</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" data-parallax="scroll" data-image-src="{{ asset('/assets/parallax-img-new-1.jpg') }}">
        <div class="features-inner">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="feature text-center">
                            <div class="circle" id="circle-a">
                                <strong></strong>
                            </div>
                            <h5>ENERGY SAVING</h5>
                            <p>Upto 90% Energy saving with world class LED chips and drivers.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature text-center">
                            <div class="circle" id="circle-b">
                                <strong></strong>
                            </div>
                            <h5>COST SAVING</h5>
                            <p>Upto 70% cost saving in terms of maintenance and repairs.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature text-center">
                            <div class="circle" id="circle-c">
                                <strong></strong>
                            </div>
                            <h5>PEACE OF MIND</h5>
                            <p>A complete peace of mind for you with our after-sales services.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature text-center">
                            <div class="circle" id="circle-d">
                                <strong></strong>
                            </div>
                            <h5>REPLACEMENT GUARANTEE</h5>
                            <p>No interruption in your daily life, get instant replacement and guarantee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

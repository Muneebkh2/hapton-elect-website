@extends('layouts.default', ['header_class' => 'header-transparent', 'title' => 'Home', 'page' => 'home'])

@section('content')
    <div id="main-slider" class="owl-carousel owl-theme">
        <div class="slide item">
            <img src="assets/slider/slider1.jpeg" alt="" class="img-fluid w-100" />
            <div class="slide-content-box">
                <div class="slide-content-box--inner">
                    <h1>HAPTON <br>ELECT SWITCHES</h1>
                    <p>Turn on your home with style with the Hapton Switches comprehensive range to suit your home.</p>
                    <img src="assets/slide-img-1.png" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="slide item">
            <img src="assets/slider/slider2.jpeg" alt="" class="img-fluid w-100" />
            <div class="slide-content-box">
                <div class="slide-content-box--inner">
                    <h1>LIGHTS <br>TO <br> AMAZE US</h1>
                    <p>Perfect lighting for your elegant interiors. Hapton Downlights & Spotlights are made for you.</p>
                    <img src="assets/slide-img-2.png" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="slide item">
            <img src="assets/slider/slider3.jpeg" alt="" class="img-fluid w-100" />
            <div class="slide-content-box">
                <div class="slide-content-box--inner">
                    <h1>KEEPING <br/> IT <br/> ON ALWAYS</h1>
                    <p>Emergency Lights and Kits, illuminate the way when it matter the most.</p>
                    <img src="assets/slide-img-3.png" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <section id="categories">
        <div class="container-fluid">
            <div class="section-header text-center">
                <h6>World Class Products, Outstanding services</h6>
                <h2>Switches ... Lights ... Sensors</h2>
            </div>
            <div class="row justify-content-around categories-row">
                <div class="col-lg-6 col-xl-auto mt-4 mt-lg-0">
                    <div class="category text-center">
                        <a href="{{url('category/metal-pvc-bl-wp-switches')}}">
                            <img src="{{ asset('/assets/Switches.jpg') }}" alt="" class="img-fluid" />
                            <span class="category-title">Switches</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-auto mt-xl-4">
                    <div class="category text-center">
                        <a href="{{url('category/modern-luminaires')}}">
                            <img src="{{ asset('/assets/Lights.jpg') }}" alt="" class="img-fluid" />
                            <span class="category-title">Lights</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-auto mt-4 mt-lg-0">
                    <div class="category text-center">
                        <a href="category/emergency-std-exit-lights">
                            <img src="{{ asset('/assets/EM-Lights.jpg') }}" alt="" class="img-fluid" />
                            <span class="category-title">EM Lights</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-auto mt-xl-4">
                    <div class="category text-center">
                        <a href="{{url('category/pir-microwave-motion-sensors')}}">
                            <img src="{{ asset('/assets/Sensors.jpg') }}" alt="" class="img-fluid" />
                            <span class="category-title">Sensors</span>
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
                            <img src="{{ asset('/assets/split-cta-image-1.jpeg') }}" alt="" class="img-fluid w-100" />
                        </div>
                        <div class="slide item">
                            <img src="{{ asset('/assets/split-cta-image-2.jpeg') }}" alt="" class="img-fluid w-100" />
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
                            <a itemprop="url" href="{{route('about')}}" target="_self" class="he-btn he-btn-simple">
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
                <div class="col-12 col-lg">
                    <div class="text-center">
                        <span class="counter">34</span>
                        <h6 class="counter-title">World wide distributors</h6>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-center">
                        <span class="counter">680</span>
                        <h6 class="counter-title">Product Ranges</h6>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-center">
                        <span class="counter">100</span>
                        <h6 class="counter-title">% Customer Satisfaction</h6>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-center">
                        <span class="counter">5</span>
                        <h6 class="counter-title">Million Products Sold</h6>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-center">
                        <span class="counter">749</span>
                        <h6 class="counter-title">New Products in line</h6>
                    </div>
                </div>
                <!-- <img src="assets/stats-bg.jpg" alt="" class="img-fluid w-100" /> -->
            </div>
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
                    <div class="img-wrap p-3 he-animated-layout-wrapper">
                        <div class="img-wrap--image"><a href="#"><img src="{{ asset('/assets/gallery-5.jpg') }}" alt="1" class="img-fluid w-100" /></a></div>
                        <div class="img-wrap--text">
                            <div class="text-wrapper">
                                <div class="text">
                                    <h5><a href="#">Hapton</a></h5>
                                    <span><a href="#">Commercial Luminaries</a></span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="img-wrap--link"></a>
                    </div>
                    <div class="img-wrap p-3 he-animated-layout-wrapper">
                        <div class="img-wrap--image"><a href="#"><img src="{{ asset('/assets/gallery-8.jpg') }}" alt="2" class="img-fluid w-100" /></a></div>
                        <div class="img-wrap--text">
                            <div class="text-wrapper">
                                <div class="text">
                                    <h5><a href="#">Hapton</a></h5>
                                    <span><a href="#">Hospitality Luminaries</a></span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="img-wrap--link"></a>
                    </div>
                </div>
                <div class="col-lg-4 gallery-col">
                    <div class="img-wrap p-3 he-animated-layout-wrapper">
                        <div class="img-wrap--image"><a href="#"><img src="{{ asset('/assets/gallery-1.jpg') }}" alt="3" class="img-fluid w-100" /></a></div>
                        <div class="img-wrap--text">
                            <div class="text-wrapper">
                                <div class="text">
                                    <h5><a href="#">Hapton</a></h5>
                                    <span><a href="#">Elegant Luminaries</a></span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="img-wrap--link"></a>
                    </div>
                    <div class="img-wrap p-3 he-animated-layout-wrapper">
                        <div class="img-wrap--image"><a href="#"><img src="{{ asset('/assets/gallery-4.jpg') }}" alt="4" class="img-fluid w-100" /></a></div>
                        <div class="img-wrap--text">
                            <div class="text-wrapper">
                                <div class="text">
                                    <h5><a href="#">Hapton</a></h5>
                                    <span><a href="#">Luxurious Switches</a></span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="img-wrap--link"></a>
                    </div>
                    <div class="img-wrap p-3 he-animated-layout-wrapper">
                        <div class="img-wrap--image"><a href="#"><img src="{{ asset('/assets/gallery-6.jpg') }}" alt="5" class="img-fluid w-100" /></a></div>
                        <div class="img-wrap--text">
                            <div class="text-wrapper">
                                <div class="text">
                                    <h5><a href="#">Hapton</a></h5>
                                    <span><a href="#">Emergency Exit Lights</a></span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="img-wrap--link"></a>
                    </div>

                </div>
                <div class="col-lg-4 gallery-col">
                    <div class="img-wrap p-3 he-animated-layout-wrapper">
                        <div class="img-wrap--image"><a href="#"><img src="{{ asset('/assets/gallery-2.jpg') }}" alt="6" class="img-fluid w-100" /></a></div>
                        <div class="img-wrap--text">
                            <div class="text-wrapper">
                                <div class="text">
                                    <h5><a href="#">Hapton</a></h5>
                                    <span><a href="#">Office Luminaries</a></span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="img-wrap--link"></a>
                    </div>
                    <div class="img-wrap p-3 he-animated-layout-wrapper">
                        <div class="img-wrap--image"><a href="#"><img src="{{ asset('/assets/gallery-7.jpg') }}" alt="7" class="img-fluid w-100" /></a></div>
                        <div class="img-wrap--text">
                            <div class="text-wrapper">
                                <div class="text">
                                    <h5><a href="#">Hapton</a></h5>
                                    <span><a href="#">Industrial Switches & Luminaries</a></span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="img-wrap--link"></a>
                    </div>
                    <div class="img-wrap p-3 he-animated-layout-wrapper">
                        <div class="img-wrap--image"><a href="#"><img src="{{ asset('/assets/gallery-3.jpg') }}" alt="8" class="img-fluid w-100" /></a></div>
                        <div class="img-wrap--text">
                            <div class="text-wrapper">
                                <div class="text">
                                    <h5><a href="#">Hapton</a></h5>
                                    <span><a href="#">Emergency Lights</a></span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="img-wrap--link"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="values">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between">
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
                <a itemprop="url" href="{{route('contact')}}" target="_self" class="he-btn he-btn-medium he-btn-solid">
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
                                <p>Hapton has a glorious range of Spotlights, Downlights, and Linear Lights, using the best LED chips and drivers to give best possible performance. Different IP ratings are also available.</p>
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>Mini Spotlight</li>
                                            <li>Narrow angle Spotlight</li>
                                            <li>Spotlight Frames</li>
                                            <li>Super Bright Downlights</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>IP65 Downlights</li>
                                            <li>Deep Cut Downlights</li>
                                            <li>Linear Lights with Profile</li>
                                            <li>Linear Lights with Channels</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sensors" role="tabpanel" aria-labelledby="sensors-tab">
                                <p>We have a very comprehensive range of sensors, like PIR, Microwave, Photocell etc. Emergency Exit lights and Emergency Kits are as per defined government regulations and certified.</p>
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>PIR Motion Sensors</li>
                                            <li>Microwave Motion Sensors</li>
                                            <li>Photocell Light Sensors</li>
                                            <li>Emergency Lights.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <ul class="p-0 m-0">
                                            <li>Em. Exit Lights</li>
                                            <li>Em. Kits for LED Luminaries</li>
                                            <li>Em. Kits for Std. Luminaries.</li>
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

@extends('layouts.default')


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
                            <span class="icon">
                            <img src="{{ asset('/assets/icon-home.png') }}" alt="">
                            </span>
                            <div>
                                <h5>Home Deserves Better</h5>
                                <p>Your elegant home deserves the Hapton Switches and Luminaries for upscale class and optimum performance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon">
                            <img src="{{ asset('/assets/icon-building.png') }}" alt="">
                        </span>
                        <div>
                            <h5>Commercial Durability</h5>
                            <p>Commercial usage is far more rigid than domestic and we at Hapton understand it very well. Robust switches and Luminaries will last a lot longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon">
                            <img src="{{ asset('/assets/icon-globe.png') }}" alt="">
                        </span>
                        <div>
                            <h5>Global Presence</h5>
                            <p>We've a worldwide excellent distribution network so no matter wherever you are. Hapton will be there to serve you best.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon">
                            <img src="{{ asset('/assets/icon-gear.png') }}" alt="">
                        </span>
                        <div>
                            <h5>Innovation Continued</h5>
                            <p>Technology is changing, for good, at an amazing speed and Hapton is always improving and developing new ranges for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon">
                            <img src="{{ asset('/assets/icon-leaf.png') }}" alt="">
                        </span>
                        <div>
                            <h5>Green Future</h5>
                            <p>We are all responsible for greener and safer future for us the generations to come. All Hapton products are made with eco friendly materials.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="icon-box">
                        <span class="icon">
                            <img src="{{ asset('/assets/icon-support.png') }}" alt="">
                        </span>
                        <div>
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
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div id="slider-2" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ asset('/assets/split-cta-image.jpg') }}" alt="" class="img-fluid w-100" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('/assets/split-cta-image.jpg') }}" alt="" class="img-fluid w-100" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('/assets/split-cta-image.jpg') }}" alt="" class="img-fluid w-100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 cta-content">
                    <div>
                        <h2>YOU & HAPTON</h2>
                        <p>At Hapton our whole and sole focus is not just the satisfaction of our customers, but sheer
                            joy and immense pleasure in using our products. We are continuously developing new products
                            and upgrading our successful ranges.
                        </p>
                        <div class="btn-border">
                            <a href="#" class="btn-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="stats">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h2>34</h2>
                        <p>World wide distributors</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <h2>680</h2>
                        <p>Product Ranges</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <h2>100</h2>
                        <p>% Customer Satisfaction</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <h2>5</h2>
                        <p>Million Products Sold</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <h2>749</h2>
                        <p>New Products in line</p>
                    </div>
                </div>
            </div>
            <!-- <img src="assets/stats-bg.jpg" alt="" class="img-fluid w-100" /> -->
        </div>
    </section>

    <section id="gallery">
        <div class="container"> 
            <div class="section-header text-center">
                <h6>Superb Quality Switches, Amazing Lights</h6>
                <h2>Switches ... Lights ... Sensors</h2>
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
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <h3 class="mb-4">The Core Company Values</h3>
                        <p><em>Keeping the end user in our mind, we are always at work for the optimum output.</em></p>
                        <p>Whether its a residential project or a commercial one, we've developed the Hapton range to win
                            the heart and mind of the clients. We offer the longest life products in the given categories and class.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="mb-4">World Wide</h5>
                            <ul class="list-unstyled">
                                <li>- Western Europe</li>
                                <li>- North America</li>
                                <li>- Arabian Gulf</li>
                                <li>- South East Asia</li>
                                <li>- North Africa</li>
                                <li>- South Africa</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="mb-4">Products</h5>
                            <ul class="list-unstyled">
                                <li>- Electical Switches</li>
                                <li>- Spotlights</li>
                                <li>- Downlights</li>
                                <li>- Linear Lights</li>
                                <li>- Sensors</li>
                                <li>- Emergency Lights</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="assist-cta">
        <div class="container">
            <div class="content text-center">
                <h2 class="mb-5">LET US ASSIST YOU</h2>
                <a href="#" class="cta-btn">Read More</a>
            </div>
            <!-- <img src="{{ asset('/assets/assist-cta.jpg') }}" alt="" class="img-fluid w-100" /> -->
        </div>
    </div>

    <section id="products-range">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <img src="assets/house-blueprint.jpg" alt="" class="img-fluid w-100" />
                </div>
                <div class="col-lg-6 products-range-tabs">
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
                                <ul class="list-col-2">
                                    <li>Fliton - Brushed Steel</li>
                                    <li>Fliton - Antique Brass</li>
                                    <li>Fliton - Polished Gold</li>
                                    <li>Brock - Bakelite White</li>
                                    <li>Fliton - Brushed Gold</li>
                                    <li>Bexly - PVC White</li>
                                    <li>Fliton - Polished Nickel</li>  
                                    <li>Bexly - PVC Gold</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="lights" role="tabpanel" aria-labelledby="lights-tab">...</div>
                            <div class="tab-pane fade" id="sensors" role="tabpanel" aria-labelledby="sensors-tab">...</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="container-fluid">
        <div class="features-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="circle" id="circle-a">
                                <strong></strong>
                            </div>
                            <h5 class="mb-3">ENERGY SAVING</h5>
                            <p>Upto 90% Energy saving with world class LED chips and drivers.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="circle" id="circle-b">
                                <strong></strong>
                            </div>
                            <h5 class="mb-3">COST SAVING</h5>
                            <p>Upto 70% cost saving in terms of maintenance and repairs.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="circle" id="circle-c">
                                <strong></strong>
                            </div>
                            <h5 class="mb-3">PEACE OF MIND</h5>
                            <p>A complete peace of mind for you with our after-sales services.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="circle" id="circle-d">
                                <strong></strong>
                            </div>
                            <h5 class="mb-3">REPLACEMENT GUARANTEE</h5>
                            <p>No interruption in your daily life, get instant replacement and guarantee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="" class="contact-form">
                        <div class="form-group">
                            <textarea name="" id="" rows="6" class="form-control" placeholder="Write a message..."></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="btn-border">
                            <input type="submit" class="btn-link" value="Send">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div>
                        <h2>GET IN TOUCH</h2>
                        <p>To know about the products more and for specific enquiries, please contact us. 
                            We'll be more than happy to assist you.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <h5>EU & N.AMERICA</h5>
                                    <a href="#">ea.sales@hapton-elect.uk</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <h5>M.EAST & AFRICA</h5>
                                    <a href="#">mea.sales@hapton-elect.uk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
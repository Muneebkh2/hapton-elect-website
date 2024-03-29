<!-- Footer Start -->
<footer class="site-footer">
    <section class="footer-top">
        <div class="container px-sm-3">
            <div class="row">

                <div class="col-lg-5 pr-md-5">
                    <div>
                        <h4>newsletter</h4>
                        <p>Sign up to our newsletter to receive updates on our latest products.</p>
                        @if(Session::has('newsletter-success'))
                            <div class="alert alert-success">
                                {{ Session::get('newsletter-success') }}
                            </div>
                        @endif
                        <form action="{{route('newsletter.send')}}" class="newsletter-form" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="email" name="email_address"
                                       class="newsletter-email form-control @error('email_address') is-invalid @enderror"
                                       placeholder="your email address" required/>
                                @error('email_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $email_address }}</strong>
                                </span>
                                @enderror
                            </div>
                            <input type="submit" class="btn newsletter-submit" value="SUBSCRIBE">
                        </form>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-sm-4 col-12">
                            <div>
                                <h4>contact us</h4>
                                {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                                <p>Tel: +012 345678<p> --}}
                                <p><a href="mailto:info@hapton-elect.uk" class="email-link">info@hapton-elect.uk</a></p>
                                <p><a href="mailto:sales@hapton-elect.uk" class="email-link">sales@hapton-elect.uk</a></p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div>
                                <h4>products</h4>
                                <nav id="product-navigation">
                                    <div class="menu-container">
                                        <ul id="products-menu" class="menu list-unstyled">
                                            <li><a href="#">Indoor</a></li>
                                            <li><a href="#">Outdoor</a></li>
                                            <li><a href="#">Decorative</a></li>
                                            <li><a href="#">Solar</a></li>
                                            <li><a href="#">Lamps</a></li>
                                            <li><a href="#">Sensors</a></li>
                                            <li><a href="#">Electrical</a></li>
                                            <li><a href="#">Fans</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div>
                                <h4>Quick Links</h4>
                                <nav id="footer-navigation">
                                    <div class="menu-container">
                                        <ul id="footer-menu" class="menu list-unstyled">
                                            <li><a href="{{route('about')}}">About Us</a></li>
                                            {{--<li><a href="{{route('category')}}">Catalogues</a></li>
                                            <li><a href="#">Brands</a></li>
                                            <li><a href="#">Most Popular Products</a></li>
                                            <li><a href="#">News & Events</a></li>--}}
                                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                                            {{--<li><a href="#">FAQs</a></li>
                                            <li><a href="#">Returns & Warranty Policy</a></li>
                                            <li><a href="#">Company Profile</a></li>--}}
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-bottom">
        <div class="container px-sm-3">
            <div class="row">
                <div class="col-lg-4">
                    <p class="text-center text-md-left">© 2022 Hapton Elect UK, All Rights Reserved</p>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <span class="mr-2">connect with us</span>
                        <div class="social-menu d-flex align-items-center">
                            <a href="https://www.facebook.com/hapton.switch/" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/hapton_elect/" target="_blank"><i class="fab fa-instagram"></i></a>
                            {{--<a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Footer End -->

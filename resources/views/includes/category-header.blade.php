<!-- Header Start -->
<header class="site-header {{ $header_class ?? '' }}">
    <div class="container-fluid">
        <div class="d-flex align-items-start align-items-lg-stretch justify-content-between">
            <div class="site-logo">
                <a href="{{ route('home') }}">
                    <img src="{{asset('assets/Hapton-Logo1.png')}}" alt="Hapton" class="img-fluid d-none d-sm-block">
                    <img src="{{asset('assets/logo/hapton-logo-black.png')}}" alt="Hapton" class="img-fluid d-sm-none">
                </a>
            </div>
            <div class="navigation-toggle d-block d-lg-none">
                <a href="javascript:void(0)" class="he-menu-opener">
                    <span class="he-menu-close-icon">
                        <span class="he-hm-lines">
                        <span class="he-hm-line he-line-1"></span>
                        <span class="he-hm-line he-line-2"></span>
                        </span>
                    </span>
                    <span class="he-menu-opener-icon">
                        <span class="he-hm-lines">
                            <span class="he-hm-line he-line-1"></span>
                            <span class="he-hm-line he-line-2"></span>
                            <span class="he-hm-line he-line-3"></span>
                        </span>
                    </span>
                </a>
            </div>

            <nav id="site-navigation" class="d-flex d-lg-none">
                <div class="nav-container">
                    <ul class="menu">
                        <li class="menu-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="menu-item"><a href="{{ route('about') }}">About</a></li>
                        <li class="menu-item"><a href="{{ route('category') }}">Categories</a></li>
                        <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>

            <div class="category-header-right d-none d-lg-flex">
                <nav id="category-page-navigation">
                    <div class="nav-container">
                        <ul class="menu">
                            <li class="menu-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="menu-item"><a href="{{ route('about') }}">About</a></li>
                            <li class="menu-item">
                                <a href="{{ route('category') }}">Category</a>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a href="{{Request::root()}}/category/metal-pvc-bl-wp-switches">
                                            METAL, PVC, BL &amp; WP SWITCHES
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{Request::root()}}/category/modern-luminaires">
                                            MODERN LUMINAIRES
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{Request::root()}}/category/emergency-std-exit-lights">
                                            EMERGENCY STD &amp; EXIT LIGHTS
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{Request::root()}}/category/pir-microwave-motion-sensors">
                                            PIR &amp; MICROWAVE MOTION SENSORS
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <h2 class="page-title">{{ $title }}</h2>
            </div>

        </div>
    </div>
</header>
<!-- Header End -->

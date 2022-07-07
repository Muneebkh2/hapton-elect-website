<!-- Header Start -->
<header class="site-header {{ $header_class ?? '' }}">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="site-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/logo/hapton-logo-white.png') }}" alt="Hapton" class="img-fluid"></a>
            </div>

            @if (Str::contains(Request::path(), 'admin') != 1)
            <div class="navigation-toggle">
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
            <nav id="site-navigation">
                <div class="nav-container">
                    <ul class="menu">
                        <li class="menu-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="menu-item">
                            <a href="{{ route('category') }}">Categories</a>
                            <i class="fa fa-caret-down"> </i>
                            <ul class="sub-menu" style="display: none;">
                                <li class="menu-item">
                                    <a href="{{Request::url()}}/category/metal-pvc-bl-wp-switches">
                                        METAL, PVC, BL &amp; WP SWITCHES
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{Request::url()}}/category/modern-luminaires">
                                        MODERN LUMINAIRES
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{Request::url()}}/category/emergency-std-exit-lights">
                                        EMERGENCY STD &amp; EXIT LIGHTS
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{Request::url()}}/category/pir-microwave-motion-sensors">
                                        PIR &amp; MICROWAVE MOTION SENSORS
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if (Auth::check())
                        <li class="menu-item">
                            <a href="{{ url('/admin/products/create') }}"> Add New Product </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/logout') }}"> Logout </a>
                        </li>
                        @else
                        <li class="menu-item">
                            <a href="{{ url('/login') }}"> Login </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
            @else

            <nav class="admin-navigation">
                <div class="nav-container">
                    <ul class="menu">
                        <li class="menu-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="menu-item">
                            <a href="{{ route('category') }}">Category</a>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a href="{{Request::url()}}/category/metal-pvc-bl-wp-switches">
                                        METAL, PVC, BL &amp; WP SWITCHES
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{Request::url()}}/category/modern-luminaires">
                                        MODERN LUMINAIRES
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{Request::url()}}/category/emergency-std-exit-lights">
                                        EMERGENCY STD &amp; EXIT LIGHTS
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{Request::url()}}/category/pir-microwave-motion-sensors">
                                        PIR &amp; MICROWAVE MOTION SENSORS
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/admin/products') }}"> Products List </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/admin/products/create') }}"> Add New Product </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ url('/logout') }}" class="text-danger"> Logout </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="navigation-toggle">
            </div>
            @endif
        </div>
    </div>
</header>
<!-- Header End -->

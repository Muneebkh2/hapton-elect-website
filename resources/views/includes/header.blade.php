<!-- Header Start -->
<header class="site-header {{ $header_class ?? '' }}">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="site-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/Hapton-Logo.png') }}" alt="Hapton" class="img-fluid"></a>
            </div>

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
                        <li class="menu-item"><a href="{{ route('category') }}">Category</a></li>
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
        </div>
    </div>
</header>
<!-- Header End -->

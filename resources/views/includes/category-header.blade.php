<!-- Header Start -->
<header class="site-header {{ $header_class ?? '' }}">
    <div class="container-fluid">
        <div class="d-md-flex justify-content-md-between">
            <div class="site-logo">
                <a href="{{ route('home') }}"><img src="{{asset('assets/Hapton-Logo1.png')}}" alt="Hapton" class="img-fluid"></a>
            </div>

            <div class="category-header-right">
                <nav id="category-page-navigation">
                    <div class="nav-container">
                        <ul class="menu">
                            <li class="menu-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="menu-item"><a href="{{ route('about') }}">About</a></li>
                            <li class="menu-item"><a href="{{ route('product') }}">Product</a></li>
                            <li class="menu-item"><a href="{{ route('category') }}">Category</a></li>
                            <li class="menu-item"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <h2 class="page-title">{{ $title  }}</h2>
            </div>

        </div>
    </div>
</header>
<!-- Header End -->

<!-- Header Start -->
<header class="site-header {{ $header_class ?? '' }}">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="site-logo">
                <a href="{{ route('home') }}"><img src="assets/Hapton-Logo.png" alt="Hapton" class="img-fluid"></a>
            </div>

            <div class="navigation-toggle"></div>

            <nav id="site-navigation">
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
        </div>
    </div>
</header>
<!-- Header End -->
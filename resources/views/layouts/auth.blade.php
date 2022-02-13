<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital@1&family=Montserrat:wght@200;300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

        <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"/>

        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

        <title>{{ config('app.name') . ' | ' . ucfirst($title) }}</title>
    </head>
    <body>
        <div id="wrapper">

            @include('includes.header')


            <!-- Main Start -->
            <main id="main" class="content">

                <div class="he-grid-lines-holder">
                    <div class="he-grid-line"></div>
                    <div class="he-grid-line"></div>
                    <div class="he-grid-line"></div>
                    <div class="he-grid-line"></div>
                </div>

                @yield('content')
            </main>

            {{-- @include('includes.footer') --}}

        </div>

        <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.1.3/circle-progress.min.js"></script>

        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/js/parallax.min.js') }}"></script>



        <script>

            $(window).load(function() {
                // $('.slide-content-box').addClass('he-item-appear');
            });

            $(document).ready(function() {

                window.addEventListener("scroll", function() {
                    const distance = window.scrollY;
                    document.querySelector(".parallax").style.backgroundPosition = `50% ${distance /
                    100 * 2}px`;
                });

                $('#main-slider').owlCarousel({
                    autoplay: true,
                    autoplayTimeout: 10000,
                    loop: false,
                    nav: false,
                    dots: true,
                    mouseDrag: false,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                        },
                    },
                    animateIn: 'fadeIn',
                    animateOut: 'fadeOut',
                    onInitialized: addOwlAnim,
                    onTranslated: addOwlAnim,

                });

                function addOwlAnim(event) {

                    $('.slide-content-box').removeClass('he-item-appear');

                    var current = event.item.index;
                    var slideContent = $(event.target).find('.owl-item').eq(current).find('.slide-content-box');
                    slideContent.addClass('he-item-appear');
                }

                $('#slider-2').owlCarousel({
                    autoplay: true,
                    autoplayTimeout: 5000,
                    loop: true,
                    nav: false,
                    dots: false,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                        },
                    },
                });

                /**
                *Exampe from https://kottenator.github.io/jquery-circle-progress/
                */
                var progressBarOptions = {
                    startAngle: -1.55,
                    size: 176,
                    thickness: 2,
                    fill: {
                        color: '#6e6e6e'
                    }
                }

                $('#circle-a').circleProgress({
                    value : .9,
                });
                $('#circle-b').circleProgress({
                    value : .7,
                });

                $('.circle').circleProgress(progressBarOptions).on('circle-animation-progress', function(event, progress, stepValue) {
                    // console.log("Step", stepValue);
                    // console.log("Progress", progress);
                    $(this).find('strong').text(String(stepValue.toFixed(2)).substr(2) + '%');
                });

                $('#circle-c, #circle-d').circleProgress({
                    value: 1
                }).on('circle-animation-progress', function(event, progress) {
                    $(this).find('strong').html(Math.round(100 * progress) + '%');
                });


                $('.he-menu-opener').on('click', function() {
                    $('body').toggleClass('nav-open');
                    $(this).toggleClass('he-fm-opened');
                    $('#site-navigation').toggleClass('open');
                });

                $(window).on('scroll', function() {
                    $(".he-animated-layout-wrapper").each(function() {
                        if (isScrolledIntoView($(this))) {
                            $(this).addClass('he-item-appear');
                        }
                    });
                });

                function isScrolledIntoView(elem) {
                    var docViewTop = $(window).scrollTop();
                    var docViewBottom = docViewTop + $(window).height();

                    var elemTop = $(elem).offset().top;
                    var elemBottom = elemTop + $(elem).height();

                    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
                }

            });
        </script>
    </body>
</html>

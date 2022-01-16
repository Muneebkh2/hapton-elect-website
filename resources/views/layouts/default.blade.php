<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">

        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

        <title>Home</title>
    </head>
    <body>
        <div id="wrapper">

        @include('includes.header')


        <!-- Main Start -->
        <main id="main" class="content">
            @yield('content')
        </main>


        @include('includes.footer')

        <div class="page-borders"><div class="page-borders borders-inner"></div></div>
        </div>

        <script 
        src="https://code.jquery.com/jquery-2.2.4.min.js" 
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" 
        crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.1.3/circle-progress.min.js"></script>

        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>



        <script>
            $(document).ready(function() {
                $('#main-slider').owlCarousel({
                    loop:true,
                    nav: false,
                    dots: true,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                        },
                    }
                });

                /**
                *Exampe from https://kottenator.github.io/jquery-circle-progress/
                */
                var progressBarOptions = {
                    startAngle: -1.55,
                    size: 150,
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

                


            });
        </script>
    </body>
</html>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

        <!-- Google Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&family=Roboto+Flex:opsz@8..144&display=swap" rel="stylesheet">
       
		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
       
    </head>
    <body>

        <!-- header-area -->
         @include('frontend.body.newpage_header')
        <!-- header-area-end -->

        <!-- main-area -->
        <main>
           @yield('main')
        </main>
        <!-- main-area-end -->    
        <!-- Footer-area -->
        @include('frontend.body.footer')
        <!-- Footer-area-end -->

    	<!-- JS here -->
        <script src="{{ asset('frontend/assets/js/vendor/jquery-3.5.0.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.odometer.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.appear.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/js_jquery.knob.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/slick.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/ajax-form.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/aos.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/plugins.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/main.js')}}"></script> 
    </body>
</html>        

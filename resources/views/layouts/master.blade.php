<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') &mdash; {{config('app.name')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="{{ asset('template/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('template/fonts/flaticon/font/flaticon.css') }}">



    <link rel="stylesheet" href="{{ asset('template/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

    <!-- <div class="site-wrap"> -->

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    @includeIf('layouts.navbar')

    @yield('main-section')

    @yield('section-1')

    @yield('section-2')

    @yield('section-3')

    @yield('section-4')

    @yield('section-5')

    @yield('section-6')

    @yield('section-7')

    @yield('section-8')

    @yield('section-9')

    @includeIf('layouts.footer')
    <!-- </div> -->

    <script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('template/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('template/js/aos.js') }}"></script>

    <script src="{{ asset('template/js/main.js') }}"></script>

</body>

</html>

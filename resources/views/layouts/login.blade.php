<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} Login</title>

    <link rel="stylesheet" href="{{ asset('/login/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/login/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/login/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/login/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('/login/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/login/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/login/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/login/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/login/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/login/css/main.css') }}">
    <link rel="shortcut icon" href="{{ asset('/login/images/favicon.png') }}" type="image/x-icon">  
</head>
<body>
    <div class="preloader"> 
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!--============= Sign In Section Starts Here =============-->
    <div class="account-section bg_img" data-background="{{ asset('/login/images/account-bg.jpg') }}">
        <div class="container">
            <div class="account-title text-center">
                <a href="{{ url('/') }}" class="back-home"><i class="fas fa-angle-left_"><=</i><span>Back <span class="d-none d-sm-inline-block">To Home</span></span></a>
                <a href="#0" class="logo">
                    <img src="{{ asset('/images/logo/logo.png') }}" alt="logo">
                </a>
            </div>
            @yield('content')
            
        </div>
    </div>
    <!--============= Sign In Section Ends Here =============-->
    <script src="{{ asset('/login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/login/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/login/js/plugins.js') }}"></script>
    <script src="{{ asset('/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/login/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/login/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/login/js/wow.min.js') }}"></script>
    <script src="{{ asset('/login/js/odometer.min.js') }}"></script>
    <script src="{{ asset('/login/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('/login/js/nice-select.js') }}"></script>
    <script src="{{ asset('/login/js/owl.min.js') }}"></script>
    <script src="{{ asset('/login/js/paroller.js') }}"></script>
    <script src="{{ asset('/login/js/main.js') }}"></script>
</body>
</html>
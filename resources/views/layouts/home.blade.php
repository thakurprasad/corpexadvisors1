<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title> Corpex Advisors - @yield('page-title')  </title>


<meta content="Corpex Advisors offering legal services like company registration, private limited company, FSSAI License, ISO registration, Trademark Registration, business incorporation by legal experts." name="description">
<meta content="Corpex Advisors" name="keywords">
<link href="asset/images/logo/fav.png" rel="shortcut icon" type="image/ico">
<meta name="google-site-verification" content="7_Huz0xSTXfwuqQPXPz-Xgja8P-SMlqRqK5TJUNjIcY" />
<link rel=canonical href="index.html" />
<!-- og Tags -->
<meta property="og:title" content="Corpex Advisors - GST Registration, Company Registration, Tax, Audit" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://Corpex Advisors.io" />
<meta property="og:description" content="Corpex Advisors offering legal services like company registration, private limited company, FSSAI License, ISO registration, Trademark Registration, business incorporation by legal experts." />
<meta property="og:site_name" content="Corpex Advisors" />
<meta property="og:image:alt" content="Corpex Advisors - GST Registration, Company Registration, Tax, Audit" />


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}"> 
</head>

<body>
    <div class="main--body">
        <!--========== Preloader ==========-->
        <div class="preloader">
            <div class="preloader-wrapper">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
        <div class="overlay"></div>
        <!--========== Preloader ==========-->        

        <!--=======Header-Section Starts Here=======-->
        <header class="header-section">
              @include('layouts/components/top-menu')
        </header>
        <!--=======Header-Section Ends Here=======-->
        @yield('body')      

        <!-- ==========Footer-Section Starts Here========== -->
            @include('layouts/components/footer-section-with-subscribe')
        <!-- ==========Footer-Section Ends Here========== -->

        
    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <script src="{{ asset('js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('js/nice-select.js') }}"></script>
    <script src="{{ asset('js/owl.min.js') }}"></script>
    <script src="{{ asset('js/paroller.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>


<!-- Mirrored from pixner.net/hyipland/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 18:03:25 GMT -->
</html>

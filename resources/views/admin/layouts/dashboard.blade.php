<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixner.net/hyipland/demo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 18:04:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= (isset($title) ? $title: '' ) ?></title>
    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/main.css') }}">

    <link rel="shortcut icon" href="{{ url('public/assets/images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <div class="main--body dashboard-bg">
        <!--========== Preloader ==========-->
        <div class="preloader">
            <div class="preloader-wrapper">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="overlay"></div>
        <!--========== Preloader ==========-->
        
        
        <!--=======SideHeader-Section Starts Here=======-->
        <div class="notify-overlay"></div>
        <section class="dashboard-section">
            <x-dashbaord.admin-sidebar-menu />
            <div class="dasboard-body">
                <div class="dashboard-hero">
                    <div class="header-top">
                        <div class="container">
                            <div class="mobile-header d-flex justify-content-between d-lg-none align-items-center">
                                <div class="author">
                                    <img src="{{ url('public/assets/images/dashboard/author.png') }}" alt="dashboard">
                                </div>
                                <div class="cross-header-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="mobile-header-content d-lg-flex flex-wrap justify-content-lg-between align-items-center">
                                <ul class="support-area">
                                    <li>
                                        <a href="#0"><i class="flaticon-support"></i>Support</a>
                                    </li>
                                    <li>
                                        <a href="Mailto:info@hyipland.com"><i class="flaticon-email"></i>info@websoft-tech.in </a>
                                    </li>
                                    <li>
                                        <i class="flaticon-globe"></i>
                                        <div class="select-area">
                                            <select class="select-bar" style="display: none;">
                                                <option value="en">English</option>
                                                <option value="bn">Bangla</option>
                                                <option value="sp">Spanish</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dashboard-header-right d-flex flex-wrap justify-content-center justify-content-sm-between justify-content-lg-end align-items-center">
                                    <form class="dashboard-header-search mr-sm-4">
                                        <label for="search"><i class="flaticon-magnifying-glass"></i></label>
                                        <input type="text" placeholder="Search...">
                                    </form>
                                    <ul class="dashboard-right-menus">
                                        <li>
                                            <a href="#0">
                                                <i class="flaticon-email-1"></i>
                                                <span class="number bg-theme-2">4</span>
                                            </a>
                                            <div class="notification-area">
                                                <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                                    <span>4 New Notifications</span>
                                                    <a href="#0">Clear</a>
                                                </div>
                                                <ul class="notification-body">
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <img src="{{ url('public/assets/images/dashboard/author.png') }}" alt="dashboard">
                                                            </div>
                                                            <div class="cont">
                                                                <span class="title">Robinhood Pandey</span>
                                                                <div class="message">Electus rem placeat perspiciatis saepe</div>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <img src="{{ url('public/assets/images/dashboard/author.png') }}" alt="dashboard">
                                                            </div>
                                                            <div class="cont">
                                                                <span class="title">Robinhood Pandey</span>
                                                                <div class="message">Electus rem placeat perspiciatis saepe</div>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <img src="{{ url('public/assets/images/dashboard/author.png') }}" alt="dashboard">
                                                            </div>
                                                            <div class="cont">
                                                                <span class="title">Robinhood Pandey</span>
                                                                <div class="message">Electus rem placeat perspiciatis saepe</div>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notifacation-footer text-center">
                                                    <a href="#0" class="view-all">View All</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#0">
                                                <i class="flaticon-notification"></i>
                                                <span class="number bg-theme">4</span>
                                            </a>
                                            <div class="notification-area">
                                                <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                                    <span>4 New Notifications</span>
                                                    <a href="#0">Clear</a>
                                                </div>
                                                <ul class="notification-body">
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-man"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">New Affiliate Registered</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-atm"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">New deposit completed</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-wallet"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">New Withdraw completed</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-exchange"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">Fund Transfer Completed</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notifacation-footer text-center">
                                                    <a href="#0" class="view-all">View All</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#0" class="author">
                                                <div class="thumb">
                                                    <img src="{{ url('public/assets/images/dashboard/author.png') }}" alt="dashboard">
                                                    <span class="checked">
                                                        <i class="flaticon-checked"></i>
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title">{{ Auth::user()->name }}</h6>
                                                    <!-- <span class="country">India</span> -->
                                                </div>
                                            </a>
                                            <div class="notification-area">
                                                <div class="author-header">
                                                    <div class="thumb">
                                                        <img src="{{ url('public/assets/images/dashboard/author.png') }}" alt="dashboard">
                                                    </div>
                                                    <h6 class="title">{{ Auth::user()->name }}</h6>
                                                    <a href="#mailto:johndoe@gmail.com">   {{ Auth::user()->email }}</a>
                                                </div>
                                                <div class="author-body">
                                                    <ul>
                                                        <li>
                                                            <a href="#0"><i class="far fa-user"></i>Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="#0"><i class="fas fa-user-edit"></i>Edit Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">                
            <i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>                          
                    <div class="dashboard-hero-content text-white">
                        <h3 class="title"><?= (isset($module) ? $module: 'Dashboard' ) ?></h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ url('admin/') }}">Dashboard</a>
                            </li>
                            <li>
                                <?= (isset($title) ? $title: '' ) ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container-fluid">
                     <div class="row pb-30">
                        @yield('body')
                     </div>
                </div>
                <div class="container-fluid sticky-bottom">
                    <div class="dashboard-footer">
                        <div class="d-flex flex-wrap justify-content-between m-0-15-none">
                            <div class="left">
                                &copy; <?= date('Y') ?> <a href="https://websoft-tech.in">Websoft Tech</a>  |  All right reserved.
                            </div>
                            <div class="right">
                                <ul>
                                    <li>
                                        <a href="#">Terms of use</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======SideHeader-Section Ends Here=======-->
        

    </div>

    <script src="{{ url('public/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('public/assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ url('public/assets/js/plugins.js') }}"></script>
    <script src="{{ url('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('public/assets/js/wow.min.js') }}"></script>
    <script src="{{ url('public/assets/js/odometer.min.js') }}"></script>
    <script src="{{ url('public/assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ url('public/assets/js/nice-select.js') }}"></script>
    <script src="{{ url('public/assets/js/owl.min.js') }}"></script>
    <script src="{{ url('public/assets/js/paroller.js') }}"></script>
    <script src="{{ url('public/assets/js/chart.js') }}"></script>
    <script src="{{ url('public/assets/js/circle-progress.js') }}"></script>
    <script src="{{ url('public/assets/js/main.js') }}"></script>
   @yield('script')
    <script>
        $('.progress1.circle').circleProgress({
            value: .75,
            fill: {
                gradient: ['#00cca2', '#00cca2']
            },
            }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(75 * progress) + '<i>%</i>');
        });
        $('.progress2.circle').circleProgress({
            value: .90,
            fill: {
                gradient: ['#8d16e8', '#8d16e8']
            },
            }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(90 * progress) + '<i>%</i>');
        });
        $('.progress3.circle').circleProgress({
            value: .85,
            fill: {
                gradient: ['#ef764c', '#ef764c']
            },
            }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(85 * progress) + '<i>%</i>');
        });
    </script>

</body>


<!-- Mirrored from pixner.net/hyipland/demo/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 18:04:37 GMT -->
</html>
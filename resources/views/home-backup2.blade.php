@extends('layouts.home')
 
@section('page-title')
    {{__('Home') }}
@endsection

@section('body')
	
	 <!--=======Banner-Section Starts Here=======-->
        <section class="banner-section" id="home">
            <div class="banner-bg d-lg-none">
                <img src="{{ url('public/assets/images/banner/banner-bg2.jpg') }}" alt="banner">
            </div>
            <div class="banner-bg d-none d-lg-block bg_img" data-background="{{ url('public/assets/images/banner/banner.jpg') }}">
                <div class="chart-1 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration=".7s">
                    <img src="{{ url('public/assets/images/banner/chart1.png') }}" alt="banner">
                </div>
                <div class="chart-2 wow fadeInDown" data-wow-delay="1s" data-wow-duration=".7s">
                    <img src="{{ url('public/assets/images/banner/chart2.png') }}" alt="banner">
                </div>
                <div class="chart-3 wow fadeInRight" data-wow-delay="1.5s" data-wow-duration=".7s">
                    <img src="{{ url('public/assets/images/banner/chart3.png') }}" alt="banner">
                </div>
                <div class="chart-4 wow fadeInUp" data-wow-delay="2s" data-wow-duration=".7s">
                    <img src="{{ url('public/assets/images/banner/clock.png') }}" alt="banner">
                </div>
            </div>
            <div class="animation-area d-none d-lg-block">
                <div class="plot">
                    <img src="{{ url('public/assets/images/banner/plot.png') }}" alt="banner">
                </div>
                <div class="element-1 wow fadeIn" data-wow-delay="1s">
                    <img src="{{ url('public/assets/images/banner/light.png') }}" alt="banner">
                </div>
                <div class="element-2 wow fadeIn" data-wow-delay="1s">
                    <img src="{{ url('public/assets/images/banner/coin1.png') }}" alt="banner">
                </div>
                <div class="element-3 wow fadeIn" data-wow-delay="1s">
                    <img src="{{ url('public/assets/images/banner/coin2.png') }}" alt="banner">
                </div>
                <div class="element-4 wow fadeIn" data-wow-delay="1s">
                    <img src="{{ url('public/assets/images/banner/coin3.png') }}" alt="banner">
                </div>
                <div class="element-5 wow fadeIn" data-wow-delay="1s">
                    <img src="{{ url('public/assets/images/banner/coin4.png') }}" alt="banner">
                </div>
                <div class="element-6 wow fadeIn" data-wow-delay="1s">
                    <img src="{{ url('public/assets/images/banner/coin5.png') }}" alt="banner">
                </div>
                <div class="element-7 wow fadeIn" data-wow-delay="1s">
                    <img src="{{ url('public/assets/images/banner/coin6.png') }}" alt="banner">
                </div>
                <div class="element-8 wow fadeIn" data-wow-delay="1s">
                    <img src="{{ url('public/assets/images/banner/sheild.png') }}" alt="banner">
                </div>
                <div class="element-9 wow fadeIn" data-wow-delay="1s">
                    <img src="{{ url('public/assets/images/banner/coin7.png') }}" alt="banner">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7">
                        <div class="banner-content">
                            <h1 class="title">Welcome to<span>Corpex </span>Advisors</h1>
                            <p>
                                We simplify your startup company journey.
                            </p>
                            <div class="button-group">
                                <a href="#0" class="custom-button">Get Started Now!</a>
                                <a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="popup video-button"><i class="flaticon-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->


        <!--=======Counter-Section Starts Here=======-->
        <div class="counter-section">
            <div class="container">
                <div class="row align-items-center mb-30-none justify-content-center">
                    <div class="col-sm-6 col-md-4">
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="{{ url('public/assets/images/counter/counter01.png') }}" alt="counter">
                            </div>
                            <div class="counter-content">
                                <div class="counter-header">
                                    <h3 class="title odometer" data-odometer-final="36.9">0</h3><h3 class="title">M</h3>
                                </div>
                                <p>Registered users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="{{ url('public/assets/images/counter/counter02.png') }}" alt="counter">
                            </div>
                            <div class="counter-content">
                                <div class="counter-header">
                                    <h3 class="title odometer" data-odometer-final="174">0</h3>
                                </div>
                                <p>Countries Supported</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="{{ url('public/assets/images/counter/counter03.png') }}" alt="counter">
                            </div>
                            <div class="counter-content">
                                <div class="counter-header">
                                    <h3 class="title">$</h3><h3 class="odometer title" data-odometer-final="10.8">0</h3><h3 class="title">M</h3>
                                </div>
                                <p>Average Investment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=======Counter-Section Ends Here=======-->


        <!--=======About-Section Starts Here=======-->
        <section class="about-section padding-top padding-bottom" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block rtl">
                        <img src="{{ url('public/assets/images/about/about.png') }}" alt="about">
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header left-style">
                            <span class="cate">Your Dreams Our Platform</span>
                            <h2 class="title">about us</h2>
                            <p>
                                Corpex Advisors is a tech-driven firm which helps startups get registered do their, SECRETARIAL & EVENT and regulatory aspects, We help the start-up in advisory for fundraising, business modeling, and Startup Corpex Advisors CFO Services, technology consulting enabling startup and companies in accessing the internet and be a part of Digital India revolution.
                            </p>
                        </div>
                        <div class="about--content">
                            <div class="about-item">
                                <div class="about-thumb">
                                    <img src="{{ url('public/assets/images/about/about01.png') }}" alt="about">
                                </div>
                                <div class="about-content">
                                    <h5 class="title">Company Valuation</h5>
                                    <p>
                                       Company valuation is a critical part of any business transaction and will be required for many reasons.
                                    </p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-thumb">
                                    <img src="{{ url('public/assets/images/about/about02.png') }}" alt="about">
                                </div>
                                <div class="about-content">
                                    <h5 class="title">File Tax Returns</h5>
                                    <p>
                                        Talk to our team of Experts and get started with everything from GST return filing to IT return filing.
                                    </p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-thumb">
                                    <img src="{{ url('public/assets/images/about/about03.png') }}" alt="about">
                                </div>
                                <div class="about-content">
                                    <h5 class="title">BUSINESS REGISTRATION</h5>
                                    <p>
                                        Talk to our team and get dedicated support in registering from a private limited company to Public Company..
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======About-Section Ends Here=======-->


        <!--=======Feature-Section Starts Here=======-->
        <section class="feature-section padding-top padding-bottom bg_img" data-background="./assets/images/feature/feature-bg.png') }}" id="feature">
            <div class="ball-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="{{ url('public/assets/images/balls/ball1.png') }}" alt="balls">
            </div>
            <div class="ball-2" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="{{ url('public/assets/images/balls/ball2.png') }}" alt="balls">
            </div>
            <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="{{ url('public/assets/images/balls/ball3.png') }}" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-header">
                            <span class="cate">Our Amazing Features</span>
                            <h2 class="title">
                                why choose us
                            </h2>
                            <p class="mw-100">
                                We are worldwide investment company who are committed to the principle of revenue  
                                maximization and reduction of the financial risks at investing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center feature-wrapper">
                    <div class="col-md-6 col-sm-10 col-lg-4">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <img src="{{ url('public/assets/images/feature/feature01.png') }}" alt="feature">
                            </div>
                            <div class="feature-content">
                                <h5 class="title">Cost Effective</h5>
                                <p>Donec tincidunt viverra ligula non interdum. Maecenas nulla </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-lg-4">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <img src="{{ url('public/assets/images/why/why1.png') }}" alt="feature">
                            </div>
                            <div class="feature-content">
                                <h5 class="title">Expert Teams</h5>
                                <p>Donec tincidunt viverra ligula non interdum. Maecenas nulla </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-lg-4">
                        <div class="feature-item">
                            <div class="feature-thumb">
                                <img src="{{ url('public/assets/images/feature/feature03.png') }}" alt="feature">
                            </div>
                            <div class="feature-content">
                                <h5 class="title">24/7 Support Center</h5>
                                <p>Donec tincidunt viverra ligula non interdum. Maecenas nulla </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Feature-Section Ends Here=======-->


        
        <!--=======How-Section Starts Here=======-->
        <section class="get-section padding-top padding-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="section-header">
                            <span class="cate">get to know</span>
                            <h2 class="title">how we work?</h2>
                            <p>
                                Follow these simple steps and make profit!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hover-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 d-lg-block d-none">
                            <div class="hover-tab-area">
                                <div class="tab-area">
                                    <div class="tab-item active first">
                                        <img src="{{ url('public/assets/images/how/how01.png') }}" alt="how">
                                    </div>
                                    <div class="tab-item second">
                                        <img src="{{ url('public/assets/images/how/how03.png') }}" alt="how">
                                    </div>
                                    <div class="tab-item third">
                                        <img src="{{ url('public/assets/images/how/how02.png') }}" alt="how">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-9">
                            <div class="hover-tab-menu">
                                <ul class="tab-menu">
                                    <li class="active">
                                        <div class="menu-thumb">
                                            <span>
                                                01
                                            </span>
                                        </div>
                                        <div class="menu-content">
                                            <h5 class="title">Instant  registration</h5>
                                            <p>
                                                Click <a href="#0">Sign Up</a> to fill the form to get started. </p>
                                                <p>Our startup expert will
                                                connect with you & prepare
                                                documents.
                                              </p>  
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="menu-thumb">
                                            <span>
                                                02
                                            </span>
                                        </div>
                                        <div class="menu-content">
                                            <h5 class="title">MAKE PAYMENT</h5>
                                            <p>
                                                Make online or offline payment for your order.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="menu-thumb">
                                            <span>
                                                03
                                            </span>
                                        </div>
                                        <div class="menu-content">
                                            <h5 class="title">submit documents</h5>
                                            <p>
                                                Submit documents for your order using online dashboard.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======How-Section Ends Here=======-->


        <!--=======Check-Section Starts Here=======-->
        <section class="call-section call-overlay bg_img" data-background="assets/images/call/call-bg.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="call--item">
                            <span class="cate">Why We are always ready</span>
                            <h3 class="title">Request a call back</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="call-button">
                            <a href="Tel:0939303" class="call">
                                <img src="{{ url('public/assets/images/call/icon02.png') }}" alt="call">
                            </a>
                            <a href="#0" class="custom-button"> Contact Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Check-Section Ends Here=======-->


        <!--=======Offer-Section Stars Here=======-->
        <!--<section class="offer-section padding-top padding-bottom pb-max-md-0" id="plan">
            <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="{{ url('public/assets/images/balls/ball-group1.png') }}" alt="balls">
            </div>
            <div class="ball-group-2" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="{{ url('public/assets/images/balls/ball-group2.png') }}" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header">
                            <span class="cate">INVESTMENT OFFER</span>
                            <h2 class="title">OUR INVESTMENT PLANS</h2>
                            <p>
                                Hyipland provides a straightforward and transparent mechanism to attract investments and make more profits.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="offer-wrapper">
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">120%</h3>
                            <span><b>every day</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="{{ url('public/assets/images/offer/offer1.png') }}" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">$10</span><span class="to">to</span><span class="max">$3500</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="{{ url('public/assets/images/offer/offer2.png') }}" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">10 days</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a href="#0" class="custom-button">invest now</a>
                        </div>
                    </div>
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">120%</h3>
                            <span><b>every day</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="{{ url('public/assets/images/offer/offer1.png') }}" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">$10</span><span class="to">to</span><span class="max">$3500</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="{{ url('public/assets/images/offer/offer2.png') }}" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">10 days</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a href="#0" class="custom-button">invest now</a>
                        </div>
                    </div>
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">120%</h3>
                            <span><b>every day</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="{{ url('public/assets/images/offer/offer1.png') }}" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">$10</span><span class="to">to</span><span class="max">$3500</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="{{ url('public/assets/images/offer/offer2.png') }}" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">10 days</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a href="#0" class="custom-button">invest now</a>
                        </div>
                    </div>
                    <div class="offer-item">
                        <div class="offer-header">
                            <h3 class="title">120%</h3>
                            <span><b>every day</b></span>
                        </div>
                        <div class="offer-body">
                            <span class="bal-shape"></span>
                            <div class="item first">
                                <div class="item-thumb">
                                    <img src="{{ url('public/assets/images/offer/offer1.png') }}" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Deposit</h5>
                                    <h5 class="subtitle"><span class="min">$10</span><span class="to">to</span><span class="max">$3500</span></h5>
                                </div>
                            </div>
                            <span class="bal-shape"></span>
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="{{ url('public/assets/images/offer/offer2.png') }}" alt="offer">
                                </div>
                                <div class="item-content">
                                    <h5 class="title">Terms</h5>
                                    <h5 class="subtitle">10 days</h5>
                                </div>
                            </div>
                        </div>
                        <div class="offer-footer">
                            <a href="#0" class="custom-button">invest now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--=======Offer-Section Ends Here=======-->


        <!--=======Proit-Section Starts Here=======-->
        <!--<section class="profit-section padding-top" id="profit">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header">
                            <span class="cate">Calculate the amazing profits</span>
                            <h2 class="title">You Can Earn</h2>
                            <p>Calculate your profit before making an investment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="profit-bg bg_img" data-background="assets/images/profit/profit-bg.png') }}">
                    <div class="animation-group">
                        <div class="platform">
                            <img src="{{ url('public/assets/images/profit/platform.png') }}" alt="profit">
                        </div>
                        <div class="light">
                            <img src="{{ url('public/assets/images/profit/light.png') }}" alt="profit">
                        </div>
                        <div class="coin-1 wow fadeOutDown" data-wow-delay="1s">
                            <img src="{{ url('public/assets/images/profit/coin6.png') }}" alt="profit">
                        </div>
                        <div class="coin-2 wow fadeOutDown" data-wow-delay="1s">
                            <img src="{{ url('public/assets/images/profit/coin2.png') }}" alt="profit">
                        </div>
                        <div class="coin-3 wow fadeOutDown" data-wow-delay="1s">
                            <img src="{{ url('public/assets/images/profit/coin3.png') }}" alt="profit">
                        </div>
                        <div class="coin-4 wow fadeOutDown" data-wow-delay="1s">
                            <img src="{{ url('public/assets/images/profit/coin4.png') }}" alt="profit">
                        </div>
                        <div class="coin-5 wow fadeOutDown" data-wow-delay="1s">
                            <img src="{{ url('public/assets/images/profit/coin5.png') }}" alt="profit">
                        </div>
                        <div class="coin-6 wow fadeOutDown" data-wow-delay="1s">
                            <img src="{{ url('public/assets/images/profit/coin1.png') }}" alt="profit">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="calculate-wrapper tab">
                    <div class="calculate--area">
                        <div class="calculate-area">
                            <div class="calculate-item">
                                <h5 class="title" data-serial="01">Select the plan</h5>
                                <select class="select-bar">
                                    <option value="01">120% daily for 50 days</option>
                                    <option value="02">110% daily for 30 days</option>
                                    <option value="03">105% daily for 20 days</option>
                                    <option value="04">102% daily for 10 days</option>
                                    <option value="05">101% daily for 5 days</option>
                                </select>
                            </div>
                            <div class="calculate-item">
                                <h5 class="title" data-serial="02">Select the currency</h5>
                                <ul class="tab-menu">
                                    <li>usd</li>
                                    <li class="active">btc</li>
                                    <li>eth</li>
                                    <li>rub</li>
                                </ul>
                            </div>
                            <div class="calculate-item">
                                <h5 class="title" data-serial="03">Enter the amount</h5>
                                <input type="number" value="100">
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 USD</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 USD</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="usd-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 USD" data-max="1000 USD">
                                        <div id="usd-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                            <div class="tab-item active">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 BTC</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 BTC</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="btc-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 BTC" data-max="1000 BTC">
                                        <div id="btc-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 ETH</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 ETH</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="eth-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 ETH" data-max="1000 ETH">
                                        <div id="eth-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 RUB</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 RUB</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="rub-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 RUB" data-max="1000 RUB">
                                        <div id="rub-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--=======Proit-Section Ends Here=======-->


        <!--=======Latest-Transaction-Section Starts Here=======-->
        <section class="latest-transaction padding-top padding-bottom" id="transaction">
            <div class="transaction-bg bg_img" data-background="assets/images/transaction/transaction-bg.png') }}">
                <span class="d-none">Image</span>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header">
                            <span class="cate">Latest Transactions</span>
                            <h2 class="title">STARTUP REGISTRATION</h2>
                            <p>Our goal is to simplify investing so that anyone can be an investor.Withthis in mind, 
                            we hand-pick the investments we offer on our platform.</p>
                        </div>
                    </div>
                </div>
                <div class="tab transaction-tab d-flex flex-wrap justify-content-center">
                    <ul class="tab-menu">
                        <li class="active">
                            <div class="thumb">
                                <i class="flaticon-wallet"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">Business </span>                                                         
                                <span class="d-block">Registration</span>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <i class="flaticon-atm"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">fssai &</span>
                                <span class="d-block">eating license</span>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <i class="flaticon-team"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">government</span>
                                <span class="d-block">licenses</span>
                            </div>
                        </li>

                        <li class="active">
                            <div class="thumb">
                                <i class="flaticon-wallet"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">government </span>
                                <span class="d-block">registration</span>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <i class="flaticon-atm"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">trademark</span>
                                <span class="d-block">ipr</span>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <i class="flaticon-atm"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">trademark</span>
                                <span class="d-block">ngo</span>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <i class="flaticon-team"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">business</span>
                                <span class="d-block">conversion</span>
                            </div>
                        </li>
                        <li class="active">
                            <div class="thumb">
                                <i class="flaticon-wallet"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">business</span>
                                <span class="d-block">closure</span>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <i class="flaticon-atm"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">secretarial</span>
                                <span class="d-block">events</span>
                            </div>
                        </li>
                        <li>
                            <div class="thumb">
                                <i class="flaticon-team"></i>
                            </div>
                            <div class="content">
                                <span class="d-block">event</span>
                                <span class="d-block">based</span>
                            </div>
                        </li>
                        </ul>
                        
                    <div class="tab-area">
                        <div class="tab-item active">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Private Limited Company Registration</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction01.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 BTC</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">ildar25864</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction02.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 ETH</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Buha74</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction03.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 LTC</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Eduardo54</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction04.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 XRP</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Pedro33</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction05.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 USD</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Nelson35</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction06.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 XRP</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Doug9544</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction07.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 USD</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Hector 951</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction08.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 LTC</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-item">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Doug9544</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction07.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 USD</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Hector 951</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction08.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 LTC</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">KimHowell21</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction01.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 BTC</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">ildar25864</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction02.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 ETH</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Buha74</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction03.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 LTC</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Eduardo54</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction04.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 XRP</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Pedro33</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction05.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 USD</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Nelson35</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction06.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 XRP</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-item">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Buha74</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction03.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 LTC</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Eduardo54</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction04.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 XRP</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Pedro33</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction05.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 USD</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Nelson35</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction06.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 XRP</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Doug9544</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction07.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 USD</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">Hector 951</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction08.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 LTC</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">KimHowell21</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction01.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 BTC</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-sm-6">
                                    <div class="transaction-item">
                                        <div class="transaction-header">
                                            <h5 class="title">ildar25864</h5>
                                            <span class="date">December 24, 17:57</span>
                                        </div>
                                        <div class="transaction-thumb">
                                            <img src="{{ url('public/assets/images/transaction/transaction02.png') }}" alt="transaction">
                                        </div>
                                        <div class="transaction-footer">
                                            <span class="amount">Amount</span>
                                            <h5 class="sub-title">0.00449721 ETH</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Latest-Transaction-Section Ends Here=======-->


        <!--=======Affiliate-Section Starts Here=======-->
        <section class="affiliate-programe" id="affiliate">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 padding-bottom padding-top">
                        <div class="section-header left-style">
                            <span class="cate">What You’ll Get As</span>
                            <h2 class="title fz-md-49">Affiliate Program</h2>
                            <p>
                                We give you the opportunity to earn money by recommending our website to others. You can start earning money even if you do not invest.
                            </p>
                        </div>
                        <div class="affiliate-wrapper">
                            <div class="affiliate-item">
                                <div class="affiliate-inner">
                                    <div class="affiliate-thumb">
                                        <h3 class="title">2</h3>
                                        <span class="remainder">%</span>
                                        <span class="cont">1st</span>
                                    </div>
                                </div>
                            </div>
                            <div class="affiliate-item cl-two">
                                <div class="affiliate-inner">
                                    <div class="affiliate-thumb">
                                        <h3 class="title">5</h3>
                                        <span class="remainder">%</span>
                                        <span class="cont">2nd</span>
                                    </div>
                                </div>
                            </div>
                            <div class="affiliate-item cl-three">
                                <div class="affiliate-inner">
                                    <div class="affiliate-thumb">
                                        <h3 class="title">12</h3>
                                        <span class="remainder">%</span>
                                        <span class="cont">3rd</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="affiliate-bottom">
                            <h6 class="title">Make money with hyipland</h6>
                            <a href="#0" class="custom-button">
                                learn more <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 d-lg-block d-none">
                        <div class="afiliate-thumb">
                            <img src="{{ url('public/assets/images/affiliate/affiliate.png') }}" alt="affiliate">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Affiliate-Section Ends Here=======-->
        

        <!--=======Check-Section Starts Here=======-->
        <section class="call-section call-overlay bg_img" data-background="assets/images/call/call-bg.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-xl-6">
                        <div class="call-item text-center text-sm-left">
                            <div class="call-icon">
                                <img src="{{ url('public/assets/images/call/icon01.png') }}" alt="call">
                            </div>
                            <div class="call-content">
                                <h5 class="title">Ready To Start Your Earnings Through Crypto Currency</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-xl-6 text-center text-sm-left text-md-right">
                        <a href="#0" class="custom-button">learn more <i class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Check-Section Ends Here=======-->


        <!--=======Check-Section Starts Here=======-->
        <section class="client-section padding-bottom padding-top">
            <div class="background-map">
                <img src="{{ url('public/assets/images/client/client-bg.png') }}" alt="client">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-header left-style">
                            <span class="cate">TESTIMONIALS</span>
                            <h2 class="title"><span>40,000</span> HAPPY CLIENTS AROUND THE WORLD</h2>
                            <p class="mw-500">
                                We have many happy investors invest with us .Some impresions from our Customers!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9">
                        <div class="m--30">
                            <div class="client-slider owl-carousel owl-theme">
                                <div class="client-item">
                                    <div class="client-content">
                                        <p>
                                            Perfect work to start on, support is awesome
                                        </p>
                                        <div class="rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="client-thumb">
                                        <a href="#0">
                                            <img src="{{ url('public/assets/images/client/client01.png') }}" alt="client">
                                        </a>
                                    </div>
                                </div>
                                <div class="client-item">
                                    <div class="client-content">
                                        <p>
                                            Very easy to use, perfect for invest
                                        </p>
                                        <div class="rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="client-thumb">
                                        <a href="#0">
                                            <img src="{{ url('public/assets/images/client/client02.png') }}" alt="client">
                                        </a>
                                    </div>
                                </div>
                                <div class="client-item">
                                    <div class="client-content">
                                        <p>
                                            Awesome hyipland most profitable site!
                                        </p>
                                        <div class="rating">
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span>
                                                <i class="fas fa-star-half-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="client-thumb">
                                        <a href="#0">
                                            <img src="{{ url('public/assets/images/client/client03.png') }}" alt="client">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Check-Section Ends Here=======-->

	  
@endsection  
 
@extends('layouts.home-light')

@section('page-title')
	{{ __('Affiliate') }}
@endsection



@section('body')
	
        <!--=======Banner-Section Starts Here=======-->
        <section class="bg_img hero-section-2 " data-background="{{ url('public/assets/images/about/hero-bg4.png') }}">
            <div class="container">
                <div class="hero-content text-white">
                    <h1 class="title">Affiliates</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            Affiliates
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->


        <!--=======Affiliate-Section Starts Here=======-->
        <section class="affiliate-programe padding-top pt-max-lg-0">
            <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="{{ url('public/assets/images/balls/ball4.png') }}" alt="balls">
            </div>
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
        <section class="call-section call-overlay bg_img" data-background="{{ url('public/assets/images/call/call-bg.jpg') }}">
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
        
        
        <!-- ==========Total-Affiliate-Section Starts Here========== -->
        <section class="total-affiliate-section padding-bottom padding-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header">
                            <span class="cate">You’re Part of something Big</span>
                            <h2 class="title">$50,257,285.47</h2>
                            <p>Total Commissions Paid to Our Affiliates</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-lg-block d-none">
                        <div class="total-thumb rtl">
                            <img src="{{ url('public/assets/images/affiliate/total-1.png') }}" alt="affiliate">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="total-content">
                            <div class="total-bg">
                                <img src="{{ url('public/assets/images/affiliate/affiliate-bg2.png') }}" alt="affiliate">
                            </div>
                            <div class="tot-wrapper">
                                <div class="tot-area">
                                    <div class="tot-item">
                                        <div class="tot-thumb">
                                            <img src="{{ url('public/assets/images/affiliate/tot1.png') }}" alt="affiliate">
                                        </div>
                                        <div class="tot-content">
                                            <div class="counter--item">
                                                <div class="counter-header">
                                                    <h2 class="title odometer" data-odometer-final="20">0</h2>
                                                </div>
                                                <p>
                                                    Supported Languages
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tot-item">
                                        <div class="tot-thumb">
                                            <img src="{{ url('public/assets/images/affiliate/tot3.png') }}" alt="affiliate">
                                        </div>
                                        <div class="tot-content">
                                            <div class="counter--item">
                                                <div class="counter-header">
                                                    <h2 class="title odometer" data-odometer-final="4.5">0</h2>
                                                    <h2 class="title">M</h2>
                                                </div>
                                                <p>
                                                    Users Worldwide
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tot-area">
                                    <div class="tot-item">
                                        <div class="tot-thumb">
                                            <img src="{{ url('public/assets/images/affiliate/tot3.png') }}" alt="affiliate">
                                        </div>
                                        <div class="tot-content">
                                            <div class="counter--item">
                                                <div class="counter-header">
                                                    <h2 class="title odometer" data-odometer-final="800">0</h2>
                                                    <h2 class="title">k</h2>
                                                </div>
                                                <p>
                                                    Popular Investors
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========Total-Affiliate-Section Ends Here========== -->


        <!-- ==========How-Section Starts Here========== -->
        <section class="how-section bg_img padding-top padding-bottom pt-max-md-0" data-background="{{ url('public/assets/images/affiliate/affiliate-bg.png') }}">
            <div class="ball-3" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="{{ url('public/assets/images/balls/ball-group9.png') }}" alt="balls">
            </div>
            <div class="ball-2" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="{{ url('public/assets/images/balls/ball-group10.png') }}" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header">
                            <span class="cate">Here’s how it works</span>
                            <h2 class="title">Getting  started? It’s simple</h2>
                            <p>
                                The affiliate program is our special feature for loyal Investors.Invite users and earn 40% of the fee on their exchange transactions!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-md-6 col-lg-4 col-sm-10">
                        <div class="how-item">
                            <div class="how-thumb-area">
                                <div class="how-thumb">
                                    <img src="{{ url('public/assets/images/how/how4.png') }}" alt="how">
                                </div>
                            </div>
                            <div class="how-content">
                                <h5 class="title">Join Program</h5>
                                <a href="#0">Join Now <i class="flaticon-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-10">
                        <div class="how-item active">
                            <div class="how-thumb-area">
                                <div class="how-thumb">
                                    <img src="{{ url('public/assets/images/how/how5.png') }}" alt="how">
                                </div>
                            </div>
                            <div class="how-content">
                                <h5 class="title">Promote</h5>
                                <a href="#0">Tracking Link <i class="flaticon-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-10">
                        <div class="how-item">
                            <div class="how-thumb-area">
                                <div class="how-thumb">
                                    <img src="{{ url('public/assets/images/how/how6.png') }}" alt="how">
                                </div>
                            </div>
                            <div class="how-content">
                                <h5 class="title">Earn</h5>
                                <a href="#0">Commission Model <i class="flaticon-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========How-Section Ends Here========== -->


        <!-- ==========Why-Affiliate-Section Starts Here========== -->
        <section class="why-affiliate-section padding-bottom padding-top pt-max-lg-0">
            <div class="why--thumb">
                <img src="{{ url('public/assets/images/why/how.png') }}" alt="why">
            </div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="why-affiliate-content">
                            <div class="section-header left-style">
                                <span class="cate">Why Should You</span>
                                <h2 class="title">Join affiliate?</h2>
                                <p>
                                    The affiliate program is our special feature for loyal Investors.
                                </p>
                            </div>
                            <div class="why-area">
                                <div class="why-item">
                                    <div class="why-inner">
                                        <div class="why-thumb">
                                            <img src="{{ url('public/assets/images/why/why1.png') }}" alt="why">
                                        </div>
                                        <div class="why-content">
                                            <h6 class="title">Joining free </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="why-item">
                                    <div class="why-inner">
                                        <div class="why-thumb">
                                            <img src="{{ url('public/assets/images/why/why2.png') }}" alt="why">
                                        </div>
                                        <div class="why-content">
                                            <h6 class="title">Instant Payout</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="why-item">
                                    <div class="why-inner">
                                        <div class="why-thumb">
                                            <img src="{{ url('public/assets/images/why/why3.png') }}" alt="why">
                                        </div>
                                        <div class="why-content">
                                            <h6 class="title">Performance Bonues</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="why-item">
                                    <div class="why-inner">
                                        <div class="why-thumb">
                                            <img src="{{ url('public/assets/images/why/why4.png') }}" alt="why">
                                        </div>
                                        <div class="why-content">
                                            <h6 class="title">Unlimited affiliates</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#0" class="custom-button">join Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========Why-Affiliate-Section Ends Here========== -->


@endsection  



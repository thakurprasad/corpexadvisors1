@extends('layouts.home-light')



@section('page-title')
	{{ __('Contact Us') }}
@endsection


@section('body')
	
        <!--=======Banner-Section Starts Here=======-->
        <section class="bg_img hero-section-2 left-bottom-lg-max" data-background="{{ url('public/assets/images/about/hero-bg5.png') }}">
            <div class="container">
                <div class="hero-content text-white">
                    <h1 class="title">Contact</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            Contact
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->


        <!--=======Contact-Section Starts Here=======-->
        <section class="contact-section padding-bottom padding-top">
            <div class="container">
                <div class="contact-wrapper padding-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-xl-4 offset-xl-1">
                            <div class="contact-header">
                                <h3 class="title">Get in touch</h3>
                                <p>Ready to make life easier?</p>
                            </div>
                            <div class="contact-content">
                                <h3 class="title">Have questions?</h3>
                                <p>
                                    Have questions about payments or price plans? We have answers!
                                </p>
                                <a href="faq.html">Read F.A.Q <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-xl-1">
                            <form class="contact-form" id="contact_form_submit" method="POST" action="{{ url('/contact-us') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">First name</label>
                                    <input type="text" id="name" placeholder="Enter Your Name" required name="name">
                                </div>
                                <div class="form-group">
                                    <label for="surename">Mobile</label>
                                    <input type="tel" id="mobile" placeholder="Enter your Mobile" required name="mobile">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="text" id="email" placeholder="Enter your email" required name="email">
                                </div>
                                <div class="form-group">
                                    <label for="message">How can we help</label>
                                    <textarea name="message" id="message" placeholder="Enter Message"></textarea>
                                </div>
                                @if(session()->has('success'))
                                <div class="form-group">
                                    <span style="color: green;">{{ session()->get('success') }}</span>
                                </div>
                                @endif
                                @if($errors->any())
                                <div class="form-group" style="color: red; line-height: 1;">
                                    <p>There were some problems with your input.</p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                  </div>
                                @endif

                                <div class="form-group">
                                    <input type="submit" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Contact-Section Ends Here=======-->
        

@endsection  



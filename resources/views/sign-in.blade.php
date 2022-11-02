@extends('layouts.home-light')



@section('page-title')
    {{ __('Sign In') }}
@endsection


@section('body')
    
        <!--=======Banner-Section Starts Here=======-->
        <section class="bg_img hero-section-2 left-bottom-lg-max" data-background="{{ url('public/assets/images/about/hero-bg5.png') }}">
            <div class="container">
                <div class="hero-content text-white">
                    <h1 class="title">{{__('Sign In')}}</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            {{__('Sign In')}} 
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
                                <h2 class="title">{{__('Sign In')}}</h2>                            
                                 <p>
                                   Already have an account?  <a class="custom-button" href="{{ url('sign-up') }}">Sign Up <i class="flaticon-right-arrow"></i></a>                                    
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-xl-1">
                            <form class="contact-form" id="contact_form_submit"> 
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" id="name" placeholder="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="surename">Password</label>
                                    <input type="passwrod" id="surename" placeholder="surename" name="name">
                                </div> 
                                <div class="form-group">
                                    <input type="submit" value="{{__('Sign In')}}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Contact-Section Ends Here=======-->
        

@endsection  



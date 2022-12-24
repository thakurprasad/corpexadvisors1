@extends('layouts.login')

@section('content')
<div class="account-wrapper">
    <div class="account-body">
        <h4 class="title mb-20">{{ __('Register') }}</h4>
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="form-group">
                <label for="name">{{ __('Name') }} </label>             
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="Enter Your Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                  <label for="password" class="">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Entere Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror            
            </div>
            <div class="form-group">
                 <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label><input type="radio" name="user_type" value="customer"  style="height:16px;width: 30px;">Customer</label>
                <label><input type="radio" name="user_type" value="affiliate"  style="height:16px;width: 30px;">Affiliate</label>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="custom-button mt-2 mb-2">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
    <div class="or">
        <span>OR</span>
    </div>
    <div class="account-header pb-0">
        <span class="d-block mb-30 mt-2">Sign up with your work email</span>
        <a href="#0" class="sign-in-with"><img src="{{ asset('/login/images/icon/google.png') }}" alt="icon"><span>Sign Up with Google</span></a>
        <span class="d-block mt-15">I have an account? <a href="{{url('login')}}">Sign In Here</a></span>
    </div>
</div>
<style type="text/css">
    .account-wrapper {
    padding-top: 10px;
}
    .form-group {
        text-align: left;
    }
</style>
@endsection

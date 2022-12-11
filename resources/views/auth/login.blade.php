<!-- @ extends('layouts.app') -->
@extends('layouts.login')
@section('content')
<div class="account-wrapper">
    <div class="account-body">
        <h4 class="title mb-20">Login</h4>
         <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="form-group">
                <label for="sign-up">Your Email </label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entere Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <!-- <input type="password" placeholder="Enter Your Password" id="pass" name="password"> -->
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entere Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="sign-in-recovery form-check-label_" for="remember"><input style="height:16px;width: 30px;" class="form-check-input_" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</label>
                </div>

                <div class="col-md-6">
                   @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif 
                </div>

            </div>

            <div class="form-group text-center">
                <button type="submit" class=" custom-button mt-2 mb-2">Sign In</button>
            </div>
        </form>
    </div>
    <div class="or">
        <span>OR</span>
    </div>
    <div class="account-header pb-0">
        <span class="d-block mb-30 mt-2">Sign up with your work email</span>
        <a href="#0" class="sign-in-with"><img src="{{ asset('/login/images/icon/google.png') }}" alt="icon"><span>Sign Up with Google</span></a>
        <span class="d-block mt-15">Don't have an account? <a href="{{url('register')}}">Sign Up Here</a></span>
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

<!-- 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
  -->
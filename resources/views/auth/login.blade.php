@extends('layouts.auth')

@section('content')

<div class="signin-wrapper">

      <div class="signin-box signup">
        <h2 class="slim-logo"><a href="/">lancers<span>.</span></a></h2>
        <h3 class="signin-title-primary">Welcome back!</h3>
        <h5 class="signin-title-secondary lh-4">Sign in to continue.</h5>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->
            <div class="form-group">

            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->
           

            <button class="btn btn-primary btn-block btn-signin">Sign In</button>                
               
        </form>

        <p class="mg-b-0">Don't have an account? <a href="{{route('register')}}">Sign Up</a>
            <br />   
               @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
        </p>

      </div><!-- signin-box -->

    </div>
@endsection

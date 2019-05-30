@extends('layouts.auth')

@section('content')

<div class="signin-wrapper">

      <div class="signin-box signup">
        <h2 class="slim-logo"><a href="/">lancers<span>.</span></a></h2>
        <h3 class="signin-title-primary">{{ __('Reset Password') }}</h3>
        <h5 class="signin-title-secondary lh-4">Happens to the best of us!</h5>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><!-- form-group -->
                     

            <button class="btn btn-primary btn-block btn-signin">{{ __('Send Password Reset Link') }}</button>                
               
        </form>

       

      </div><!-- signin-box -->

    </div>

@endsection

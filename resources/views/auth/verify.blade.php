@extends('layouts.app')

@section('content')

<div class="signin-wrapper">

      <div class="signin-box signup">
        <h2 class="slim-logo"><a href="/">lancers<span>.</span></a></h2>
        <h3 class="signin-title-primary">Almost Done!</h3>
        <h5 class="signin-title-secondary lh-4">{{ __('Verify Your Email Address') }}</h5>

       
            <div class="form-group">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div><!-- form-group -->
           

       
      </div><!-- signin-box -->

    </div>

@endsection

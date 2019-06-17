@extends('user.layouts.app')

@section('content')

<div class="signin-wrapper">

    <div class="signin-box signup">
    <h2 class="slim-logo"><a href="/">
        <svg width="120px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471 163" style="enable-background:new 0 0 471 163; fill: #FB704A;" xml:space="preserve">
            <style type="text/css">
                .st0 {
                    fill: none;
                }
            </style>
            <path d="M21.4,63.4c5.3-5.3,11.4-9.4,18.1-12c6.7-2.7,13.6-4,20.5-4c7,0,13.8,1.3,20.5,4c6.7,2.7,12.8,6.7,18.1,12l7.5,7.5
L91.1,86.2l-7.8-7.5c-3.2-3.2-6.9-5.7-10.9-7.3C68.4,69.8,64.2,69,60,69c-4.2,0-8.3,0.8-12.4,2.4c-4.1,1.6-7.7,4.1-10.9,7.3
c-3.2,3.1-5.7,6.6-7.3,10.7c-1.6,4.1-2.4,8.2-2.4,12.4c0,4.2,0.8,8.4,2.4,12.4c1.6,4.1,4,7.7,7.3,10.9c6.5,6.5,14.3,9.7,23.3,9.7
c4.4,0,8.6-0.8,12.6-2.4c4-1.6,7.6-4,10.7-7.3l7.8-7.5l15.1,15.3l-7.5,7.5c-5.3,5.3-11.4,9.4-18.1,12c-6.7,2.7-13.6,4-20.5,4
c-7,0-13.8-1.3-20.5-4c-6.7-2.7-12.8-6.7-18.1-12c-5.3-5.3-9.3-11.3-11.9-18c-2.6-6.6-3.9-13.5-3.9-20.5c0-7,1.3-13.9,3.9-20.5
C12.1,74.7,16,68.7,21.4,63.4z" />
            <path d="M142.7,3.6v152.9H121V3.6H142.7z" />
            <path d="M388.6,47.3v54.4c0,7.5-1.4,14.5-4.3,21.1c-2.8,6.6-6.8,12.5-11.8,17.5c-5,5-10.8,9-17.4,11.8c-6.6,2.8-13.7,4.3-21.3,4.3
c-7.5,0-14.5-1.4-21.1-4.3c-6.6-2.8-12.4-6.8-17.4-11.8c-4.9-5-8.8-10.9-11.7-17.5c-2.8-6.6-4.3-13.7-4.3-21.1V47.3h21.6v54.4
c0,4.5,0.9,8.8,2.6,12.9c1.7,4.1,4,7.6,7.1,10.6c3,3,6.5,5.3,10.4,7c4,1.7,8.2,2.6,12.8,2.6c4.5,0,8.8-0.9,12.9-2.6
c4-1.7,7.6-4,10.6-7c3-3,5.3-6.5,7-10.6c1.7-4,2.6-8.3,2.6-12.9V47.3L388.6,47.3L388.6,47.3z" />
            <path d="M466.4,134.8v21.6h-10.7c-7.5,0-14.5-1.4-21.1-4.3c-6.6-2.8-12.5-6.8-17.5-11.8c-5-5-9-10.9-11.8-17.5
c-2.8-6.6-4.3-13.7-4.3-21.1V3.6h21.6v65.6h43.8v21.6h-43.8v10.9c0,4.5,0.9,8.8,2.6,12.9c1.7,4.1,4,7.6,7,10.6c3,3,6.5,5.4,10.6,7
c4,1.7,8.3,2.6,12.9,2.6L466.4,134.8L466.4,134.8z" />
            <path class="st0" d="M186.2,125.6L186.2,125.6c0.9,1.4,2,2.6,3.2,3.8c0.7,0.7,1.5,1.4,2.2,2C189.5,129.7,187.7,127.8,186.2,125.6z" />
            <path d="M263.2,80.5c-2.8-6.6-6.8-12.3-11.8-17.3c-5-4.9-10.8-8.8-17.4-11.7c-6.6-2.8-13.6-4.3-21.3-4.3c-7.5,0-14.5,1.4-21.1,4.3
c-6.6,2.8-12.4,6.7-17.4,11.7c-2.2,2.2-4.2,4.6-6,7.2L187,81c6.1-7.7,15.6-12.7,26.2-12.7c18.5,0,33.5,15,33.5,33.5
c0,18.5-15,33.5-33.5,33.5c-8.2,0-15.8-3-21.6-7.9c-0.8-0.6-1.5-1.3-2.2-2c-1.2-1.2-2.2-2.4-3.2-3.8L168,132.9
c1.8,2.7,3.9,5.2,6.2,7.6c4.9,5,10.7,9,17.4,11.8c6.6,2.8,13.7,4.3,21.1,4.3c7.6,0,14.7-1.4,21.3-4.3c6.6-2.8,12.4-6.8,17.4-11.8
c5-5,9-10.9,11.8-17.5c2.8-6.6,4.3-13.7,4.3-21.1C267.5,94.2,266.1,87.1,263.2,80.5z" />
            <path d="M183.6,86l-18-10.1c-3.7,7.2-12.5,28.9-0.1,51.5l17.6-11.1c-2.1-4.4-3.3-9.4-3.3-14.6C179.7,96.1,181.1,90.7,183.6,86z" />
        </svg>
    </a></h2>
    <h3 class="signin-title-primary">{{ __('Reset Password') }}</h3>
    <h5 class="signin-title-secondary lh-4">Reset your password</h5>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="row row-xs mg-b-10">
            <div class="col-sm">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
           
        </div><!-- row -->

        <div class="row row-xs mg-b-10">
           
            <div class="col-sm mg-t-10 mg-sm-t-0">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-sm mg-t-10 mg-sm-t-0">
                <input name="password_confirmation" type="password" class="form-control" required autocomplete="new-password" placeholder="Confirm Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div><!-- row -->

        <button class="btn btn-primary btn-block btn-signin">{{ __('Reset Password') }}</button>
    </form>
   
    <p class="mg-t-40 mg-b-0"><a href="{{route('login')}}">Sign In</a> | <a href="{{route('register')}}">Sign Up</a> </p>
    </div>

</div>

@endsection

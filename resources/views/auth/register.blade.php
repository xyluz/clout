@extends('user.layouts.auth')

@section('content')
<div class="signin-wrapper">

    <div class="signin-box signup">
    <h2 class="slim-logo"><a href="/">Clout<span>.ng</span></a></h2>
    <h3 class="signin-title-primary">{{ __('Get Started!') }}</h3>
    <h5 class="signin-title-secondary lh-4">It's free to signup and only takes a minute.</h5>
    <form method="POST" action="{{ route('register') }}">
        @csrf
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
        <div class="row row-xs mg-b-10">           
          
           <div class="col-sm mg-t-10 mg-sm-t-0">
                <select class="form-control select2" data-placeholder="Account Type">
                    <option label="Account Type">Account Type</option>
                    <option value="business">Business Owner</option>
                    <option value="manager">Manager</option>
                    <option value="artist">Artist</option>                                      
                </select>

               @error('password')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
           </div>
       </div><!-- row -->

        <button class="btn btn-primary btn-block btn-signin">{{ __('Register') }}</button>
    </form>
   
    <p class="mg-t-40 mg-b-0">Already have an account? <a href="{{route('login')}}">Sign In</a></p>
    </div>

</div>


@endsection

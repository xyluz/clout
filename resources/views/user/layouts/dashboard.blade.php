<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Clout') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chartist.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slim.css') }}" rel="stylesheet">


    <!-- Twitter -->
    <meta name="twitter:site" content="@clout">
    <meta name="twitter:creator" content="@clout">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Clout">
    <meta name="twitter:description" content="Home of Music">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">
    <!-- <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png"> -->

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

</head>
<body>
<div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="/">Clout<span>.ng</span></a></h2>

        </div><!-- slim-header-left -->
        <div class="slim-header-right">
         
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="http://via.placeholder.com/500x500" alt="">
              <span>Katherine</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="{{route('profile',['user'=>Auth::user()])}}" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="{{route('edit.profile',['user'=>Auth::user()])}}" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                <a href="{{route('settings')}}" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link"><i class="icon ion-forward"></i> Sign Out
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div>
        <main>
            @yield('content')
        </main>
 

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/chartist.js') }}"></script>
    <script src="{{ asset('js/d3.js') }}"></script>
    <script src="{{ asset('js/rickshaw.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/slim.js') }}"></script>



</body>
</html>

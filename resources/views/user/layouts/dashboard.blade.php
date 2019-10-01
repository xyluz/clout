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
    <link href="{{ asset('css/select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slim.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.css') }}" rel="stylesheet">



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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.min.css" />

</head>
<body>
<div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h1 class=" w-4/5 font-seg capitalize text-lg antialiased mb-2 w-h">
            <a href="/">
            <svg width="100px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 486 232" style="enable-background:new 0 0 486 232;fill: #e80016;" xml:space="preserve">
                <g> 
                    <path d="M20.4,80.4c5.3-5.3,11.4-9.4,18.1-12c6.7-2.7,13.6-4,20.5-4c7,0,13.8,1.3,20.5,4c6.7,2.7,12.8,6.7,18.1,12l7.5,7.5
                        l-15.1,15.3l-7.8-7.5c-3.2-3.2-6.9-5.7-10.9-7.3C67.4,86.8,63.2,86,59,86c-4.2,0-8.3,0.8-12.4,2.4c-4.1,1.6-7.7,4.1-10.9,7.3
                        c-3.2,3.1-5.7,6.6-7.3,10.7c-1.6,4.1-2.4,8.2-2.4,12.4c0,4.2,0.8,8.4,2.4,12.4c1.6,4.1,4,7.7,7.3,10.9c6.5,6.5,14.3,9.7,23.3,9.7
                        c4.4,0,8.6-0.8,12.6-2.4c4-1.6,7.6-4,10.7-7.3l7.8-7.5l15.1,15.3l-7.5,7.5c-5.3,5.3-11.4,9.4-18.1,12c-6.7,2.7-13.6,4-20.5,4
                        c-7,0-13.8-1.3-20.5-4c-6.7-2.7-12.8-6.7-18.1-12c-5.3-5.3-9.3-11.3-11.9-18c-2.6-6.6-3.9-13.5-3.9-20.5S5.9,105,8.5,98.4
                        C11.1,91.7,15,85.7,20.4,80.4z"></path>
                    <path d="M141.7,20.6v152.9H120V20.6H141.7z"></path>
                    <path d="M387.6,64.3v54.4c0,7.5-1.4,14.5-4.3,21.1c-2.8,6.6-6.8,12.5-11.8,17.5c-5,5-10.8,9-17.4,11.8c-6.6,2.8-13.7,4.3-21.3,4.3
                        c-7.5,0-14.5-1.4-21.1-4.3c-6.6-2.8-12.4-6.8-17.4-11.8c-4.9-5-8.8-10.9-11.7-17.5c-2.8-6.6-4.3-13.7-4.3-21.1V64.3h21.6v54.4
                        c0,4.5,0.9,8.8,2.6,12.9c1.7,4.1,4,7.6,7.1,10.6c3,3,6.5,5.4,10.4,7.1s8.2,2.6,12.8,2.6c4.5,0,8.8-0.9,12.9-2.6
                        c4-1.7,7.6-4.1,10.6-7.1c3-3,5.3-6.5,7-10.6c1.7-4,2.6-8.3,2.6-12.9V64.3H387.6z"></path>
                    <path d="M465.4,151.8v21.6h-10.7c-7.5,0-14.5-1.4-21.1-4.3c-6.6-2.8-12.5-6.8-17.5-11.8c-5-5-9-10.9-11.8-17.5
                        c-2.8-6.6-4.3-13.7-4.3-21.1V20.6h21.6v65.6h43.8v21.6h-43.8v10.9c0,4.5,0.9,8.8,2.6,12.9c1.7,4.1,4,7.6,7,10.6
                        c3,3,6.5,5.4,10.6,7.1c4,1.7,8.3,2.6,12.9,2.6L465.4,151.8L465.4,151.8z"></path>
                    <path d="M179.7,118.8c0,4.5,0.9,8.8,2.6,12.9c0.2,0.6,0.5,1.1,0.8,1.7l25.7-16.2l-25-14.1c-0.5,1-1,1.9-1.4,3
                        C180.6,110,179.7,114.3,179.7,118.8z"></path>
                    <path d="M165.5,144.4l17.5-11c-0.3-0.5-0.5-1.1-0.8-1.7c-1.7-4-2.6-8.3-2.6-12.9c0-4.5,0.9-8.8,2.6-12.8c0.4-1,0.9-2,1.4-3
                        l-18.1-10.2C161.9,100.1,153.1,121.7,165.5,144.4z"></path>
                    <path d="M263.2,97.5c-2.8-6.6-6.8-12.3-11.8-17.3c-5-4.9-10.8-8.8-17.4-11.7c-6.6-2.8-13.6-4.3-21.3-4.3c-7.5,0-14.5,1.4-21.1,4.3
                        c-6.6,2.8-12.4,6.7-17.4,11.7c-2.2,2.2-4.2,4.6-6,7.2h0l18.9,10.6c0.7-0.9,1.5-1.7,2.2-2.5c3-3,6.5-5.3,10.6-7
                        c4-1.7,8.3-2.6,12.9-2.6c4.5,0,8.8,0.9,12.9,2.6c4,1.7,7.6,4.1,10.6,7c3,3,5.3,6.5,7,10.5c1.7,4,2.6,8.2,2.6,12.8
                        c0,4.5-0.9,8.8-2.6,12.9c-1.7,4.1-4.1,7.6-7,10.6c-3,3-6.5,5.3-10.6,7c-4.1,1.7-8.3,2.6-12.9,2.6c-4.5,0-8.8-0.9-12.9-2.6
                        c-4.1-1.7-7.6-4-10.6-7c-1.2-1.2-2.2-2.4-3.2-3.8L168,149.9c1.8,2.7,3.9,5.2,6.2,7.6c4.9,5,10.7,9,17.4,11.8
                        c6.6,2.8,13.7,4.3,21.1,4.3c7.6,0,14.7-1.4,21.3-4.3c6.6-2.8,12.4-6.8,17.4-11.8c5-5,9-10.9,11.8-17.5c2.8-6.6,4.3-13.7,4.3-21.1
                        C267.5,111.2,266.1,104.1,263.2,97.5z"></path>
                    <path d="M208.7,117.1L183,133.3l-17.5,11c-12.4-22.6-3.6-44.3,0.1-51.5l18.1,10.2L208.7,117.1z"></path>
                </g>
                <g>
                    <path d="M398.2,204h-4.1v-10.9l-5.6,10.7l-2.7,0l-5.6-10.7v11H376v-20.2h3.7l7.4,13.8l7.3-13.8h3.8V204z"></path>
                    <path d="M419.4,183.8v12c0,2.7-0.8,4.8-2.3,6.3c-1.5,1.5-3.6,2.2-6.3,2.2c-2.7,0-4.8-0.7-6.3-2.2c-1.5-1.5-2.3-3.6-2.3-6.3v-12h4.2
                        v11.9c0,1.6,0.4,2.8,1.1,3.6c0.8,0.8,1.9,1.2,3.3,1.2c1.4,0,2.5-0.4,3.3-1.2c0.8-0.8,1.1-2,1.1-3.6v-11.9H419.4z"></path>
                    <path d="M430.1,183.5c2.2,0,4,0.6,5.4,1.7c1.4,1.1,2.1,2.6,2.1,4.5l-4.3,0.2c0-0.9-0.3-1.5-0.9-2.1c-0.6-0.5-1.3-0.8-2.3-0.8
                        c-0.9,0-1.7,0.2-2.2,0.7c-0.5,0.4-0.8,1-0.8,1.8c0,0.7,0.3,1.2,0.8,1.6s1.6,0.7,3.1,1c2.3,0.6,4,1.3,5.2,2.2
                        c1.1,0.8,1.7,2.1,1.7,3.8c0,2-0.7,3.6-2.1,4.6s-3.2,1.6-5.3,1.6c-2.4,0-4.3-0.6-5.8-1.7c-1.5-1.1-2.2-2.7-2.3-4.8l4.2-0.2
                        c0,0.9,0.4,1.7,1.1,2.2c0.7,0.6,1.6,0.9,2.7,0.9c2.1,0,3.2-0.8,3.2-2.3c0-0.7-0.3-1.3-1-1.6c-0.6-0.4-1.7-0.8-3.2-1.1
                        c-1.1-0.3-2-0.5-2.6-0.8c-0.7-0.2-1.3-0.6-2-1c-0.7-0.4-1.2-1-1.5-1.7c-0.3-0.7-0.5-1.5-0.5-2.4c0-1.8,0.6-3.2,1.9-4.4
                        C426.1,184.1,427.8,183.5,430.1,183.5z"></path>
                    <path d="M445.4,204h-4.2v-20.2h4.2V204z"></path>
                    <path d="M459,183.5c2.5,0,4.6,0.7,6.4,2.1c1.8,1.4,2.8,3.3,3.2,5.6l-4.3,0.4c-0.3-1.4-0.9-2.5-1.8-3.2c-0.9-0.8-2.1-1.1-3.5-1.1
                        c-1.8,0-3.2,0.6-4.3,1.8s-1.6,2.8-1.6,4.9c0,2.1,0.6,3.8,1.7,4.9c1.1,1.2,2.5,1.8,4.3,1.8c1.4,0,2.6-0.4,3.5-1.1s1.6-1.8,1.8-3.2
                        l4.4,0.4c-0.4,2.3-1.4,4.2-3.2,5.6s-3.9,2.1-6.4,2.1c-3,0-5.5-0.9-7.4-2.8s-2.9-4.4-2.9-7.6c0-3.2,1-5.7,2.9-7.6
                        C453.5,184.4,456,183.5,459,183.5z"></path>
                </g>
                <rect x="33" y="185" width="334.4" height="19"></rect>
                </svg>
              </a>
                  </h1>

        </div><!-- slim-header-left -->
        <div class="slim-header-right">
         @auth
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="{{ Auth::check() ? Avatar::create(Auth::user()->name)->toBase64() : Avatar::create('Guest')->toBase64()  }}" alt="">
              <span>{{Auth::check() ? Auth::user()->name : "Guest"}}</span> 
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                @role('user')
                <a href="{{route('account')}}" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                @endrole
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link"><i class="icon ion-forward"></i> Sign Out
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
         
          @endauth
                
          @if(session('cart'))
            <?php $quantity = count(session('cart')) > 0 ? count(session('cart')) : 0; ?>
          <a href="{{route('cart')}}">
            <span class="fa-stack has-badge" style="font-size: 1.5em" data-count="{{$quantity}}">
              <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
              <i style="" class="fa fa-shopping-cart fa-stack-2x red-cart"></i>
            </span>
          </a>
            @endif
        
        </div><!-- header-right -->
      </div><!-- container -->
    </div>
        <main>
            @yield('content')
        </main>
        <style>
        .fa-stack[data-count]:after{
          position:absolute;
          right:0%;
          top:0%;
          content: attr(data-count);
          font-size:40%;
          padding:.6em;
          border-radius:999px;
          line-height:.75em;
          color: black;
          color:#FB704A;
          text-align:center;
          min-width:2em;
          font-weight:bold;
          background: white;
          border-style:solid;
        }
        .fa-circle {
          color:#FB704A;
        }

        .red-cart {
          color: #FB704A; 
          background:white;
        }
        </style>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/d3.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/select.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>

    <script src="{{ asset('js/jquery.maskedinput.js') }}"></script>

    <script src="{{ asset('js/slim.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    @include('sweet::alert')
    <script>
  
        $(function(){
          'use strict'

          // Datepicker
          $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
          });
  
          $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
          });
  
          $('#datatable1').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

       
        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        });
      </script>
</body>
</html>

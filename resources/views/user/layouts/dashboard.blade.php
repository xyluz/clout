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
          <h2 class="slim-logo">

              <a href="/">
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
            </a>


          </h2>

        </div><!-- slim-header-left -->
        <div class="slim-header-right">
         
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="">
              <span>{{Auth::user()->name}}</span> 
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


@extends('layout.app')

@section('content')

<section style="background-image: url('img/main1.jpg') !important; background-repeat: no-repeat; background-size: cover; background-position: right; box-shadow: rgba(20, 20, 20,.25) 625px 10px 108px 6px inset; padding-top: 0px !important; margin-top: -1em;"  class="h-screen-rd text-white  mt-8"><br><br> <div style="margin-top: 5em;" class="container m-auto flex flex-col md:flex-row max-w-xl  py-8 ">
    <div class="flex flex-col w-full lg:w-1/2  justify-center  py-2 px-4"> 
  
 <div class="hi-icon-effect-8    ">    <h1 style="z-index: 1" class="c-title__name font-termina-m mb-4 text-5xl px-6 ">Put your brand power in motion with Clout.  </h1>

            <p style="z-index: 1" class="font-termina-l text-2xl leading-tight pr-4 px-6 mb-4"> We offer packages that help artistes and small business get more value & trackable milage for their brand and business at the most affordable rates .</p></div>

  

    </div>
  <div class="flex flex-col w-full lg:w-1/2  justify-center  py-8 px-4"> 
  
 <div class="hi-icon-effect-8 text-center  ">    </div>

  

    </div>
  


</section>         
      

    @include('layout.main')
    @include('layout.prices')
    @include('layout.discover')
    @include('layout.specials')
    @include('layout.faq')

@endsection
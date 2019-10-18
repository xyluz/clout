@extends('layout.app')

@section('content')

<section style="background-image: url({{asset('img/head.webp')}}) !important; background-repeat: no-repeat; background-size: cover; background-position: left; box-shadow: rgba(20, 20, 20,.25) 625px 10px 108px 6px inset; padding-top: 0px !important; margin-top: -1em;" class="h-auto text-white  mt-8 pb-8 pt-8">
    <br>
    <br>
    <div class="flex flex-col w-full lg:w-1/2  justify-center  py-2 px-4" style="padding-top:8%">

        <div class="hi-icon-effect-8    ">
            <br>

<br>

<h1 style="z-index: 1" class="c-title__name font-termina-m mb-4 text-5xl px-6 w-h">Put your brand power in motion. Reach out with Clout.  </h1>

            <p style="z-index: 1" class="font-termina-l text-2xl leading-tight pr-4 px-6 mb-4 antialiased w-h"> We offer packages that help artistes and small business get more value &amp; trackable milage for their brand and business at the most affordable rates .</p>
        </div>
         
    <a href="https://clout.ng/register" style="/ width: 201px; // padding-left: 53px; /" class="p-4 font-termina-md rounded-full text-center text-white text-lg ">Get Started as </a>
    <br>
    <a href="https://clout.ng/a/search" class="bg-white p-4 text-center font-seg m-auto rounded-full w-4/5" style="
">Artist</a><br>
    <a href="https://clout.ng/b/search" class="bg-white p-4 text-center font-seg rounded-full w-4/5 m-auto"> Business</a>

<br>
<br>
<br>
<br>
    </div>

</section>
    @include('layout.main')
    @include('layout.prices')
    @include('layout.newsletter')
    @include('layout.discover')
    @include('layout.specials')
    @include('layout.faq')

   
    @endsection
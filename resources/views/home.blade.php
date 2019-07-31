@extends('layout.app')

@section('content')

    <section style="background-image: url('img/head.webp') !important; background-repeat: no-repeat; background-size: cover; background-position: left; box-shadow: rgba(20, 20, 20,.25) 625px 10px 108px 6px inset; padding-top: 0px !important; margin-top: -1em;" class="h-auto text-white  mt-8 pb-8 pt-8">
        <br>
        <br>
        <div style="margin-top: 4.5em;" class="container m-auto flex flex-col md:flex-row w-full  py-8 ">
            <div class="flex flex-col w-full lg:w-1/2  justify-center  py-2 px-4">

                <div class="hi-icon-effect-8    ">
                    <h1 style="z-index: 1" class="c-title__name font-termina-m mb-4 text-5xl px-6 w-h">Put your brand power in motion with Clout.  </h1>

                    <p style="z-index: 1" class="font-termina-l text-2xl leading-tight pr-4 px-6 mb-4 antialiased w-h"> We offer packages that help artistes and small business get more value & trackable milage for their brand and business at the most affordable rates .</p>
                </div>
                @auth 
            <a href="{{route('dashboard')}}" style="width: 201px; margin-left: 1em; padding-left: 53px;" class="p-4 font-termina-md rounded-full text-black bg-white">Dashboard</a>
            @else 
            <a href="{{route('register')}}" style="width: 201px; margin-left: 1em; padding-left: 53px;" class="p-4 font-termina-md rounded-full text-black bg-white">Get Started</a>
            @endauth

            </div>

    </section>

    @include('layout.main')
    @include('layout.prices')
    @include('layout.newsletter')
    @include('layout.discover')
    @include('layout.specials')
    @include('layout.faq')

   
    @endsection
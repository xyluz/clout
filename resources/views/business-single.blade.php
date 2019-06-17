
@extends('layout.app')

@section('content')

    <section style="background-image: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80') !important; background-repeat: no-repeat; background-size: cover; background-position: right; box-shadow: rgba(47, 47, 47, 0.45) 0px 42px 13px 354px inset; padding-top: 0px !important; margin-top: -1em;" class="h-screen-ree text-white  mt-8">
        <br>
        <br>
        <div style="margin-top: 5.5em;" class="    py-8 ">
            <div class=" ">
                <h1 style="    margin-left: 4.3em;" class="capitalize text-4xl mb-8 container "> <span class="font-termina-md"></span> 
         </span></h1></div>

        </div>

    </section>

    <section class="bg-white container m-auto h-auto">
        <p class="text-center">
            <button style=" height: 150px;
    width: 150px;
    border-radius: 50%;
    background-repeat: no-repeat;margin-top: -3em;
    border: 2px solid #fff;
    background: url({{'/storage/'. substr($account->logo,7) ?? 'http://via.placeholder.com/500x500' }});
    background-position: 36%;
    background-size: contain;
    display: inline-block;"></button>
            <div class="july p-6  text-center">
                <h1 class="dec font-termina-md text-sm  block font-smooth lowercase tracking-wide text-black  leading-zero mb-2 text-center"> <span class="font-termina-md"> 3.5</span> </h1>

            </div>

        </p>

        <p class=" font-seg text-center mt-4 text-baser leading-normal txt-blue  block font-smooth capitalize leading-zero ">{{ $account->genre ?? 'Clout Business' }} </p>
    <p class="capitalize font-termina-m text-4xl text-center p-2">{{$account->name ?? 'Clout Brand'}}</p>

        <p class=" font-seg text-center   text-baser leading-normal text-grey-dark  block font-smooth  leading-zero "> <a class="text-grey-dark no-underline" href=""><span style="vertical-align: middle;" class="linearicons-network text-base"></span>  {{ $account->website ?? 'https://clout.ng' }} </a></p>

        <br><div class="bg-grey-lightest text-grey-darkest py-4 lg:px-4" role="alert">
  <div class="container items-center flex max-w-xl m-auto leading-none">

  <span class=" text-center font-termina-l m-auto ">Updated {{\Carbon\Carbon::createFromTimeStamp(strtotime($account->updated_at))->diffForHumans() ?? 'null'}}</span>
    <span class="opacity-75 h-4 w-4"><i class="fas fa-chevron-right"></i></span>
  </div>
</div>
<br>
        {{-- <p style="    width: 230px;
    margin: 0 auto;
    margin-top: 3em;" class="text-center"> --}}
            {{-- <a href=""> <span class=" text-black heart-1 text-xl "> <span class="font-termina-md text-baser"> 999k</span> <span style="color: #000;" class="font-regs font-termina-l "> likes </span></span>
            </a> --}}
            {{-- <a href=""> <span style="    margin-right: 2em;" class=" mdi-heart-outline heart text-xl text-red"></span> </a>
            <a href=""> <span class="mdi-share-outline heart text-xl text-black"></span> </a>
        </p> --}}

    <p style="width: 80%;" class="m-auto  font-termina-l text-grey-darker pr-2 pl-2 leading-normal text-baser text-center p-2">{{$account->description}}</p>
        <p for="" class=" font-termina-md  text-m text-grey-darker text-lg leading-normal text-center  font-smooth mt-2   "> <span style="color: #fb7049;" class="font-regs"> <span class="font-termina-md text-grey-darker capitalize">Mon - fri :</span> <span class="text-orange">open now</span> </span>
            <span class="font-termina-md"> 8:00pm - 10:00pm</span> </p>

        <div style="background-image: url('https://images.unsplash.com/photo-1506197061617-7f5c0b093236?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1005&q=80') !important; background-repeat: no-repeat; background-size: cover; background-position: center; box-shadow: rgba(20, 20, 20,.5) 625px 10px 108px 6px inset; padding-top: 0px !important;" class="h-screen-r text-white m-auto container mt-8">
            <br>
            <br>
            <div style="margin-top: 5em;" class="container m-auto flex flex-col md:flex-row max-w-xl  py-8 ">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="flex flex-col w-full  justify-center  py-8 px-4">

                    <div class="hi-icon-effect-8 text-center  ">
                        <a id="hi-icon" href="#set-8" class="hi-icon mdi-play-circle"></a>
                        <p class="mt-4 font-termina-m uppercase tracking-wide"> Watch Spotlight</p>
                    </div>

                </div>

            </div>
        </div>
        </div>

        <div>
            <div class="gallery">
                @if($media->count() > 0)
                    @foreach($media->get() as $m)
                        
            <img src="{{'/storage/'. substr($m->media_url,7) ?? 'http://via.placeholder.com/500x500' }}" alt="{{$m->media_title}}" />
                
                    @endforeach
                @endif
            </div>

            <div class=" py-4 font-sans container m-auto bg-grey-lightest">
                <p class="font-seg text-2xl text-grey-darkest p-2 mb-4 px-4">Popular Products</p>
                <div class="container max-w-xl m-auto flex flex-wrap items-center justify-start">
                    @if($products->count() > 0)

                    @foreach($products->get() as $product)

                    <div class="w-full md:w-1/2 lg:w-1/4 flex flex-col mb-8 px-3">
                        <div class="overflow-hidden bg-white h-auto  hover:shadow-raised hover:translateY-2px transition">
                            <div class="h-64" style=" background: url('https://images.unsplash.com/photo-1514995428455-447d4443fa7f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80'); background-size: cover; background-position: center; "> </div>

                            <div class="p-2 flex flex-col justify-between bg-grey-lightest">
                                <p for="" class=" font-termina-m text-left text-xl leading-normal text-grey-darkest block font-smooth capitalize leading-zero "> 

                                    {{$product->product_name}}

                                </p>
                                <p for="" class=" font-seg text-left text-lg text-orange leading-normal text-grey-darkest block font-smooth capitalize leading-zero mb-2"> ₦{{$product->product_price}}

                                </p>
                            </div>
                        </div>

                    </div>

                    @endforeach
                    @endif
                </div>

            </div>

            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27868.733809835827!2d3.491316820936194!3d6.421916665636738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdee374d35f88380d!2sFitness+Central+Lekki!5e0!3m2!1sen!2sng!4v1558920583339!5m2!1sen!2sng" width="300" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5b bg-orang">
            <a href="{{$account->facebook ?? '#'}}" class=" hi-icon-fix hi-icon mdi-facebook">fb</a>
                <a href="{{$account->instagram ?? '#'}}" class=" hi-icon-fix hi-icon mdi-instagram">ig</a>
                <a href="{{$account->twitter ?? '#'}}" class=" hi-icon-fix hi-icon mdi-twitter">tw</a>
                <a href="{{$account->linkedin ?? '#'}}" class="hi-icon-fix hi-icon mdi-linkedin">li</a>
                <a href="{{$account->phone ?? '#'}}" class=" hi-icon-fix hi-icon mdi-phone">ph</a>

                <p class=" font-seg text-center mt-4   text-baser leading-normal text-grey-dark  block font-smooth  leading-zero ">
                    <a class="text-white no-underline" href=""> <span style="font-weight: 900;" class="text-lg linearicons-envelope"></span> 
                        {{$account->email ?? 'info@clout.ng'}}

                    </a>
                </p>
            </div>

    </section>


    @include('layout.discover')
       

    

<script>
    var nlform = new NLForm(document.getElementById('nl-form'));
</script>
@endsection
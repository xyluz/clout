
@extends('layout.app')

@section('content')

<section style="background-image: url('{{asset('img/main1.jpg')}}') !important; background-repeat: no-repeat; background-size: cover; background-position: right; box-shadow: rgba(20, 20, 20,.25) 625px 10px 108px 6px inset; padding-top: 0px !important; margin-top: -1em;"  class="h-auto text-white  mt-8">
    <br>
    <br>  
    <div style="margin-top: 5.5em;" class="    py-8 "> 
    <div class=" "> 
    
    
     <h1 style="    margin-left: 4.3em;" class="capitalize text-4xl mb-8 container ">
    
     <span class="font-termina-md">Discover  Musical Acts</span> <br> <span class="font-termina-md"> Making Waves in the Industry <span id="nl-form" class="nl-form">
              {{-- <input type="text" value="" placeholder="your city" data-subline="For example: Abuja</em> or Onitsha"/>
              <span class="nl-submit-wrap">
      
              </span> --}}
             </span></h1></div>
    
        <form class="search-container">    
        <input type="text" id="search-bar" placeholder="Discover artistes">
        <a href="#"><span class="search-icon" > <span class=" ion-ios-search"></span> </span></a>   <!-- Custom select structure --> 
    {{-- <div class="select_mate" data-mate-select="active" >  <p  class="font-termina-m smal-text-2">Genre</p>
    <select name="" onchange="" onclick="return false;" id="">
    <option value=""  >Afrobeats </option>
    <option value="1">Hip-Hop</option>
    <option value="2" >Alternative</option>
    <option value="3">Fuji</option>
      </select>
    <p class="selecionado_opcion"  onclick="open_select(this)" ></p> --}}
    {{-- <span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#fff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
        <path d="M0-.75h24v24H0z" fill="none"/>
    </svg></span>
    <div class="cont_list_select_mate">
      <ul class="cont_select_int">  </ul> 
    </div> --}}
      </div>
      <!-- Custom select structure --> 
    
    
    </div> <!-- End div center   -->
      </form>
    
    
        </div> 
    <div class="container m-auto" style="">
     <p for="" class=" font-termina-md  text-m  text-lg leading-normal  font-smooth mt-2 container  "> 
     <span class="font-termina-md text-white font-regs lowercase" style="
        background: #ffffff1f;
        padding: .5em;
        height: 10px;
        font-size: 18px;
     "><span style="vertical-align: middle; " class="mdi-light-switch font-smooth "></span> <span style="opacity: .8;"> Switch to </span> <a class="no-underline text-white " href="{{route('business.group')}}"> <span class="font-termina-m"> business</span> </a> </span>  </p>  </div>
    
    </section> 
    <section class=" py-4 font-sans container m-auto"> <p for="" class=" font-termina-md text-left text-3xl leading-normal  block font-smooth capitalize leading-zero mb-2 px-4 mb-4">  Artiste Directory
        </p>
        <div class="container max-w-xl m-auto flex flex-wrap items-center justify-start">
      
            @if($accounts->count() > 0)
            @foreach($accounts->get() as $account)
       
          <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col mb-8 px-3">
            <div class="overflow-hidden bg-white h-84   hover:shadow-raised hover:translateY-2px transition">
         <div class="h-64" style=" background: url('https://images.unsplash.com/photo-1470309864661-68328b2cd0a5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; " > </div> 
         <div class="apr p-6 flex-col justify-between">

           
          {{-- <h1 class="dec font-termina-md text-baser  block font-smooth lowercase tracking-wide text-black  leading-zero mb-2 text-center">
              
              <span style="font-weight: 900;" class="mdi-heart-outline text-baser"></span> <span class="font-termina-md text-baser"> 6k</span> <span style="color: #ffffffab;" class="font-regs font-termina-l "> likes </span>
            
            </h1> --}}
           
          </div>
       
              <div class="p-6 flex flex-col justify-between ">
                <p for="" class=" font-seg text-left text-baser leading-normal txt-blue  block font-smooth capitalize leading-zero mb-2">  {{$account->genre}}  
      <a href=""> <span  style="    margin-right: 4em;" class=" mdi-link-variant heart-variant text-xl text-white"></span> </a>
      <a href=""> <span  style="    margin-right: 2em;" class=" mdi-heart-outline heart text-xl text-red"></span> </a>    
      <a href=""> <span class="mdi-share-outline heart text-xl text-black"></span> </a>    </p>
                <h3 class="font-termina-m text-2xl  text-black  leading-normal capitalize font-termina-m text-left mb-2 word-cla">{{$account->name}}</h3>
      
      
                <p for="" class=" font-termina-md  text-m text-grey-darker text-baser leading-normal  font-smooth mb-4   ">  <span  class="font-termina-l  word-clap"> {{$account->description}}</span>
              <p for="" class=" font-termina-md  text-m text-grey-darkest text-lg leading-normal  font-smooth  word-cla"> <span style="font-weight: 900;" class="text-sm linearicons-map-marker"></span> {{$account->address}}   </p> 
      
      
        </p>  
       <p for="" class=" font-termina-md  text-m  text-lg leading-normal  font-smooth mt-2   ">  <span class="text-green font-termina-md "> 6000</span>   <span class="text-orange"></span> </span>
       <span class="font-termina-md text-grey-darker font-regs"> views in the last <span class="font-termina-md text-green">30</span> days</span>  </p>  
      
              </div>
            </div>
           <a href="{{route('artist',['id'=>$account->id,'name'=>$account->name])}}" class="btn btn-3 btn-3a font-termina-m text-lg font-smooth text-center icon-cart-2">Learn more</a>
           {{-- <a href="#" class="btn btn-3 btn-3a font-termina-m text-lg font-smooth text-center icon-cart-2">Learn more</a> --}}
           
          </div>
        @endforeach
       @endif     
@endsection
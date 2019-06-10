
@extends('layout.app')

@section('content')

<section style="background-image: url('{{asset('img/main1.jpg')}}') !important; background-repeat: no-repeat; background-size: cover; background-position: right; box-shadow: rgba(20, 20, 20,.25) 625px 10px 108px 6px inset; padding-top: 0px !important; margin-top: -1em;"  class="h-auto text-white  mt-8">
    <br>
    <br>  
    <div style="margin-top: 5.5em;" class="    py-8 "> 
    <div class=" "> 
    
    
     <h1 style="    margin-left: 4.3em;" class="capitalize text-4xl mb-8 container ">
    
     <span class="font-termina-md">Discover  Musical Acts</span> <br> <span class="font-termina-md"> in <span id="nl-form" class="nl-form">
              <input type="text" value="" placeholder="your city" data-subline="For example: Abuja</em> or Onitsha"/>
              <span class="nl-submit-wrap">
      
              </span>
             </span></h1></div>
    
        <form class="search-container">    
        <input type="text" id="search-bar" placeholder="Discover artistes">
        <a href="#"><span class="search-icon" > <span class=" ion-ios-search"></span> </span></a>   <!-- Custom select structure --> 
    <div class="select_mate" data-mate-select="active" >  <p  class="font-termina-m smal-text-2">Genre</p>
    <select name="" onchange="" onclick="return false;" id="">
    <option value=""  >Afrobeats </option>
    <option value="1">Hip-Hop</option>
    <option value="2" >Alternative</option>
    <option value="3">Fuji</option>
      </select>
    <p class="selecionado_opcion"  onclick="open_select(this)" ></p>
    <span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#fff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
        <path d="M0-.75h24v24H0z" fill="none"/>
    </svg></span>
    <div class="cont_list_select_mate">
      <ul class="cont_select_int">  </ul> 
    </div>
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
    "><span style="vertical-align: middle; " class="mdi-light-switch font-smooth "></span> <span style="opacity: .8;"> Switch to </span> <a class="no-underline text-white " href=""> <span class="font-termina-m"> business</span> </a> </span>  </p>  </div>
    
    </section> 

@endsection
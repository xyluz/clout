
@extends('layout.app')

@section('content')

<section style="background-image: url('img/ar.jpg') !important; background-repeat: no-repeat; background-size: cover; background-position: center; box-shadow: rgba(20, 20, 20,.25) 625px 10px 108px 6px inset; padding-top: 0px !important; margin-top: -1em;" class="h-auto text-white  mt-8 pb-8 pt-8">
    <br>
    <br>
    <div style="margin-top: 2.5em;" class="container m-auto flex flex-col md:flex-row w-full  py-8 ">
        <div class="flex flex-col w-full lg:w-1/1  justify-center  py-2 px-4">

            <div class="hi-icon-effect-8    "> 
                <div class="text-center"></div>
                
            </div>
             
      

        </div>
        

    </div>
</section>
<section class="font-sans m-auto diagonal-alt">

         
    <div class="w-full   flex flex-col bg-white text-left">
           <h1 class="  font-termina-m py-2 text-center">Contact Us</h1>

        <p class="leading-tight mb-4 text-grey-darker text-center font-termina-l text-xl w-3/4 m-auto leading-normal mt-2 ">
            Contact Form and some text
        </p>
    <form action="{{route('submit-contact')}}" method="post">     
        @csrf 
        <p class="leading-tight mb-4 text-grey-darker text-center font-termina-l text-xl w-3/4 m-auto leading-normal mt-2 ">
          
                <input type="text" required name="name" placeholder="Your Name" class="w-3/4  @error('name') is-invalid @enderror" />
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror 
        </p>

        <p class="leading-tight mb-4 text-grey-darker text-center font-termina-l text-xl w-3/4 m-auto leading-normal mt-2 ">
          
            <input type="email" required name="email" placeholder="Your Email Address" class="w-3/4  @error('email') is-invalid @enderror" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror 
      
    </p>
    <p class="leading-tight mb-4 text-grey-darker text-center font-termina-l text-xl w-3/4 m-auto leading-normal mt-2 ">
          
        <input type="text" name="product" placeholder="Product of Interest" class="w-3/4 @error('product') is-invalid @enderror" />
        @error('product')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror 
</p>
<p class="leading-tight mb-4 text-grey-darker text-center font-termina-l text-xl w-3/4 m-auto leading-normal mt-2 ">
          

    <textarea placeholder="Content" name="contant" class="w-3/4 @error('content') is-invalid @enderror"></textarea>

@error('content')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
  @enderror 
</p>

<button>Submit</button>
      </form>
    </div>

</section>
@endsection
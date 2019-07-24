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
            <a href="{{route('register')}}" style="width: 201px; margin-left: 1em; padding-left: 53px;" class="p-4 font-termina-md rounded-full text-black bg-white">Get Started</a>

            </div>

    </section>

    @include('layout.main')

    <section class="font-sans flex flex-col lg:flex-row diagonal-alt">

        <div style="background:url('img/ms.webp') ; background-size: cover;" class="w-full h-screen-oo lg:w-1/2"></div>
        <div class="w-full lg:w-1/2 flex flex-col bg-white text-left p-8">
            <h1 class=" w-4/5 font-seg capitalize text-lg antialiased mb-2 w-h">Promote & distribute your music   </h1>
               <h1 class=" w-4/5 font-termina-m py-2 w-h">Share your sound with millions of audiences around the world. </h1>
            <p class="leading-tight mb-4 w-1/2 text-grey-darker font-termina-l text-xl w-3/4 leading-normal mt-2 w-h">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <div><span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
             <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>

            
            </div>

        </div>

    </section>

    <section  class="font-sans flex flex-col lg:flex-row diagonal">

          <div class="w-full lg:w-1/2 flex flex-col text-left p-8">
            <h1 class=" w-4/5 font-seg capitalize text-lg antialiased mb-2  w-h">Promote your business  </h1>
               <h1 class=" w-3/5 font-termina-m py-2 w-h">Showcase your craft to our diverse crowd & earn. </h1>
            <p class="leading-tight mb-4 w-1/2 text-grey-darker font-termina-l text-xl w-3/4 leading-normal mt-2 w-h">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <div><span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
             <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>

            
            </div>
        </div>
        <div style="background:url('img/cb.webp') ; background-size: cover;" class="w-full h-screen-oo lg:w-1/2"></div>
    </section>





    <section class="font-sans container m-auto max-w-xl flex flex-col flex-wrap sm:flex-row justify-center  ">
        <h1 style="line-height: 2" class="text-lg text-black items-center mt-2 text-black font-termina-m text-center container tracking-wide font-smooth   mb-2 text-2xl uppercase">Plans </h1>
        <div class="w-full sm:w-1/3 lg:w-1/3 text-center py-8 bg-white  ">
            <p class="text-center mb-7"><img width="180px" src="img/dance_the_music.svg"></p>
            <label for="" class="uppercase tracking-loose font-bold text-lg font-smooth font-termina-m ">Clout</label>
            <h1 style="color: #e80016" for="" class="uppercase tracking-loose font-smooth font-bold text-5xl my-2 font-termina-m">N200,000</h1>
            <p class="my-2 text-grey-darker font-termina-l pl-6 pr-6 mb-4  m-auto text-lg leading-tight">Ideal for music artistes that want to promote their music with the Lagos crowd specifically. </p>

              <div class="mb-4"><span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Radio Plays</span></span>
             <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>

            
            </div>
            <a href="{{route('invoice',['package'=>'1'])}}" style="background:#e80016;" class="butn font-smooth btn-4 bg-transparent hover:bg-black text-black-dark font-termina-m uppercase hover:text-white py-2 px-4 border border-black hover:border-transparent">
                Buy Now 
            </a>
            <p style="width: 50%" class="text-center m-auto  text-m mt-4 mb-2 font-termina-m"> Promotion Available in Lagos ONLY </p>
        </div>
        <div style="background:aliceblue;" class="w-full sm:w-1/3 lg:w-1/3 text-center bg-white  ">
            <p class="text-white bg-orang  mb-6 font-smooth font-termina-m p-2 uppercase"> Best Value</p>
            <p class="text-center mb-4"><img width="200px" src="img/balloon.svg"></p>
            <label for="" class="uppercase tracking-loose font-bold text-lg font-termina-m font-smooth">More Clout</label>
            <h1 style="color: #0087fc" for="" class="uppercase tracking-loose font-bold text-5xl my-2 font-smooth font-termina-m ">   N250,000 </h1>
            <p class="my-2 text-grey-darker font-termina-l pl-6 pr-6 mb-4  m-auto text-lg leading-tight"> If you are looking to gain clout with your music with audiences from Lagos, Port-harcourt, Onitsha, Abuja &amp; Kano</p>

             <div class="mb-4"><span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
             <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>

            
            </div>

            <a href="{{route('invoice',['package'=>'2'])}}" style="background:#0087fc;" class="butn btn-4 bg-transparent hover:bg-black font-smooth text-black-dark font-termina-m uppercase hover:text-white py-2 px-4 border border-black hover:border-transparent">
                Buy Now
            </a>

            <label style="color: #0087fc" for="" class="capitalize tracking-loose font-bold text-lg font-termina-m font-smooth block mt-4 mb-8">25% off for Gospel Artistes</label>
            <br>
            <br>
        </div>
        <div class="w-full sm:w-1/3 lg:w-1/3 text-center py-8 bg-white ">
            <p class="text-center mb-9"><img width="227px" src="img/watering_plant.svg"></p>
            <label for="" class="uppercase tracking-loose text-lg font-termina-m font-smooth p-2">For Growing Businesses</label>
            <h1 style="color:#f06c46" for="" class="uppercase tracking-loose font-bold text-5xl my-2 font-smooth font-termina-m">Business</h1>
            <p class="my-2 text-grey-darker font-termina-l pl-6 pr-6 mb-4 m-auto text-lg leading-tight">Let us know your brand needs and expectations and let us get you there.</p>

<br>
         
             <div class="mb-4"><span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
             <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>
              <span style="font-weight: 800" class="mdi-check-circle block mb-2 text-lg bg-gc"><span class="my-2 font-seg leading-normal text-baser points "></span> <span class=" points font-seg">103 Nationwide-Syndicated Radio Plays</span></span>

            
            </div>

            <button style="background-color: #f06c46;" class="butn btn-4 bg-transparent hover:bg-black text-black-dark font-smooth font-termina-m uppercase hover:text-white py-2 px-4 border border-black hover:border-transparent">
                Get Started
            </button>
        </div>

    </section>
    <section style="background:#fff; "  class="antialiased font-sans w-full bg-white text-left text-black py-8 m-auto p-8 shadow ">
        <div class="container mx-auto max-w-xl py-8 font-normal ">
            <h3 style="width: 40%"  id="weedth" class="text-4xl font-termina-m">Get the goodies delivered straight to your inbox </h3>
            <p class="font-termina-l text-grey-darkest text-xl mt-2 mb-2">Subscribe to the newsletter</p> <img class="img-news" src="img/8.webp">
            <div class="max-w-sm mt-4 sm:flex">
                <input style="   
    border: 1px solid; border-right: none;" type="email" class="block bd font-termina-l w-full focus:outline-0 bg-white py-3 px-6 mb-2 sm:mb-0" name="email" placeholder="Enter your email" required="">
                <button style="height: 50px; border: 1px solid; border-left: none;" class="uppercase bd text-sm text-black focus:outline-0 w-full sm:w-auto   tracking-wide px-6 font-termina-md">Subscribe</button>
            </div>
        </div>
    </section>

<section class="bg-grey-lightest py-4 font-sans">
  <div class=" container max-w-xl m-auto flex flex-wrap flex-col md:flex-row items-center justify-start">
    <div class="w-full   p-3">
      <div class="flex flex-col lg:flex-row  overflow-hidden h-auto lg:h-36 border shadow bg-white ">
        <img class="block  w-full lg:w-64 flex-none bg-cover h-prod "
          src="img/fem.webp">
        <div class="bg-white  p-4 flex flex-col justify-between leading-normal h-auto bg-white">
            <div class="text-grey-dark uppercase text-sm tracking-wide lg:w-2/3 leading-tight font-seg antialiased mb-1 ">Begin your Journey</div>
          <div class="text-black font-medium text-2xl lg:w-2/3  mb-2 leading-tight font-seg ">Produce your next single, mixtape or album with us</div>
         <a href="#"> <p style="color: #e80016;" class="text-grey-darker text-base font-seg antialiased">See Packages </p>
        </div>
      </div>
    </div>
 
    </div>
  </div>
</section>

    <section class=" container my-2 pt-2 font-sans  m-auto flex flex-col-reverse lg:flex-row text-center lg:text-left sm:items-center">
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-start p-2 items-center lg:items-start">

            <div style="background:#e80016;" class="h-auto mt-2  ">
                <div>
                    <p class="text-white font-termina-md text-3xl capitalize"> <span class=" linearicons-bag df  icon-apply-1"></span></p>
                    <p class="text-white font-termina-md text-3xl gospel capitalize"> Discover Local Businesses that match your interests </p>
                    <div id="pl-none" class="m-auto pl-8 mb-6 apply-box-1 ">
                        <button style=" height: 50px;
    width: 50px;
    border-radius: 50%;
    background-repeat: no-repeat;
    border: 2px solid #fff;
    background: url(https://previews.123rf.com/images/drawkman/drawkman1709/drawkman170900234/8…vector-halloween-blue-happy-monster-square-avatar-design-for-t-shirt-s.jpg);
    background-position: 36%;
    background-size: contain;
    display: inline-block;"></button>
                        <button style=" height: 50px;
    width: 50px;
    border-radius: 50%;
    background-repeat: no-repeat;
    border: 2px solid #fff;
    background: url(https://previews.123rf.com/images/drawkman/drawkman1709/drawkman170900239/85465516-cartoon-monster-face-isolated-vector-halloween-happy-monster-square-avatar-funny-troll-gremlin-or-go.jpg);
    background-position: 36%;
    background-size: contain;
    display: inline-block;"></button>
                        <button style=" height: 50px;
    width: 50px;
    border-radius: 50%;
    background-repeat: no-repeat;
    border: 2px solid #fff;
    background: url(https://previews.123rf.com/images/juristka/juristka1705/juristka170500007/77884667-cartoon-monster-face-vector-halloween-blue-smiling-fairy-tale-avatar-vector-illustration-.jpg);
    background-position: 36%;
    background-size: contain;
    display: inline-block;"></button>
                        <button style=" height: 50px;
    width: 50px;
    border-radius: 50%;
    background-repeat: no-repeat;
    border: 2px solid #fff;
    background: url(https://previews.123rf.com/images/drawkman/drawkman1709/drawkman170900312/85465240-cartoon-monster-face-wearing-eyeglasses-vector-halloween-funny-green-smart-monster-square-avatar.jpg);
    background-position: 36%;
    background-size: contain;
    display: inline-block;"></button>
                        <p class="mt-4">
                            <a href="{{route('business.group')}}" class="text-left text-lg mt-4 mb-2 no-underline font-termina-md text-white capitalize"> <span style="font-weight: 900;" class="linearicons-magnifier text-sm"></span> Search Directory </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-start p-2 items-center lg:items-start">

            <div class="h-auto mt-2 bg-blue">
                <div>
                    <p class="text-white font-termina-md text-3xl capitalize"> <span class=" linearicons-music-note3 df  icon-apply"></span></p>
                    <p class="text-white font-termina-md text-3xl gospel capitalize"> Discover the faces behind the emerging sounds of the continent </p>
                </div>

                <div style="width: 90%; margin-top: -3em; " class="m-auto pl-8 mb-6 apply-box-1">
                    <button style=" height: 50px;
    width: 50px;
    border-radius: 50%;
    background-repeat: no-repeat;
    border: 2px solid #fff;
    background: url(https://previews.123rf.com/images/drawkman/drawkman1709/drawkman170900234/8…vector-halloween-blue-happy-monster-square-avatar-design-for-t-shirt-s.jpg);
    background-position: 36%;
    background-size: contain;
    display: inline-block;"></button>
                    <button style=" height: 50px;
    width: 50px;
    border-radius: 50%;
    background-repeat: no-repeat;
    border: 2px solid #fff;
    background: url(https://previews.123rf.com/images/drawkman/drawkman1709/drawkman170900239/85465516-cartoon-monster-face-isolated-vector-halloween-happy-monster-square-avatar-funny-troll-gremlin-or-go.jpg);
    background-position: 36%;
    background-size: contain;
    display: inline-block;"></button>
                    <button style=" height: 50px;
    width: 50px;
    border-radius: 50%;
    background-repeat: no-repeat;
    border: 2px solid #fff;
    background: url(https://photos.bandsintown.com/thumb/8647116.jpeg);
    background-position: 36%;
    background-size: contain;
    display: inline-block;"></button>
                    <button style=" height: 50px;
    width: 50px;
    border-radius: 50%;
    background-repeat: no-repeat;
    border: 2px solid #fff;
    background: url(https://previews.123rf.com/images/drawkman/drawkman1709/drawkman170900312/85465240-cartoon-monster-face-wearing-eyeglasses-vector-halloween-funny-green-smart-monster-square-avatar.jpg);
    background-position: 36%;
    background-size: contain;
    display: inline-block;"></button>
                    <p class="mt-4">
                        <a href="{{route('artist.group')}}" class="text-left text-lg mt-4 mb-2 no-underline font-termina-md text-white capitalize"> <span style="font-weight: 900;" class="linearicons-music-note2 text-sm"></span> Explore Profiles </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class=" font-sans mt-8">
        <div class="container max-w-xl m-auto flex flex-wrap items-center text-center">


            <h1 class="text-lg ml-4 text-black items-center mb-8  text-grey-darkest font-termina-m container events">Special Packages </h1>


            <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col mb-8 px-3">
                <div class="h-64" style=" background: url('https://images.unsplash.com/photo-1483000805330-4eaf0a0d82da?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'); box-shadow: rgba(20, 20, 20,.1) 625px 10px 108px 6px inset; background-size: cover; background-position: center; ">
                    <p style="opacity: .9" class="font-seg text-m text-white font-smooth mt-2 serv-title"> <a class="no-underline text-white tag-tag" href=""> Starting from N30,000  </a></p>
                    <p class="font-termina-md text-25xl text-white font-smooth mt-2 serv-title"> Music Production </p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title "> <a class="no-underline text-white" href=""> Record · Mix · Master </a></p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title hover"> <a class="no-underline text-white" href=""> See packages » </a></p>
                </div>

            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col mb-8 px-3">
                <div class="h-64" style=" background: url('https://images.unsplash.com/photo-1544392667-d6cc76633537?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80'); box-shadow: rgba(20, 20, 20,.1) 625px 10px 108px 6px inset; background-size: cover; background-position: center;  ">
                    <p style="opacity: .9" class="font-seg text-m text-white font-smooth mt-2 serv-title"> <a class="no-underline text-white tag-tag" href=""> Starting from N100,000  </a></p>
                    <p class="font-termina-md text-25xl text-white font-smooth mt-2 serv-title"> Branding</p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title "> <a class="no-underline text-white" href=""> Photoshoot · Graphics · Moodboard </a></p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title hover"> <a class="no-underline text-white" href=""> See packages » </a></p>
                </div>

            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col mb-8 px-3">
                <div class="h-64" style=" background: url('https://images.unsplash.com/photo-1490971588422-52f6262a237a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'); box-shadow: rgba(20, 20, 20,.1) 625px 10px 108px 6px inset; background-size: cover; background-position: center; ">
                    <p style="opacity: .9" class="font-seg text-m text-white font-smooth mt-2 serv-title"> <a class="no-underline text-white tag-tag" href=""> Starting from ---  </a></p>
                    <p class="font-termina-md text-25xl text-white font-smooth mt-2 serv-title"> Video Production</p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title "> <a class="no-underline text-white" href=""> Video · Trailer · Lyrics Video </a></p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title hover"> <a class="no-underline text-white" href=""> Coming soon </a></p>
                </div>

            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col mb-8 px-3">
                <div class="h-64" style=" background: url('https://images.unsplash.com/photo-1504509546545-e000b4a62425?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'); box-shadow: rgba(20, 20, 20,.5) 625px 10px 108px 6px inset; background-size: cover; background-position: center; ">
                    <p style="opacity: .9" class="font-seg text-m text-white font-smooth mt-2 serv-title"> <a class="no-underline text-white tag-tag" href=""> Starting from ---  </a></p>
                    <p class="font-termina-md text-25xl text-white font-smooth mt-2 serv-title">Digital Monetization</p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title "> <a class="no-underline text-white" href=""> Apple · Spotify · Deezer · Audiomack  </a></p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title hover"> <a class="no-underline text-white" href=""> Coming soon </a></p>
                </div>

            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col mb-8 px-3">
                <div class="h-64" style=" background: url('https://images.unsplash.com/photo-1524169113253-c6ba17f68498?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'); box-shadow: rgba(20, 20, 20,.1) 625px 10px 108px 6px inset; background-size: cover; background-position: center; ">
                    <p style="opacity: .9" class="font-seg text-m text-white font-smooth mt-2 serv-title"> <a class="no-underline text-white tag-tag" href=""> Starting from ---  </a></p>
                    <p class="font-termina-md text-25xl text-white font-smooth mt-2 serv-title"> Digital Distribution</p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title "> <a class="no-underline text-white" href=""> Apple · Spotify · Deezer · Audiomack  </a></p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title hover"> <a class="no-underline text-white" href=""> Coming soon </a></p>
                </div>

            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 flex flex-col mb-8 px-3">
                <div class="h-64" style=" background: url('https://images.unsplash.com/photo-1519677584237-752f8853252e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'); box-shadow: rgba(20, 20, 20,.1) 625px 10px 108px 6px inset; background-size: cover; background-position: center; ">
                    <p style="opacity: .9" class="font-seg text-m text-white font-smooth mt-2 serv-title"> <a class="no-underline text-white tag-tag" href=""> Starting from ---  </a></p>
                    <p class="font-termina-md text-25xl text-white font-smooth mt-2 serv-title"> Music Pitching</p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title "> <a class="no-underline text-white" href=""> Publishing · Management  </a></p>
                    <p class="font-seg text-m text-white font-smooth mt-2 serv-title hover"> <a class="no-underline text-white" href=""> Coming soon </a></p>
                </div>

            </div>

        </div>
    </section>

    <!-- FAQs -->

    <section class="mt-8" style="width: 70% ; margin: 0 auto">
        <div class="container  font-termina-l ">

            <section>
                <h1 class="text-lg ml-4 text-black items-center mb-8  text-grey-darkest text-center font-termina-m container events">Frequently Asked Questions </h1>
            </section>
            <div class="toggle">
                <div class="toggle-title ">
                    <h3>
    <i></i>
    <span class="que">Q </span><span class="title-name text-xl font-termina-md">What is the universe made of?</span>
    </h3>
                </div>
                <div class="toggle-inner  font-termina-l text-xl text-grey-darker">
                    <p>Astronomers face an embarrassing conundrum: they don't know what 95% of the universe is made of. Atoms, which form everything we see around us, only account for a measly 5%. Over the past 80 years it has become clear that the substantial remainder is comprised of two shadowy entities – dark matter and dark energy. The former, first discovered in 1933, acts as an invisible glue, binding galaxies and galaxy clusters together. Unveiled in 1998, the latter is pushing the universe's expansion to ever greater speeds. Astronomers are closing in on the true identities of these unseen interlopers.</p>
                </div>
            </div>
            <!-- END OF TOGGLE -->

            <div class="toggle">
                <div class="toggle-title ">
                    <h3>
      <i></i>
      <span class="que">Q </span><span class="title-name font-termina-md">How did life begin?</span>
      </h3>
                </div>

                <div class="toggle-inner font-termina-l text-xl text-grey-darker">
                    <p>Four billion years ago, something started stirring in the primordial soup. A few simple chemicals got together and made biology – the first molecules capable of replicating themselves appeared. We humans are linked by evolution to those early biological molecules. But how did the basic chemicals present on early Earth spontaneously arrange themselves into something resembling life? How did we get DNA? What did the first cells look like? More than half a century after the chemist Stanley Miller proposed his "primordial soup" theory, we still can't agree about what happened. Some say life began in hot pools near volcanoes, others that it was kick-started by meteorites hitting the sea.</p>
                </div>
            </div>
            <!-- END OF TOGGLE -->

            <div class="toggle">
                <div class="toggle-title  ">
                    <h3>
        <i></i>
      <span class="que">Q </span> <span class="title-name font-termina-md"> Are we alone in the universe?</span>
        </h3>
                </div>

                <div class="toggle-inner font-termina-l text-xl text-grey-darker">
                    <p>Perhaps not. Astronomers have been scouring the universe for places where water worlds might have given rise to life, from Europa and Mars in our solar system to planets many light years away. Radio telescopes have been eavesdropping on the heavens and in 1977 a signal bearing the potential hallmarks of an alien message was heard. Astronomers are now able to scan the atmospheres of alien worlds for oxygen and water. The next few decades will be an exciting time to be an alien hunter with up to 60bn potentially habitable planets in our Milky Way alone.</p>
                </div>

            </div>
            <!-- END OF TOGGLE -->

            <div class="toggle">
                <div class="toggle-title  ">
                    <h3>
        <i></i>
        <span class="que">Q </span><span class="title-name font-termina-md"> What makes us human?</span>
        </h3>
                </div>

                <div class="toggle-inner font-termina-l text-xl text-grey-darker">
                    <p>Just looking at your DNA won't tell you – the human genome is 99% identical to a chimpanzee's and, for that matter, 50% to a banana's. We do, however, have bigger brains than most animals – not the biggest, but packed with three times as many neurons as a gorilla (86bn to be exact). A lot of the things we once thought distinguishing about us – language, tool-use, recognising yourself in the mirror – are seen in other animals. Perhaps it's our culture – and its subsequent effect on our genes (and vice versa) – that makes the difference. Scientists think that cooking and our mastery of fire may have helped us gain big brains. But it's possible that our capacity for co-operation and skills trade is what really makes this a planet of humans and not apes.</p>
                </div>

            </div>
            <!-- END OF TOGGLE -->

            <div class="toggle">
                <div class="toggle-title ">
                    <h3>
        <i></i>
      <span class="que">Q </span> <span class="title-name font-termina-md">  What's at the bottom of a black hole?</span>
        </h3>
                </div>

                <div class="toggle-inner font-termina-l text-xl text-grey-darker">
                    <p>It's a question we don't yet have the tools to answer. Einstein's general relativity says that when a black hole is created by a dying, collapsing massive star, it continues caving in until it forms an infinitely small, infinitely dense point called a singularity. But on such scales quantum physics probably has something to say too. Except that general relativity and quantum physics have never been the happiest of bedfellows – for decades they have withstood all attempts to unify them. However, a recent idea – called M-Theory – may one day explain the unseen centre of one of the universe's most extreme creations.</p>
                </div>

            </div>
            <!-- END OF TOGGLE -->

            <div class="toggle">
                <div class="toggle-title ">
                    <h3>
        <i></i>
      <span class="que">Q </span> <span class="title-name font-termina-md">Why do we dream?</span>
        </h3>
                </div>

                <div class="toggle-inner font-termina-l text-xl text-grey-darker">
                    <p>We spend around a third of our lives sleeping. Considering how much time we spend doing it, you might think we'd know everything about it. But scientists are still searching for a complete explanation of why we sleep and dream. Subscribers to Sigmund Freud's views believed dreams were expressions of unfulfilled wishes – often sexual – while others wonder whether dreams are anything but the random firings of a sleeping brain. Animal studies and advances in brain imaging have led us to a more complex understanding that suggests dreaming could play a role in memory, learning and emotions. Rats, for example, have been shown to replay their waking experiences in dreams, apparently helping them to solve complex tasks such as navigating mazes.</p>
                </div>

            </div>
            <!-- END OF TOGGLE -->

            <div class="toggle">
                <div class="toggle-title ">
                    <h3>
        <i></i>
      <span class="que">Q </span> <span class="title-name font-termina-md">Why is there stuff?</span>
        </h3>
                </div>

                <div class="toggle-inner font-termina-l text-xl text-grey-darker">
                    <p>You really shouldn't be here. The "stuff" you're made of is matter, which has a counterpart called antimatter differing only in electrical charge. When they meet, both disappear in a flash of energy. Our best theories suggest that the big bang created equal amounts of the two, meaning all matter should have since encountered its antimatter counterpart, scuppering them both and leaving the universe awash with only energy. Clearly nature has a subtle bias for matter otherwise you wouldn't exist. Researchers are sifting data from experiments like the Large Hadron Collider trying to understand why, with supersymmetry and neutrinos the two leading contenders.</p>
                </div>

            </div>
            <!-- END OF TOGGLE -->

        </div>
    </section> 

    @endsection
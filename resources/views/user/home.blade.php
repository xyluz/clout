@extends('user.layouts.dashboard')
 
@section('content')


{{-- Joint Views --}}

@role('user')
@include('user.layouts.user-menu')
<div class="slim-mainpanel"> 
    <div class="container">

            @if(Auth::user()->purchases()->count() < 1 )

            <div style="margin-top: 15px" class="alert alert-outline alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            <strong>Well done!</strong> Your account is active. You are ready to enjoy the fullness of clout.ng. Get started by buying a package for your business <strong><a href="{{route('package')}}">Click here to see available packages</a></strong>, <strong>check out FAQs <a href="#">here</a></strong>
            </div><!-- alert -->
            
            @elseif(Auth::user()->campaigns()->count() > 1)

            <div style="margin-top: 10px" class="alert alert-outline alert-info" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            Seems you have not started using your purchased packages, you can start running a campaign from your campaign dashboard. 
            <strong><a href="{{route('campaign')}}">click here to get started</a></strong>.
            </div><!-- alert -->

            @endif

        @if(Auth::user()->accounts()->count() < 1 )

        <div style="margin-top: 10px" class="alert alert-outline alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
       You have not created any brand identity, clout.ng allows you create several brand identities that you can manage from the same dashboard using the same account, how cool is that! <strong><a href="{{route('account')}}">click here to get started</a></strong>.
        </div><!-- alert -->
            

        @endif

        @include('user.layouts.user-dash-cards')
        @include('user.layouts.user-dash-sales')


    </div>
</div>
@endrole

@role('superadmin')
@include('user.layouts.admin-menu')
<div class="slim-mainpanel">
    <div class="container">

        @include('user.layouts.admin-dash-cards')
        @include('user.layouts.admin-dash-sales')

    </div>
</div>
@endrole

@role('presenter')
    @include('user.presenter.page');
@endrole
@endsection

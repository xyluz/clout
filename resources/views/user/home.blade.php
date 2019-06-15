@extends('user.layouts.dashboard')
 
@section('content')


{{-- Joint Views --}}

@role('user')
@include('user.layouts.user-menu')
<div class="slim-mainpanel"> 
    <div class="container">

        @include('user.layouts.user-dash-cards')
        @include('user.layouts.user-dash-sales')

        {{-- //do the check here --}}
        {{-- @if(Auth::user()->intro()) --}}

        {{-- //put model here, and load it. --}}


        {{-- @endif       --}}


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

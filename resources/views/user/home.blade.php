@extends('user.layouts.dashboard')
 
@section('content')


{{-- Joint Views --}}

@role('user')
@include('user.layouts.admin-menu')
<div class="slim-mainpanel">
    <div class="container">

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
Presenter Dashboard specifics
@endrole
@endsection

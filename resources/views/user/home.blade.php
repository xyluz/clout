@extends('user.layouts.dashboard')
 
@section('content')


{{-- Joint Views --}}

@role('user')
@include('user.layouts.user-menu')
<div class="slim-mainpanel">
    <div class="container">

        @include('user.layouts.user-dash-cards')
        @include('user.layouts.user-dash-sales')

    </div>
</div>
@endrole

@role('superadmin')
Superadmin Dashboard specifics
@endrole

@role('admin')
Admin Dashboard Specifics
@endrole

@role('presenter')
Presenter Dashboard specifics
@endrole
@endsection

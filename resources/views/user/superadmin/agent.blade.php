@extends('user.layouts.dashboard')
 
@section('content')

@include('user.layouts.admin-menu');
<div class="slim-mainpanel">
    <div class="container">
      
        @include('user.layouts.admin-all-agents');

    </div>
</div>

@endsection


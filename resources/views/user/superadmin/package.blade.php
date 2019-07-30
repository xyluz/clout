@extends('user.layouts.dashboard')
 
@section('content')

@include('user.layouts.admin-menu');
<div class="slim-mainpanel">
    <div class="container">
               
        <a class="btn btn-primary btn-sm modal-effect" href="#modaldemo8" data-toggle="modal" data-effect="effect-scale" style="margin-top: 25px;">Add Agent</a>

        @include('user.layouts.admin-all-packages');
        @include('user.admin-create-package-modal');

    </div>
</div>

@endsection


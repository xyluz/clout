@extends('user.layouts.dashboard')
 
@section('content')

@include('user.layouts.admin-menu');
<div class="slim-mainpanel">
    <div class="container">

        @include('user.layouts.admin-agent-cards');

        <a class="btn btn-primary btn-sm modal-effect" href="#modaldemo8" data-toggle="modal" data-effect="effect-scale" style="margin-top: 25px;">Add Agent</a>

        @include('user.layouts.admin-all-agents');
        @include('user.admin-create-agent-modal');

    </div>
</div>

@endsection


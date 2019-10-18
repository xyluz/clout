@extends('user.layouts.dashboard')
 
@section('content')

@include('user.layouts.admin-menu')
<div class="slim-mainpanel"> 
    <div class="container">
    <br />
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div style="margin-top: 10px" class="alert alert-outline alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    From this page you can create new packages. You can generate a purchase URL for each package by visiting https://clout.ng/{package name}/{packageid}. Replace {packageid} with the id of the package (on the table below)
            </div><!-- alert -->

        <a class="btn btn-primary btn-sm modal-effect" href="#modaldemo8" data-toggle="modal" data-effect="effect-scale" style="margin-top: 25px;">Create Package</a>
      

        @include('user.layouts.admin-all-mainpackages')
        @include('user.admin-create-mainpackage-modal')
        @include('user.admin-create-editpackage-modal')

    </div>
</div>

@endsection


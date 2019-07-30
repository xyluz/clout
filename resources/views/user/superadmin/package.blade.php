@extends('user.layouts.dashboard')
 
@section('content')

@include('user.layouts.admin-menu');
<div class="slim-mainpanel">
    <div class="container">
            <div style="margin-top: 10px" class="alert alert-outline alert-info" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
              From this page you can add items to packages, packages are fixed, there are 8 packages, but to each of these packages you can add / remote items. <br />The available pacakges are: CLOUT, MORE CLOUT, Music Production, Branding, Video Production, Digital Monetization, Digital Distribution, and Music Pitching.
                </div><!-- alert -->

        <a class="btn btn-primary btn-sm modal-effect" href="#modaldemo8" data-toggle="modal" data-effect="effect-scale" style="margin-top: 25px;">Add Items to Package</a>
      

        @include('user.layouts.admin-all-packages');
        @include('user.admin-create-package-modal');

    </div>
</div>

@endsection


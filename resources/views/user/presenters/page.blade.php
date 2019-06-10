@extends('user.layouts.dashboard')
 
@section('content')

@role('presenter')

<div class="slim-mainpanel">
        <div class="container">
            
            @include('user.layouts.presenter-cards');
         
        </div>
    </div>
    

@endrole

@endsection
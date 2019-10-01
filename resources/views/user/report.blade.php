@extends('user.layouts.dashboard')
 
@section('content')
@include('user.layouts.user-menu')

<div class="slim-mainpanel">
    <div class="container">
        @if($campaign)  
            <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
               
            </ol>
                   
        <h6 class="slim-pagetitle">Report for Campaign#{{$campaign->id}} | {{$campaign->campaign_name}}</h6>
            </div>
           
            <div class="row row-sm row-timeline">
                <div class="col-lg-12">
                    
                    <div class="card pd-30">
                       <p> <strong>Campaign : </strong> {{$campaign->campaign_name}} </p>
                       <p> <strong>Campaign : </strong> {{$campaign->start_date }}</p>
                       <p> <strong>Media : </strong> {{$campaign->media }}</p>
                       <p> <strong>Total Plays : </strong> {{$campaign->total_played }}</p>
                       <p> <strong>Campaign Description : </strong> {{$campaign->campaign_description }}</p>
                       <p> <strong>Campaign Status : </strong> {{$campaign->status }}</p>
                       <p> <strong>Created At : </strong> {{$campaign->created_at }}</p>
                    </div>
                </div>
           
            </div>
          @endif
            @role('superadmin')
            <div class="row row-sm row-timeline">
                <div class="col-lg-12">
                                          
                    <div class="card pd-30">
                        <strong>Campaign Details</strong>
                    </div>
                </div>
           
            </div>
            @endrole
            <div class="row row-sm row-timeline">
                    <div class="col-lg-12">
                                            
                      <div class="card pd-30">
                        <div class="timeline-group">
                        @if($history->count() > 0)
                            @foreach($history->get() as $h)

                          <div class="timeline-item timeline-day">
                          <div class="timeline-time">{{ $h->updated_at }}</div>
                            <div class="timeline-body">
                            <p class="timeline-title"><a href="">{{$h->title ?? 'no title'}}</a></p>
                             
                            <p class="timeline-text">{{$h->description ?? 'no description'}}</p>
                            <p class="tx-12 mg-b-0">@if($h->url) <a href="{{$h->url}}">{{$h->url}}</a> @endif</p>
                            </div><!-- timeline-body -->
                          </div><!-- timeline-item -->

                          @endforeach
                        @endif
                         
                         
                        </div><!-- timeline-group -->
                      </div><!-- card -->

                      
          
                  
    </div>
</div>

@endsection
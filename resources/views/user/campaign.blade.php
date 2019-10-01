@extends('user.layouts.dashboard')
 
@section('content')

@role('user')
@include('user.layouts.user-menu')
<div class="slim-mainpanel">
    <div class="container pd-t-20">

            <div class="row">
                    <div class="col-lg-6">
                    <h3 class="tx-inverse mg-b-15">Welcome back, {{Auth::user()->name}}</h3>
                      {{-- <p class="mg-b-40">Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p> --}}
          
                      {{-- <h6 class="slim-card-title mg-b-15">More reason to start a campaign now:</h6> --}}
                      {{-- <div class="row no-gutters">
                        <div class="col-sm-6">
                          <div class="card card-earning-summary">
                            <h6>You can Reach</h6>
                            <h1>18 Million</h1>
                            <span>People World Wide</span>
                          </div><!-- card -->
                        </div><!-- col-6 -->
                        <div class="col-sm-6">
                          <div class="card card-earning-summary mg-sm-l--1 bd-t-0 bd-sm-t">
                            <h6>You can save</h6>
                            <h1>$12,420</h1>
                            <span>Per day</span>
                          </div><!-- card -->
                        </div><!-- col-6 -->
                      </div><!-- row --> --}}
                    </div><!-- col-6 -->
                    <div class="col-lg-6 mg-t-20 mg-sm-t-30 mg-lg-t-0">
                      <div class="card card-dash-headline">
                        <h4>Introducing a new way to reach more people</h4>
                        <p>Clout offers you access and reach beyond what any other platform offers. With easy access to thousands of users, your conversation rate is quaranteed to rise by at least 70%.</p>
                        <div class="row row-sm">
                          <div class="col-sm-12">
                            <a href="" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modaldemo6">Start New Campaign</a>
                          </div><!-- col-6 -->
                         
                        </div><!-- row -->
                      </div><!-- card -->
                    </div><!-- col-6 -->
                  </div>

       @include('user.layouts.user-start-campaign') 

       <div class="card card-table mg-t-20 mg-sm-t-30">
                        <div class="card-header">
                          <h6 class="slim-card-title">Campaigns</h6>
                          {{-- <nav class="nav">
                            <a href="" class="nav-link active">Today</a>
                            <a href="" class="nav-link">This Week</a>
                            <a href="" class="nav-link">This Month</a>
                          </nav> --}}
                        </div><!-- card-header -->
                        <div class="table-responsive">
                          <table class="table mg-b-0 tx-13 display responsive nowrap" id="datatable1">
                            <thead>
                              <tr class="tx-10">
                                <th class="wd-10p pd-y-5 tx-center">#</th>
                                <th class="pd-y-5 tx-right">Campaign</th>
                                <th class="pd-y-5 tx-right">Order</th>
                                <th class="pd-y-5 tx-right">Total</th>
                                <th class="pd-y-5 tx-right">Remaining</th>
                                <th class="pd-y-5 tx-right">Created</th>
                                <th class="pd-y-5 tx-right">Start Date</th>
                                <th class="pd-y-5 tx-right">Last Update</th>                               
                                <th class="pd-y-5 tx-right">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                            @if(Auth::user()->campaigns()->count() > 0)
                                @foreach(Auth::user()->campaigns()->get() as $campaign)

                              <tr> 
                                <td class="tx-center">
                                  <img src="{{ Avatar::create($campaign->campaign_name)->toBase64() ?? 'http://via.placeholder.com/800x533' }}" class="wd-55" alt="Image">
                                </td>
                                <td>
                                <a href="" class="tx-inverse tx-right tx-medium d-block">{{$campaign->campaign_name}}</a>
                                  <span class="tx-12 d-block tx-right"><span class="square-8 @if($campaign->campaign_status != 'running') bg-danger @else bg-success @endif mg-r-5 rounded-circle"></span>{{$campaign->campaign_status}}</span>
                                </td>
                            <td class="valign-middle tx-right">
                                {{$campaign->purchase()->first()['package_item_name']}}</td>
                                <td class="valign-middle tx-right">
                                        {{$campaign->purchase()->first()['package_item_available_count']}}
                                </td>
                                <td class="valign-middle tx-right">
                                    {{ (integer)$campaign->purchase()->first()['package_item_available_count'] - (integer)$campaign->total_played }}
                                </td>
                                <td class="valign-middle tx-right">
                                        {{\Carbon\Carbon::createFromTimeStamp(strtotime($campaign->created_at))->diffForHumans() ?? 'null'}}
                                </td>
                                <td class="valign-middle tx-right">
                                       {{$campaign->start_date}}
                                </td>
                                <td class="valign-middle tx-right">
                                        {{\Carbon\Carbon::createFromTimeStamp(strtotime($campaign->updated_at))->diffForHumans() ?? 'null'}}
                                </td>
                                <td class="valign-middle tx-center">
                                <a href="{{route('report',['id'=>$campaign->id])}}" title="view full report" class="tx-gray-600 tx-15"><i class="fa fa-eye"></i></a>
                                </td>
                              </tr>

                              @endforeach
                            @endif                                                      
                             
                            </tbody>
                          </table>
                        </div><!-- table-responsive -->
                        {{-- <div class="card-footer tx-12 pd-y-15 bg-transparent">
                          <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
                        </div><!-- card-footer --> --}}
                      </div><!-- card -->
              

    </div>
    
</div>

 
  
      
@endrole
    
@endsection
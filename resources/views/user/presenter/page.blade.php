@extends('user.layouts.dashboard')
 
@section('content')
 
@role('presenter')

<div class="slim-mainpanel">
        <div class="container">
                <div class="dash-headline-two" style="padding-top: 20px">
                        <div>
                        <h4 class="tx-inverse mg-b-5">
                            @if(date('H') < 12)
                            Good morning,                             
                            
                            @elseif(date('H') > 11 && date('H') < 18)

                            Good Afternoon,
                            @else
                            Good Evening,
                            @endif

                           {{ Auth::user()->name }}</h4>
                          <p class="mg-b-0">Today is March 20, 2018</p>
                        </div>
                        <div class="d-h-t-right">
                          <div class="summary-item">
                            <h1>$1,433</h1>
                            <span>Earnings<br>for today</span>
                          </div>
                          <div class="summary-item">
                                <h1>$1,433</h1>
                                <span>Earnings<br>for today</span>
                              </div>
                          <div class="summary-item">
                            <h1>$296</h1>
                            <span>Expenses<br>for today</span>
                          </div>
                        </div>
                      </div><!-- dash-headline-two -->
                       <div class="card-footer">
                           <strong style="color:black; padding-left: 50%">Your referal URL :</strong>
                       <a href="#" id="reflink" class="card-profile-direct">{{route('ref',['id'=>Auth::user()->id,'name'=>Auth::user()->name])}}</a>
                            {{-- <button onclick="copyToClipBoard()" class="btn btn-sm btn-primary">Copy</button>                           --}}
                        </div>
                        <div class="row row-sm mg-t-20">
                                <div class="col-lg-6">
                        <div class="card card-table">
                                <div class="card-header">
                                  <h6 class="slim-card-title">Referal Usage</h6>
                                </div><!-- card-header -->
                                <div class="table-responsive">
                                  <table class="table mg-b-0 tx-13 display responsive nowrap" id="datatable1">
                                    <thead>
                                      <tr class="tx-10">
                                        <th class="wd-10p pd-y-5">&nbsp;</th>
                                        <th class="pd-y-5">Item Details</th>
                                        <th class="pd-y-5 tx-right">Total</th>
                                        <th class="pd-y-5">Plays</th>               
                                        <th class="pd-y-5">Date</th>               
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if(Auth::user()->purchases()->count() > 0)
                                    
                                        @foreach(Auth::user()->purchases()->get() as $item)
                                        <tr>
                                          <td class="pd-l-20">
                                            <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                                          </td>
                                          <td>
                                          <a href="" class="tx-inverse tx-14 tx-medium d-block">{{$item->details()->get()[0]['package_item_name'] ?? 'not set'}}</a>
                                            <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> {{$item->details()->get()[0]['package_item_available_count'] ?? '0'}} remaining</span>
                                          </td>
                                          <td class="valign-middle tx-right">0</td>
                                          <td class="valign-middle tx-right">0</td>
                                        <td class="valign-middle"><span>{{\Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->diffForHumans() ?? 'null'}}</span></td>
                                          
                                        </tr>
                                      
                                      @endforeach
                                    @else 
                                        No records
                                    @endif
                                     
                                      
                                    </tbody>
                                  </table>
                                </div><!-- table-responsive -->
                               
                              </div><!-- card -->
                            </div><!-- col-6 -->
                            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                              <div class="card card-table">
                                <div class="card-header">
                                  <h6 class="slim-card-title">User Transaction History</h6>
                                </div><!-- card-header -->
                                <div class="table-responsive">
                                  <table class="table mg-b-0 tx-13 display responsive nowrap" id="datatable2">
                                    <thead>
                                      <tr class="tx-10">
                                        <th class="wd-10p pd-y-5">&nbsp;</th>
                                        <th class="pd-y-5">Method</th>
                                        <th class="pd-y-5">Status</th> 
                                        <th class="pd-y-5">Date</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if(Auth::user()->transactions()->count() > 0)
                                        @foreach(Auth::user()->transactions()->get() as $trans)
                                          <tr>
                                            <td class="pd-l-20">
                                            <img title="{{$trans->method}}" src="{{$trans->method == 'paystack' ? 'https://pbs.twimg.com/profile_images/810741743436124160/sfGjeR7F_400x400.jpg' : 'http://via.placeholder.com/800x533'}}" class="wd-36 rounded-circle" alt="Image">
                                            </td>
                                            <td>
                                            <a href="#" class="tx-inverse tx-14 tx-medium d-block">NGN {{$trans->amount}}</a>
                                            <span class="tx-11 d-block">Ref: {{$trans->ref}}</span>
                                            </td>
                                            <td class="tx-12">
                                              <span class="square-8 @if($trans->status == 'success')bg-success @else bg-danger @endif mg-r-5 rounded-circle"></span> {{$trans->status}}
                                              <span class="tx-11 d-block">{{$trans->description}}</span>
                                            </td>
                                            <td>{{\Carbon\Carbon::createFromTimeStamp(strtotime($trans->created_at))->diffForHumans() ?? 'null'}}</td>
                                          </tr>
                                        @endforeach
                                     @endif
                                      
                                    </tbody>
                                  </table>
                                </div><!-- table-responsive -->
                               
                              </div><!-- card -->

        </div>
    </div>
</div>
</div>
    

@endrole

@endsection
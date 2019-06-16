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
                        <p class="mg-b-0">Today is {{\Carbon\Carbon::today()}}</p>
                        </div>
                        <div class="d-h-t-right">
                          <div class="summary-item">
                          <h1>	&#8358; {{Auth::user()->commission()->sum('amount')}}</h1>
                            <span>Earnings<br>All Time</span>
                          </div>
                          <div class="summary-item">
                                <h1>	&#8358; {{Auth::user()->commission()->sum('commission')}}</h1>
                                <span>Commission<br>All Time</span>
                              </div>
                          <div class="summary-item">
                            <h1>	&#8358; {{Auth::user()->commission()->whereYear('created_at', \Carbon\Carbon::now()->year)
                              ->whereMonth('created_at', \Carbon\Carbon::now()->month)->sum('commission')}}</h1>
                            <span>Commission<br>This Month</span>
                          </div>
                        </div>
                      </div><!-- dash-headline-two -->
                       <div class="card-footer">
                           <strong style="color:black; padding-left: 50%">Your referal Code :</strong>
                       <a href="#" id="reflink" class="card-profile-direct">{{Auth::user()->refcode()->first()['referral_code'] ?? 'undefined'}}</a>
                            {{-- <button onclick="copyToClipBoard()" class="btn btn-sm btn-primary">Copy</button>                           --}}
                        </div>
                        <div class="row row-sm mg-t-20">
                                <div class="col-lg-12">
                        <div class="card card-table">
                                <div class="card-header">
                                  <h6 class="slim-card-title">Referal Usage</h6>
                                </div><!-- card-header -->
                                <div class="table-responsive">
                                  <table class="table mg-b-0 tx-13 display responsive nowrap" id="datatable1">
                                    <thead>
                                      <tr class="tx-10">                                                                             
                                        <th class="pd-y-5 tx-right">Income</th>
                                        <th class="pd-y-5">Commission</th>               
                                        <th class="pd-y-5">Date</th>               
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if(Auth::user()->commission()->count() > 0)
                                    
                                        @foreach(Auth::user()->commission()->get() as $item)
                                        <tr> 
                                        <td class="valign-middle tx-right">{{$item->amount ?? '0'}}</td>
                                        <td class="valign-middle">{{$item->commission ?? '0'}}</td>
                                        <td class="valign-middle"><span>{{\Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->diffForHumans() ?? 'null'}}</span></td>
                                          
                                        </tr>
                                      
                                      @endforeach
                                 
                                    @endif
                                     
                                      
                                    </tbody>
                                  </table>
                                </div><!-- table-responsive -->
                               
                              </div><!-- card -->
                            </div><!-- col-6 -->
                           

        </div>
    </div>
</div>
</div>
    

@endrole

@endsection
<div class="row row-sm mg-t-20">
    <div class="col-lg-6">
      <div class="card card-table">
        <div class="card-header">
          <h6 class="slim-card-title">Product Purchases</h6>
        </div><!-- card-header -->
        <div class="table-responsive">
          <table class="table mg-b-0 tx-13 display responsive nowrap" id="datatable1">
            <thead>
              <tr class="tx-10">
              
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
                  <td> 
                  <a href="" class="tx-inverse tx-14 tx-medium d-block">
                    {{$item->details()->get()[0]['package_item_name'] ?? 'not set'}}
                  </a>
                    <span class="tx-11 d-block"><span class="square-8 @if($item->status()) bg-success @else bg-danger @endif mg-r-5 rounded-circle"></span> {{$item->remaining() ?? '0'}} remaining</span>
                  </td>
                <td class="valign-middle tx-right">{{ $item->availablePlays() ?? '0' }}</td>
                <td class="valign-middle tx-right">{{ $item->totalPlays() ?? '0' }}</td>
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
          <h6 class="slim-card-title">Transaction History</h6>
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
    </div><!-- col-6 -->
  </div><!-- row -->

  

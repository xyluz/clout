<div class="card card-table mg-t-20 mg-sm-t-30">
        <div class="card-header">
          <h6 class="slim-card-title">Campaigns</h6>
        
        </div><!-- card-header -->
        <div class="table-responsive">
          <table class="table mg-b-0 tx-13">
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
            @if(Auth::user()->allCampaigns()->count() > 0)
                @foreach(Auth::user()->allCampaigns()->get() as $campaign)

              <tr>
                <td class="tx-center">
                  <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
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
                  <a href="#" title="view full report" class="tx-gray-600 tx-15"><i class="fa fa-eye"></i></a>
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
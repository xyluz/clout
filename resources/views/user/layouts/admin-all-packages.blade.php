
<div class="card card-table mg-t-20 mg-sm-t-30">
        <div class="card-header">
          <h6 class="slim-card-title">Package Items</h6>
          
        </div><!-- card-header -->
        <div class="table-responsive">
          <table class="table mg-b-0 tx-13 display responsive nowrap" id="datatable1">
            <thead>
              <tr class="tx-10">
              
                <th class="pd-y-5 tx-right">Package Name</th>
                <th class="pd-y-5 tx-right">Item Name</th>               
                <th class="pd-y-5 tx-right">Item Description</th>               
                <th class="pd-y-5 tx-right">Unit Price</th>               
                <th class="pd-y-5 tx-right">Available Count</th>                                         
                <th class="pd-y-5 tx-right">Created</th>                                         
                <th class="pd-y-5 tx-right">Actions</th>
              </tr>
            </thead>
            <tbody>
              
            @if($packages->count() > 0)
                @foreach($packages->get() as $package)
       
              <tr>
                <td class="tx-center">
                 
                    {{$package->clout_package_id}}

                </td>
                <td class="valign-middle tx-right">
                    {{$package->package_item_name}}                 
                </td>
                <td class="valign-middle tx-right">
                   {{$package->package_item_description}}                     
                </td>
                <td class="valign-middle tx-right">
                    {{$package->package_item_unitprice ?? 'NA'}}
                </td>            
                <td class="valign-middle tx-right">
                    {{$package->package_item_available_count }}
                </td>
                <td class="valign-middle tx-right">
                    {{\Carbon\Carbon::createFromTimeStamp(strtotime($package->created_at))->diffForHumans() ?? 'null'}}
                </td>
              
            
                <td class="valign-middle tx-center">
               
                    <a href="{{route('report',['id'=>$package->id])}}" title="View Details" class="tx-gray-600 tx-15"><i class="fa fa-eye"></i></a>
                </td>
              </tr>

              @endforeach
            @endif                                                       
             
            </tbody>
          </table>
        </div><!-- table-responsive -->
      
      </div><!-- card -->

      
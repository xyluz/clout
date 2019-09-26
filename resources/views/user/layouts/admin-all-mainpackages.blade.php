
<div class="card card-table mg-t-20 mg-sm-t-30">
        <div class="card-header">
          <h6 class="slim-card-title">Package Items</h6>
          
        </div><!-- card-header --> 
        <div class="table-responsive">
          <table class="table mg-b-0 tx-13 display responsive nowrap" id="datatable1">
            <thead>
              <tr class="tx-10">
              
                <th class="pd-y-5 tx-right">Package Name</th>
                <th class="pd-y-5 tx-right">Items Count</th>               
                <th class="pd-y-5 tx-right">Package Description</th>               
                <th class="pd-y-5 tx-right">Price</th>
                <th class="pd-y-5 tx-right">Created</th>                                         
                <th class="pd-y-5 tx-right">Actions</th>
              </tr>
            </thead>
            <tbody>              
          
                @foreach($packages->get() as $package)
       
              <tr>
                <td class="tx-center">
                 
                    {{$package->package_name}}

                </td>
                <td class="valign-middle tx-right">
                   {{$package->itemsCount($package->id)}}        
                </td>
                <td class="valign-middle tx-right">
                   {{$package->package_description}}                     
                </td>
                <td class="valign-middle tx-right">
                    {{$package->package_price ?? 'NA'}}
                </td>            
             
                <td class="valign-middle tx-right">
                    {{\Carbon\Carbon::createFromTimeStamp(strtotime($package->created_at))->diffForHumans() ?? 'null'}}
                </td>
              
            
                <td class="valign-middle tx-center">
               
                    <a href="{{route('report',['id'=>$package->id])}}" title="View Details" class="tx-danger tx-15"><i class="fa fa-trash"></i></a>
                    <a href="{{route('a.packages',['id'=>$package->id])}}" title="View Details" class="tx-danger tx-15"><i class="fa fa-eye"></i></a>
                </td>
              </tr>

              @endforeach
                                                                 
             
            </tbody>
          </table>
        </div><!-- table-responsive -->
      
      </div><!-- card -->

      
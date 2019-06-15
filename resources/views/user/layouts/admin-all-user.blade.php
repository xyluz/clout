

<div class="card card-table mg-t-20 mg-sm-t-30">
        <div class="card-header">
          <h6 class="slim-card-title">Users</h6>
        
        </div><!-- card-header -->
        <div class="table-responsive">
          <table class="table mg-b-0 tx-13 display responsive nowrap" id="datatable1">
            <thead>
              <tr class="tx-10">
                <th class="wd-10p pd-y-5 tx-center">#</th>
                <th class="pd-y-5 tx-right">Name</th>
                <th class="pd-y-5 tx-right">Email</th>               
                <th class="pd-y-5 tx-right">Account Type</th>               
                <th class="pd-y-5 tx-right">Role</th>               
                <th class="pd-y-5 tx-right">Created</th>                                          
                <th class="pd-y-5 tx-right">Actions</th>
              </tr>
            </thead>
            <tbody> 
            @if($users->count() > 0)
                @foreach($users->get() as $user)
               
              <tr>
                <td class="tx-center">
                  <img src="{{ Avatar::create($user->name)->toBase64() ?? 'http://via.placeholder.com/800x533' }}" class="wd-55" alt="Image">
                </td>
                <td class="valign-middle tx-right">
               {{$user->name}}
                 
                </td>
                <td class="valign-middle tx-right">
                   {{$user->email}}
                     
                </td>
                <td class="valign-middle tx-right">
                    {{$user->account_type}}
                </td>            
                <td class="valign-middle tx-right">
                    {{ $user->getRoleNames()[0] ??  'undefined' }}
                </td>
                <td class="valign-middle tx-right">
                        {{\Carbon\Carbon::createFromTimeStamp(strtotime($user->created_at))->diffForHumans() ?? 'null'}}
                </td>
              
            
                <td class="valign-middle tx-center">
               
                    <a href="{{route('report',['id'=>$user->id])}}" title="View Details" class="tx-gray-600 tx-15"><i class="fa fa-eye"></i></a>
                </td>
              </tr>

              @endforeach
            @endif                                                      
             
            </tbody>
          </table>
        </div><!-- table-responsive -->
      
      </div><!-- card -->

      
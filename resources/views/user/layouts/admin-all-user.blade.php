

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
                    &nbsp;
                    <a href="#modaldemo{{$user->id}}" data-toggle="modal" data-effect="effect-slide-in-bottom" title="Add Transaction for user" class="tx-gray-600 tx-15"><i class="fa fa-money"></i></a>

                    <div id="modaldemo{{$user->id}}" class="modal fade">
                        <div class="modal-dialog modal-dialog-vertical-center" role="document">
                          <div class="modal-content bd-0 tx-14">
                              <button id="closeModal{{$user->id}}" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                              </button>
            
                            <div class="modal-body pd-25">
                               Select Package to add for user #{{$user->id}} <br /><br />
                              
                               @if($packages->count() > 0)
                              <select name="package" class="form-control select2">
                                @foreach($packages->get() as $package)

                              <option value="{{$package->id}}">{{$package->package_name}}</option>

                                @endforeach
                              </select>

                              @else

                                <span class="alert alert-error">You need to create a package and select the package here</span>

                               @endif
                              <br />
                            {{-- <input type="text" placeholder="play count" id="count{{$user->id}}" class="form-control pd-y-12"  /> <br />
                            <input type="text" placeholder="Title" id="title{{$user->id}}" class="form-control pd-y-12"  /> <br />
                            <input type="text" placeholder="URL" id="url{{$user->id}}" class="form-control pd-y-12"  /> <br /> --}}
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                             
                            </div>
                       
                          </div>
                        </div><!-- modal-dialog -->
                      </div><!-- modal -->  
                </td> 
              </tr>

              @endforeach
            @endif                                                      
             
            </tbody>
          </table>
        </div><!-- table-responsive -->
      
      </div><!-- card -->

    

      
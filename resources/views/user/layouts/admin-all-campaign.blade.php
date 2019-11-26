

<div class="card card-table mg-t-20 mg-sm-t-30">
        <div class="card-header">
          <h6 class="slim-card-title">Campaigns</h6>
        
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
            @if(Auth::user()->allCampaigns()->count() > 0)
                @foreach(Auth::user()->allCampaigns()->get() as $campaign)

              <tr>
                <td class="tx-center">
                  <img src="{{ Avatar::create($campaign->byUser()->first()['name'])->toBase64() ?? 'http://via.placeholder.com/800x533' }}" class="wd-55" alt="Image">
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
                <a href="#modaldemo{{$campaign->id}}" data-toggle="modal" data-effect="effect-slide-in-bottom" title="Update Plays" class="tx-gray-600 tx-15"><i class="fa fa-plus"></i></a>
                  &nbsp; &nbsp;

                <div id="modaldemo{{$campaign->id}}" class="modal fade">
                        <div class="modal-dialog modal-dialog-vertical-center" role="document">
                          <div class="modal-content bd-0 tx-14">
                          <button id="closeModal{{$campaign->id}}" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
            
                            <div class="modal-body pd-25">
                                Update play for campaign#{{$campaign->id}} <br />
                            <input type="text" placeholder="play count" id="count{{$campaign->id}}" class="form-control pd-y-12"  /> <br />
                            <input type="text" placeholder="Title" id="title{{$campaign->id}}" class="form-control pd-y-12"  /> <br />
                            <input type="text" placeholder="URL" id="url{{$campaign->id}}" class="form-control pd-y-12"  /> <br />
                            <small>Description:</small>
                            <textarea id="description{{$campaign->id}}" class="form-control"></textarea>
                            <br />
                            <button onclick="updateCampaignPlay({{$campaign->id}})" type="button" class="btn btn-primary">Save</button>
                             
                            </div>
                       
                          </div>
                        </div><!-- modal-dialog -->
                      </div><!-- modal -->  

                    <a href="{{route('report',['id'=>$campaign->id])}}" title="View Details" class="tx-gray-600 tx-15"><i class="fa fa-eye"></i></a>

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

      <script>
            $(function(){
      
              // showing modal with effect
              $('.modal-effect').on('click', function(e){
                e.preventDefault();
                var effect = $(this).attr('data-effect');
                $('#modaldemo8').addClass(effect);
              });
      
              // hide modal with effect
              $('#modaldemo8').on('hidden.bs.modal', function (e) {
                $(this).removeClass (function (index, className) {
                    return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
                });
              });
            });

            function updateCampaignPlay(n){

                let count_id = '#count'+n;
                let url_id = '#url'+n;
                let desc_id = '#description'+n;
                let title_id = '#title'+n;

                let button = '#closeModal'+n;

                let count = $(count_id).val();
                let url = $(url_id).val();
                let title = $(title_id).val();
                let desc = $(desc_id).val();

               
            
                $.ajax({
                    type: 'POST',                  
                    url: '{{route("a.campaign.update")}}',
                    data: { 
                        'id': n, 
                        'title':title,
                        'play': count ,
                        'url':url,
                        'description' : desc,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(msg){
                        $(button).click();
                  
                       if(msg == 'success'){

                            Swal.fire({
                                    type: 'success',
                                    title: 'Update Done',
                                    text: 'Campaign has been updated, refresh to reload view',
                                    footer: 'User has been notified',
                                    confirmButtonText: 'Yes, Refresh'
                                }).then((result) => {
                                    if (result.value) {
                                      location.reload();
                                    }
                                  })
                          

                            
                       }else{
                        Swal.fire({
                                    type: 'error',
                                    title: 'Update Not Done : ' + msg,
                                    text: 'Campaign was not updated',
                                    footer: 'User will not be notified'
                                });
                       }

                       console.log(msg);

                    },
                    error: function(response){
                        console.log(response);
                    }
                });

            }
          </script>
      
 <!-- MODAL GRID -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <div id="modaldemo6" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
            <div class="modal-body pd-0">
              <div class="row no-gutters">
                <div class="col-lg-6 bg-primary">
                  <div class="pd-40">
                    
                    <h3 class="tx-white mg-b-20">Almost done!</h3>
                    <p class="tx-white op-7 mg-b-30"> We believe that analysis of your company and your customers is key in responding effectively to your promotional needs and we will work with you to fully understand your business to achieve the greatest amount of publicity possible so that you can see a return from the advertising.</p>
                    <h3 class="tx-white mg-b-20">What you should know:</h3>
                    <p class="tx-white op-7 mg-b-30"> 
                      - Each campaign you create should be associated with a brand profile that you have setup, this will allow our agent create posts properly suited to your specific brand.
                      <br />- Is is important that as an artist you attached a downloadable link to the song you wish to promote, your brand profile as space for multiple tracks, however, campaign can only be used for single tracks.
                      <br />- Your description is very important, although, our agent will do some editing fro you, you however, still need to clearly pass across the properly mindset you wish attached to your music.
                    </p>
                    {{-- <p class="tx-white">
                      <span class="tx-uppercase tx-medium d-block mg-b-15">Our Address:</span>
                      <span class="op-7">Ayala Center, Cebu Business Park, Cebu City, Cebu, Philippines 6000</span>
                    </p> --}}
                  </div>
                </div><!-- col-6 -->
                <div class="col-lg-6 bg-white">
                  <div class="pd-y-30 pd-xl-x-30">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                <form action="{{route('campaign.create')}}" method="POST">
                    @csrf
                    <div class="pd-x-30 pd-y-10">
                        <div class="form-group">

                                <input required class="form-control" type="text" name="campaign_name"  placeholder="Name this Campaign">

                        </div>
                      <div class="form-group">
                        
                        @if(Auth::user()->accounts()->count() > 0)
                            <select name="account_id" required class="form-control select2" data-placeholder="Select Brand">
                                <option label="Select Brand">Select Brand</option>
                            @foreach(Auth::user()->accounts()->get() as $account)
                           
                            <option label="{{$account->name}}" value="{{$account->id}}">{{$account->name}}</option>
                               
                            @endforeach
                            </select>
                        @else
                            You need to create a brand profile before you can start a campaign,
                            <a href="{{route('account')}}">click here to create one now.</a>
                        @endif

                      </div><!-- form-group -->
                      <div class="form-group mg-b-20">

                        @if(Auth::user()->purchases()->count() > 0)

                            <select required name="campaign_package" class="form-control select2" data-placeholder="Select Product">
                                    <option label="Select Product">Select Product</option>

                                @foreach(Auth::user()->purchases()->get() as $item)
                               
                            <option value="{{$item->details()->get()[0]['id']}}">{{$item->details()->get()[0]['package_item_name']}} | {{$item->details()->get()[0]['package_item_available_count']}} plays</option>
                                   

                                @endforeach
                            </select> 
                        @else 
                            
                        You have not bought any package, you need at least 1 package to be able to run a campaign <a href="{{route('package')}}">click here to get one now.</a>
                        
                        @endif
                      </div><!-- form-group -->                    
  
                      <div class="form-group mg-b-20">
                          When should this campaign start?
                            <div class="input-group">
                                                
                            <input type="text" name="start_date" class="form-control" placeholder="YYYY/MM/DD">

                        </div>
                       
                      </div><!-- form-group -->

                      <div class="form-group mg-b-20">
                          Link to audio:
                            <div class="input-group">
                                                
                            <input type="text" name="media" class="form-control" placeholder="url">

                        </div>
                       
                      </div><!-- form-group -->
                      <div class="form-group mg-b-20">
                           Tell us more
                            <div class="input-group">
                                                
                           <textarea name="campaign_description" class="form-control"></textarea>
                        </div>
                       
                      </div><!-- form-group -->
                      <button type="submit" class="btn btn-primary pd-y-12 btn-block">Save Changes</button>
  
                </form>  
                    </div>
                  </div><!-- pd-20 -->
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- modal-body -->
          </div><!-- modal-content -->
        </div><!-- modal-dialog -->
      </div><!-- modal -->
  



<div id="modaldemo4" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Profile</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form action="{{route('acc.edit.main')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body pd-25">
                    <div class="form-layout form-layout-6">
                    <input type="hidden" value="{{$details->id}}" name="brand_id" />
                    <input type="hidden" value="{{$details->logo}}" name="logo_old" />
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Name:
                              </div><!-- col-4 -->
                              <div class="col-9 col-sm-8">
                                <input class="form-control" @if($details->name) value={{$details->name ?? ''}} @endif type="text" name="brand_name" placeholder="Brand Name">
                              </div><!-- col-8 -->
                            </div><!-- row -->
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Motto:
                              </div><!-- col-4 -->
                              <div class="col-7 col-sm-8">
                                <input class="form-control" @if($details->genre) value={{$details->genre ?? ''}} @endif type="text" name="genre" placeholder="Genre/Motto">
                              </div><!-- col-8 -->
                            </div><!-- row -->
                            <div class="row no-gutters">
                                <div class="col-5 col-sm-4">
                                    Description:
                                    
                                </div><!-- col-4 -->
                                <div class="col-9 col-sm-8">
                                    <textarea required minlength="150" rows="5" name="description" class="form-control">@if($details->description) {{$details->description ?? ''}} @endif</textarea>
                                </div><!-- col-8 -->
                            </div><!-- row -->  

                            <div class="row no-gutters">
                                    <div class="col-5 col-sm-4">
                                        Address:
                                        
                                    </div><!-- col-4 -->
                                    <div class="col-9 col-sm-8">
                                        <textarea  rows="3" name="address" class="form-control">@if($details->address) {{$details->address ?? ''}} @endif </textarea>
                                    </div><!-- col-8 -->
                                </div><!-- row -->  
                            
                            <div class="row no-gutters">
                                    <div class="col-5 col-sm-4">
                                        Logo:                                        
                                    </div><!-- col-4 -->
                                    <div class="col-9 col-sm-8">
                                       
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="logo" id="customFile3">
                                            <label class="custom-file-label custom-file-label-inverse" for="customFile">Choose file</label>
                                         </div><!-- custom-file -->
                                    

                                    </div><!-- col-8 -->
                                </div><!-- row -->  
                                                      
                          </div><!-- form-layout -->
                
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
        </div><!-- modal-dialog -->
      </div><!-- modal -->
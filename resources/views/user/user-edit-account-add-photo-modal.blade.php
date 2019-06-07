<div id="modaldemo5" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Photo</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form action="{{route('media.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body pd-25">
                    <div class="form-layout form-layout-6"> 
                    <input type="hidden" value="{{$details->id}}" name="brand_id" />
                    <input type="hidden" value="photo" name="media_type" />
                   
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Name:
                              </div><!-- col-4 -->
                              <div class="col-9 col-sm-8">
                                <input class="form-control" type="text" name="media_title" placeholder="Photo Name">
                              </div><!-- col-8 -->
                            </div><!-- row -->
                                                                                
                            <div class="row no-gutters">
                                    <div class="col-5 col-sm-4">
                                        Photo:                                        
                                    </div><!-- col-4 -->
                                    <div class="col-9 col-sm-8">
                                       
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo" id="customFile3">
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
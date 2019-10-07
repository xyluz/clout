<div id="modaldemo8" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Create New Package</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <form action="{{route('a.create.mainpackage')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body pd-25">
                    <div class="form-layout form-layout-6">
                  
                        <div class="row no-gutters">
                            <div class="col-5 col-sm-4">
                              Package Name
                            </div><!-- col-4 -->
                            <div class="col-9 col-sm-8">
                                <input required class="form-control" type="text" name="packageName" placeholder="Package Name">
                            </div><!-- col-8 -->
                          </div><!-- row -->
                         
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Description:
                              </div><!-- col-4 -->
                              <div class="col-7 col-sm-8">
                                <textarea name="packageDescription" class="form-control"></textarea>
                               </div><!-- col-8 -->
                            </div><!-- row -->

                            <div class="row no-gutters">
                                <div class="col-5 col-sm-4">
                                    Price (NGN):
                                </div><!-- col-4 -->
                                <div class="col-9 col-sm-8">
                                    <input class="form-control" type="integer" name="packagePrice" placeholder="9800">
                                </div><!-- col-8 -->
                            </div><!-- row -->

                            <div class="row no-gutters">
                                <div class="col-5 col-sm-4">
                                    Color:
                                </div><!-- col-4 -->
                                <div class="col-9 col-sm-8">
                                  <small class="text-info text">hex color, default is 000000. Do not add the '#'</small>
                                    <input class="form-control" type="integer" name="color" placeholder="000000">
                                </div><!-- col-8 -->
                            </div><!-- row -->

                           <div class="row no-gutters">
                                    <div class="col-5 col-sm-4">
                                        Large Icon:                                        
                                    </div><!-- col-4 -->
                                    <div class="col-9 col-sm-8">
                                       
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="largeIcon" id="customFile3">
                                            <label class="custom-file-label custom-file-label-inverse" for="customFile">Choose file</label>
                                         </div><!-- custom-file -->
                                    

                                    </div><!-- col-8 -->
                                </div><!-- row -->  
                                <div class="row no-gutters">
                                  <div class="col-5 col-sm-4">
                                      Small Icon:                                        
                                  </div><!-- col-4 -->
                                  <div class="col-9 col-sm-8">
                                     
                                      <div class="custom-file">
                                          <input type="file" class="custom-file-input" name="smallIcon" id="customFile3">
                                          <label class="custom-file-label custom-file-label-inverse" for="customFile">Choose file</label>
                                       </div><!-- custom-file -->
                                  

                                  </div><!-- col-8 -->
                              </div><!-- row -->  

                              <div class="row no-gutters">
                                <div class="col-5 col-sm-4">
                                  Display As:
                                </div><!-- col-4 -->
                                <div class="col-9 col-sm-8">

                                    <select name="displayAs" required class="form-control select2" data-placeholder="Choose one">
                                        <option label="choose one">Select</option>
                                        <option value="mainhome">Main Home Page Product</option>
                                        <option value="special">Special Packages</option>
                                        <option value="hidden">Hidden</option>
                                    </select>
                              
                                </div><!-- col-8 -->
                              </div><!-- row -->

                              <div class="row no-gutters">
                                  <div class="col-5 col-sm-4">
                                    Position: 
                                  </div><!-- col-4 -->
                                  <div class="col-9 col-sm-8">
                                      <small>For Main Home Page Product</small>
                                      <select name="productPosition" required class="form-control select2" data-placeholder="Choose one">
                                          <option label="choose one">Select</option>
                                          <option value="left">Left</option>
                                          <option value="center">Center</option>
                                          <option value="right">Right</option>
                                      </select>
                                  
                                  </div><!-- col-8 -->
                                </div><!-- row -->
                                 
                                <div class="row no-gutters">
                                    <div class="col-5 col-sm-4">
                                      More Details:
                                    </div><!-- col-4 -->
                                    <div class="col-7 col-sm-8">
                                      <small>For single product page</small>
                                      <textarea name="moreDetails" class="form-control"></textarea>
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

     
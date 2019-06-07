<div id="modaldemo8" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New Brand Profile</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form action="{{route('acc.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body pd-25">
                    <div class="form-layout form-layout-6">
                            <div class="row no-gutters">
                                    <div class="col-5 col-sm-4">
                                      Type:
                                    </div><!-- col-4 -->
                                    <div class="col-9 col-sm-8">
                                        <select name="brand_type" required class="form-control select2" data-placeholder="Choose one">
                                            <option label="Choose one">Brand Type</option>
                                            <option value="business">Business</option>
                                            <option value="artist">Artist</option>
                                        </select>
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                                    </div><!-- col-8 -->
                                  </div><!-- row -->
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Name:
                              </div><!-- col-4 -->
                              <div class="col-9 col-sm-8">
                                <input required class="form-control" type="text" name="brand_name" placeholder="Brand Name">
                              </div><!-- col-8 -->
                            </div><!-- row -->
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Email:
                              </div><!-- col-4 -->
                              <div class="col-7 col-sm-8">
                                <input required class="form-control" type="email" name="email" placeholder="Email Address">
                              </div><!-- col-8 -->
                            </div><!-- row -->
                            <div class="row no-gutters">
                                    <div class="col-5 col-sm-4">
                                        Genre:
                                    </div><!-- col-4 -->
                                    <div class="col-9 col-sm-8">
                                        <input required class="form-control" type="text" name="genre" placeholder="Genre / Motto">
                                    </div><!-- col-8 -->
                                </div><!-- row -->

                                <div class="row no-gutters">
                                        <div class="col-5 col-sm-4">
                                            Phone:
                                        </div><!-- col-4 -->
                                        <div class="col-9 col-sm-8">
                                            <input required class="form-control" type="phone" name="phone" placeholder="Business Phone">
                                        </div><!-- col-8 -->
                                    </div><!-- row -->
                                    <div class="row no-gutters">
                                        <div class="col-5 col-sm-4">
                                            Description:
                                            
                                        </div><!-- col-4 -->
                                        <div class="col-9 col-sm-8">
                                            <textarea required minlength="150" rows="3" name="description" class="form-control"></textarea>
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
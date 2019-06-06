         
$table->string('genre'); //genre or motto

$table->text('description');

$table->string('instagram')->nullable();
$table->string('twitter')->nullable();
$table->string('linkedin')->nullable();
$table->string('phone')->nullable();
$table->string('facebook')->nullable();
$table->text('logo')->nullable();

<div id="modaldemo8" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New Company Profile</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pd-25">
                    <div class="form-layout form-layout-6">
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Brand Name:
                              </div><!-- col-4 -->
                              <div class="col-9 col-sm-8">
                                <input class="form-control" type="text" name="brand_name" placeholder="Brand Name">
                              </div><!-- col-8 -->
                            </div><!-- row -->
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Email:
                              </div><!-- col-4 -->
                              <div class="col-7 col-sm-8">
                                <input class="form-control" type="text" name="email" placeholder="Email Address">
                              </div><!-- col-8 -->
                            </div><!-- row -->

                            <div class="row no-gutters">
                                <div class="col-5 col-sm-4">
                                    Website:
                                </div><!-- col-4 -->
                                <div class="col-9 col-sm-8">
                                    <input class="form-control" type="text" name="website" placeholder="Website">
                                </div><!-- col-8 -->
                            </div><!-- row -->

                            <div class="row no-gutters">
                                    <div class="col-5 col-sm-4">
                                        Genre:
                                    </div><!-- col-4 -->
                                    <div class="col-9 col-sm-8">
                                        <input class="form-control" type="text" name="genre" placeholder="Genre / Motto">
                                    </div><!-- col-8 -->
                                </div><!-- row -->

                                <div class="row no-gutters">
                                        <div class="col-5 col-sm-4">
                                            Phone:
                                        </div><!-- col-4 -->
                                        <div class="col-9 col-sm-8">
                                            <input class="form-control" type="text" name="phone" placeholder="Business Phone">
                                        </div><!-- col-8 -->
                                    </div><!-- row -->
                                    <div class="row no-gutters">
                                        <div class="col-5 col-sm-4">
                                            Description:
                                        </div><!-- col-4 -->
                                        <div class="col-9 col-sm-8">
                                            <textarea rows="3" class="form-control"></textarea>
                                        </div><!-- col-8 -->
                                    </div><!-- row -->
                                    <div class="row no-gutters">
                                        <div class="col-5 col-sm-4">
                                            Logo:
                                        </div><!-- col-4 -->
                                        <div class="col-9 col-sm-8">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                
                                        </div><!-- col-8 -->
                                    </div><!-- row -->

                          </div><!-- form-layout -->
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div><!-- modal-dialog -->
      </div><!-- modal -->
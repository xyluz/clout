<div id="modaldemo8" class="modal fade">
        <div class="modal-dialog modal-dialog-vertical-center" role="document">
          <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Create New Package Item</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <form action="{{route('a.create.package')}}" method="POST">
            @csrf
            <div class="modal-body pd-25">
                    <div class="form-layout form-layout-6">
                  
                        <div class="row no-gutters">
                            <div class="col-5 col-sm-4">
                              Select Package
                            </div><!-- col-4 -->
                            <div class="col-9 col-sm-8">
                              <select class="form-control" name="package_id">
                                
                                @foreach($mainpack->get() as $pack)
                                  <option value="{{$pack->id}}">{{$pack->package_name}}</option>
                                @endforeach
                              </select>
                            </div><!-- col-8 -->
                          </div><!-- row -->
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Item Name:
                              </div><!-- col-4 -->
                              <div class="col-9 col-sm-8">
                                <input required class="form-control" type="text" name="itemName" placeholder="Package Item Name">
                              </div><!-- col-8 -->
                            </div><!-- row -->
                            <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                Description:
                              </div><!-- col-4 -->
                              <div class="col-7 col-sm-8">
                                <textarea name="itemDescription" class="form-control"></textarea>
                              </div><!-- col-8 -->
                            </div><!-- row -->

                            <div class="row no-gutters">
                                <div class="col-5 col-sm-4">
                                    Unit Price (NGN):
                                </div><!-- col-4 -->
                                <div class="col-9 col-sm-8">
                                    <input class="form-control" type="integer" name="unitPrice" placeholder="9800">
                                </div><!-- col-8 -->
                            </div><!-- row -->
                                 
                            <div class="row no-gutters">
                                <div class="col-5 col-sm-4">
                                   Available Count:
                                </div><!-- col-4 -->
                                <div class="col-9 col-sm-8">
                                    <input class="form-control" type="integer" name="availableCount" placeholder="78">
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

     
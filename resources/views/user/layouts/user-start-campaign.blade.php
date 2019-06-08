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
                    <div class="pd-x-30 pd-y-10">
                     
                      <div class="form-group">
                        {{-- TODO: Check if user already has accounts created --}}
                            <select name="account_type" class="form-control select2" data-placeholder="Account Type">
                                    <option label="Account Type">Select Account</option>
                                    <option value="business">Business Owner</option>
                                    <option value="manager">Manager</option>
                                    <option value="artist">Artist</option> 
                                </select>

                      </div><!-- form-group -->
                      <div class="form-group mg-b-20">
                        {{-- TODO: Check if user has products available for usage --}}
                            <select name="account_type" class="form-control select2" data-placeholder="Account Type">
                                    <option label="Account Type">Select Product</option>
                                    <option value="business">Business Owner</option>
                                    <option value="manager">Manager</option>
                                    <option value="artist">Artist</option> 
                            </select>                   
                       
                      </div><!-- form-group -->

                      <div class="form-group mg-b-20">
                          When should this campaign start?
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                </div>
                            </div>
                      
                            <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">

                        </div>
                       
                      </div><!-- form-group -->
  
                      <button class="btn btn-primary pd-y-12 btn-block">Save Changes</button>
  
                      
                    </div>
                  </div><!-- pd-20 -->
                </div><!-- col-6 -->
              </div><!-- row -->
            </div><!-- modal-body -->
          </div><!-- modal-content -->
        </div><!-- modal-dialog -->
      </div><!-- modal -->
  



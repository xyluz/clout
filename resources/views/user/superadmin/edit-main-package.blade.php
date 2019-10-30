@extends('user.layouts.dashboard')
 
@section('content')

@include('user.layouts.admin-menu')

<div class="slim-mainpanel">
    <div class="container">
            <div style="margin-top: 10px" class="alert alert-outline alert-info" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                   You can edit the details of a package here
            </div><!-- alert -->

       
        <form action="{{route('a.edit.package')}}" enctype="multipart/form-data" method="POST">
                @csrf
        <input type="hidden" value="{{$package->id}}" name="packageId" />
                <div class="modal-body pd-25">
                  <div class="form-layout form-layout-6">
                
                      <div class="row no-gutters">
                          <div class="col-5 col-sm-4">
                            Package Name
                          </div><!-- col-4 -->
                          <div class="col-9 col-sm-8">
                          <input required required class="form-control" type="text" name="packageName" value="{{$package->package_name}}">
                          </div><!-- col-8 -->
                        </div><!-- row -->
                       
                          <div class="row no-gutters">
                            <div class="col-5 col-sm-4">
                              Description:
                            </div><!-- col-4 -->
                            <div class="col-7 col-sm-8">
                              <textarea required name="packageDescription" class="form-control">{{$package->package_description}}</textarea>
                             </div><!-- col-8 -->
                          </div><!-- row -->

                          <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                  Price (NGN):
                              </div><!-- col-4 -->
                              <div class="col-9 col-sm-8">
                                  <input required class="form-control" type="integer" name="packagePrice" value="{{$package->package_price}}">
                              </div><!-- col-8 -->
                          </div><!-- row -->

                          <div class="row no-gutters">
                              <div class="col-5 col-sm-4">
                                  Color:
                              </div><!-- col-4 -->
                              <div class="col-9 col-sm-8">
                                <small class="text-info text">hex color, default is 000000. Do not add the '#'</small>
                                  <input class="form-control" type="integer" name="color" value="{{$package->color ?? '000000'}}">
                              </div><!-- col-8 -->
                          </div><!-- row -->

                         <div class="row no-gutters">
                                  <div class="col-5 col-sm-4">
                                      Large Icon:                                        
                                  </div><!-- col-4 -->
                                  <div class="col-9 col-sm-8">
                                      <input required type="hidden" value="{{$package->large_icon}}" name="large_icon_old" />
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
                                   <input required type="hidden" value="{{$package->small_icon}}" name="small_icon_old" />
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
                                      <option @if($package->display_as == 'mainhome') selected @endif value="mainhome">Main Home Page Product</option>
                                      <option @if($package->display_as == 'special') selected @endif value="special">Special Packages</option>
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
                                        <option  @if($package->position == 'left') selected @endif value="left">Left</option>
                                        <option  @if($package->position == 'center') selected @endif value="center">Center</option>
                                        <option  @if($package->position == 'right') selected @endif value="right">Right</option>
                                    </select>
                                
                                </div><!-- col-8 -->
                              </div><!-- row -->
                               
                              <div class="row no-gutters">
                                  <div class="col-5 col-sm-4">
                                    More Details:
                                  </div><!-- col-4 -->
                                  <div class="col-7 col-sm-8">
                                    <small>For single product page</small>
                                  <textarea required name="moreDetails" class="form-control">{{$package->single_page_content}}</textarea>
                                   </div><!-- col-8 -->
                                </div><!-- row -->

                        </div><!-- form-layout -->
              
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          </div>
        </div>
            </form>
{{--       

        @include('user.layouts.admin-all-mainpackages')
        @include('user.admin-create-mainpackage-modal')
        @include('user.admin-create-editpackage-modal') --}}

    </div>
</div>

@endsection


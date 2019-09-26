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

       
        <form action="{{route('a.edit.package')}}" method="POST">
                @csrf
                <div class="modal-body pd-25">
                        <div class="form-layout form-layout-6">
                                <input required value="{{$package->id ?? ''}}" type="hidden" name="packageId">
                      
                            <div class="row no-gutters">
                                <div class="col-5 col-sm-4">
                                  Package Name
                                </div><!-- col-4 -->
                                <div class="col-9 col-sm-8">
                                <input required class="form-control" value="{{$package->package_name ?? ''}}" type="text" name="packageName" placeholder='Package Name'>
                                </div><!-- col-8 -->
                              </div><!-- row -->
                             
                                <div class="row no-gutters">
                                  <div class="col-5 col-sm-4">
                                    Description:
                                  </div><!-- col-4 -->
                                  <div class="col-7 col-sm-8">
                                  <textarea name="packageDescription" class="form-control">{{$package->package_description ?? ''}}</textarea>
                                  </div><!-- col-8 -->
                                </div><!-- row -->
    
                                <div class="row no-gutters">
                                    <div class="col-5 col-sm-4">
                                        Price (NGN):
                                    </div><!-- col-4 -->
                                    <div class="col-9 col-sm-8">
                                    <input class="form-control" type="integer" name="packagePrice" value="{{$package->package_price}}" placeholder="9800">
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
{{--       

        @include('user.layouts.admin-all-mainpackages')
        @include('user.admin-create-mainpackage-modal')
        @include('user.admin-create-editpackage-modal') --}}

    </div>
</div>

@endsection


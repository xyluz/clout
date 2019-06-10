@extends('user.layouts.dashboard')
 
@section('content')
@include('user.layouts.user-menu')

<div class="slim-mainpanel">
        <div class="container">
                <div class="slim-pageheader">
                     
                <div class="row row-sm">
                        <div class="col-lg-8">
                          <div class="card card-profile">
                            <div class="card-body">
                              <div class="media">
                                <img src="{{'/storage/'. substr($details->logo,7) ?? 'http://via.placeholder.com/500x500' }}" alt="">
                               
                                <div class="media-body">
                                <h3 class="card-profile-name">{{$details->name ?? 'company name not set'}}</h3>
                                <p class="card-profile-position">{{$details->genre ?? 'motto/genre not set'}}</p>
                                <p>{{$details->address ?? 'address not set'}}</p>
              
                                <p class="mg-b-0">{{ $details->description ?? 'brand description not set' }}</p>
                                </div><!-- media-body -->
                              </div><!-- media -->
                            </div><!-- card-body -->
                            <div class="card-footer">
                              <a href="" class="card-profile-direct">http://thmpxls.me/profile?id=katherine</a>
                              <div>
                                <a href="#modaldemo4" data-toggle="modal" data-effect="effect-super-scaled" title="edit profile"><i class="fa fa-edit"></i></a>
                              <a href="#"><img class="img-fluid" style="border-radius: 0% !important;" alt="Google Business Logo" src="{{asset('img/googlebusiness.png')}}" /></a>
                              </div>
                            </div><!-- card-footer -->
                          </div><!-- card --> 
                          <ul class="nav nav-activity-profile mg-t-20"> 
                            <li class="nav-item"><a href="#modaldemo2" data-toggle="modal" data-effect="effect-super-scaled" class="nav-link"><i class="icon ios-basket tx-success"></i> Add Product</a></li>
                            <li class="nav-item"><a href="#modaldemo5" data-toggle="modal" data-effect="effect-super-scaled" class="nav-link"><i class="icon ion-image tx-secondary"></i> Add Photo</a></li>
                        </ul><!-- nav -->

                        <div class="row row-sm mg-t-20">
                                <div class="col-lg-6">
                                  <div class="card">
                                    <div class="card-header">
                                      <h6 class="slim-card-title">Products</h6>
                                    </div><!-- card-header -->
                                    <div class="table-responsive">
                                      <table class="table display responsive nowrap" id="datatable1">
                                        <thead>
                                          <tr>
                                            <th>&nbsp;</th>
                                            <th>Product Details</th>                                          
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                         @if($products->count() > 0)
                                            @foreach($products->get() as $product)
                                              <tr>
                                                <td>
                                                  <img src="{{'/storage/'. substr($product->product_image,7) ?? 'http://via.placeholder.com/500x500' }}" class="wd-55" alt="Image">
                                                </td>
                                                <td>
                                                  <a href="" class="tx-inverse tx-14 tx-medium d-block">{{ $product->product_name }}</a>
                                                <span class="tx-11 d-block"><span>{{  $product->product_price }}</span>
                                                </td>                                           
                                                <td class="valign-middle tx-center">
                                                <a href="{{route('prod.delete',['id'=>$product->id])}}" class="tx-danger tx-24"><i class="fa fa-trash" title="delete this product"></i></a>                                               
                                                </td>
                                              </tr> 
                                            @endforeach                                        
                                          @endif
                                        </tbody>
                                      </table>
                                    </div><!-- table-responsive -->
                                   
                                  </div><!-- card -->
                                </div><!-- col-6 -->
                                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                                  <div class="card">
                                    <div class="card-header">
                                      <h6 class="slim-card-title">Gallery</h6>
                                    </div><!-- card-header -->
                                    <div class="table-responsive">
                                      <table class="table display responsive nowrap" id="datatable2">
                                        <thead>
                                          <tr>
                                            <th>&nbsp;</th>
                                            <th>Details</th>                                           
                                            <th>Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @if($media->count() > 0)
                                          @foreach($media->get() as $single)
                                          <tr>
                                            <td class="pd-l-20">
                                              <img src="{{'/storage/'. substr($single->media_url,7) ?? 'http://via.placeholder.com/500x500' }}"" class="wd-36 rounded-circle" alt="Image">
                                            </td>
                                            <td>
                                            <a href="" class="tx-inverse tx-14 tx-medium d-block">{{$single->media_title}}</a>
                                            <span class="tx-11 d-block">TYPE: {{$single->media_type}}</span>
                                            </td>
                                          
                                            <td>
                                                <a href="{{route('media.delete',['id'=>$single->id])}}" class="tx-danger tx-24"><i class="fa fa-trash" title="delete this photo"></i></a>                                               
                                            </td>
                                          </tr>
                                          @endforeach
                                          @endif
                                          
                                        </tbody>
                                      </table>
                                    </div><!-- table-responsive -->
                                  
                                  </div><!-- card -->
                                </div><!-- col-6 -->
                              </div><!-- row -->
                 

                        </div>             
             
                        <div class="col-lg-4 ">
                                <div class="card pd-25">
                                        <div class="slim-card-title">Contact &amp; Personal Info <a href="#modaldemo8" data-toggle="modal" data-effect="effect-super-scaled">  <i class="fa fa-pencil"></i></a></div>
                          
                                        <div class="media-list mg-t-25">
                                          <div class="media">
                                            <div><i class="icon ion-link tx-24 lh-0"></i></div>
                                            <div class="media-body mg-l-15 mg-t-4">
                                              <h6 class="tx-14 tx-gray-700">Websites  </h6>
                                            <a href="" class="d-block">{{ $details->website ?? 'undefined' }}</a>
                                             
                                            </div><!-- media-body -->
                                          </div><!-- media -->
                                          <div class="media mg-t-25">
                                            <div><i class="icon ion-ios-telephone-outline tx-24 lh-0"></i></div>
                                            <div class="media-body mg-l-15 mg-t-4">
                                              <h6 class="tx-14 tx-gray-700">Phone Number  </h6>
                                            <span class="d-block">{{ $details->phone ?? 'undefined'}}</span>
                                            </div><!-- media-body -->
                                          </div><!-- media -->
                                          <div class="media mg-t-25">
                                            <div><i class="icon ion-ios-email-outline tx-24 lh-0"></i></div>
                                            <div class="media-body mg-l-15 mg-t-4">
                                              <h6 class="tx-14 tx-gray-700">Email Address </h6>
                                            <span class="d-block">{{ $details->email ?? 'undefined' }}</span>
                                            </div><!-- media-body -->
                                          </div><!-- media -->
                                          <div class="media mg-t-25">
                                            <div><i class="icon ion-social-twitter tx-18 lh-0"></i></div>
                                            <div class="media-body mg-l-15 mg-t-2">
                                              <h6 class="tx-14 tx-gray-700">Twitter  </h6>
                                            <a href="#" class="d-block">{{ $details->twitter ?? 'undefined' }}</a>
                                            </div><!-- media-body -->
                                          </div><!-- media -->
                                          <div class="media mg-t-25">
                                                <div><i class="icon ion-social-instagram tx-18 lh-0"></i></div>
                                                <div class="media-body mg-l-15 mg-t-2">
                                                  <h6 class="tx-14 tx-gray-700">Instagram  </h6>
                                                <a href="#" class="d-block">{{ $details->instagram ?? 'undefined' }}</a>
                                                </div><!-- media-body -->
                                              </div><!-- media -->
                                              <div class="media mg-t-25">
                                                    <div><i class="icon ion-social-linkedin tx-18 lh-0"></i></div>
                                                    <div class="media-body mg-l-15 mg-t-2">
                                                      <h6 class="tx-14 tx-gray-700">Linkedin </h6>
                                                    <a href="#" class="d-block">{{ $details->linkedin ?? 'undefined' }}</a>
                                                    </div><!-- media-body -->
                                                  </div><!-- media -->
                                                  <div class="media mg-t-25">
                                                        <div><i class="icon ion-social-youtube tx-18 lh-0"></i></div>
                                                        <div class="media-body mg-l-15 mg-t-2">
                                                          <h6 class="tx-14 tx-gray-700">Spotlight Video  </h6>
                                                        <a href="#" class="d-block">{{ $details->spotlight ?? 'undefined' }}</a>
                                                        </div><!-- media-body -->
                                                      </div><!-- media -->
                                        </div><!-- media-list -->
                                      </div><!-- card -->
                        </div>
                </div>
                                 

        </div>
</div>
@include('user.user-edit-account-contact-modal')
@include('user.user-edit-account-main-modal')
@include('user.user-edit-account-create-product-modal')
@include('user.user-edit-account-add-photo-modal')
<script>
        $(function(){
  
          // showing modal with effect
          $('.modal-effect').on('click', function(e){
            e.preventDefault();
            var effect = $(this).attr('data-effect');
            $('#modaldemo8').addClass(effect);
          });
  
          // hide modal with effect
          $('#modaldemo8').on('hidden.bs.modal', function (e) {
            $(this).removeClass (function (index, className) {
                return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
            });
          });
        });
      </script>

@endsection
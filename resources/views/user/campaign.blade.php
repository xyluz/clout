@extends('user.layouts.dashboard')
 
@section('content')

@role('user')
@include('user.layouts.user-menu')
<div class="slim-mainpanel">
    <div class="container pd-t-20">

            <div class="row">
                    <div class="col-lg-6">
                    <h3 class="tx-inverse mg-b-15">Welcome back, {{Auth::user()->name}}</h3>
                      <p class="mg-b-40">Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
          
                      <h6 class="slim-card-title mg-b-15">More reason to start a campaign now:</h6>
                      <div class="row no-gutters">
                        <div class="col-sm-6">
                          <div class="card card-earning-summary">
                            <h6>You can Reach</h6>
                            <h1>18 Million</h1>
                            <span>People World Wide</span>
                          </div><!-- card -->
                        </div><!-- col-6 -->
                        <div class="col-sm-6">
                          <div class="card card-earning-summary mg-sm-l--1 bd-t-0 bd-sm-t">
                            <h6>You can save</h6>
                            <h1>$12,420</h1>
                            <span>Per day</span>
                          </div><!-- card -->
                        </div><!-- col-6 -->
                      </div><!-- row -->
                    </div><!-- col-6 -->
                    <div class="col-lg-6 mg-t-20 mg-sm-t-30 mg-lg-t-0">
                      <div class="card card-dash-headline">
                        <h4>Introducing a new way to reach more people</h4>
                        <p>Clout offers you access and reach beyond what any other platform offers. With easy access to thousands of users, your conversation rate is quaranteed to rise by at least 70%.</p>
                        <div class="row row-sm">
                          <div class="col-sm-12">
                            <a href="" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modaldemo6">Start New Campaign</a>
                          </div><!-- col-6 -->
                         
                        </div><!-- row -->
                      </div><!-- card -->
                    </div><!-- col-6 -->
                  </div>

       @include('user.layouts.user-start-campaign') 

       <div class="card card-table mg-t-20 mg-sm-t-30">
                        <div class="card-header">
                          <h6 class="slim-card-title">Running Campaigns</h6>
                          {{-- <nav class="nav">
                            <a href="" class="nav-link active">Today</a>
                            <a href="" class="nav-link">This Week</a>
                            <a href="" class="nav-link">This Month</a>
                          </nav> --}}
                        </div><!-- card-header -->
                        <div class="table-responsive">
                          <table class="table mg-b-0 tx-13">
                            <thead>
                              <tr class="tx-10">
                                <th class="wd-10p pd-y-5 tx-center">Item</th>
                                <th class="pd-y-5">Item Details</th>
                                <th class="pd-y-5 tx-right">Sold</th>
                                <th class="pd-y-5 tx-center">Location</th>
                                <th class="pd-y-5">Gain</th>
                                <th class="pd-y-5 tx-right">Added</th>
                                <th class="pd-y-5 tx-right">Updated</th>
                                <th class="pd-y-5 tx-center">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="tx-center">
                                  <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                                </td>
                                <td>
                                  <a href="" class="tx-inverse tx-medium d-block">The Dothraki Shoes</a>
                                  <span class="tx-12 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                                </td>
                                <td class="valign-middle tx-right">3,345</td>
                                <td class="valign-middle tx-center"><span class="flag-icon flag-icon-ph tx-16"></span></td>
                                <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span> from last week</td>
                                <td class="valign-middle tx-right">10/21/2017</td>
                                <td class="valign-middle tx-right">an hour ago</td>
                                <td class="valign-middle tx-center">
                                  <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                                </td>
                              </tr>
                                                                                     
                             
                            </tbody>
                          </table>
                        </div><!-- table-responsive -->
                        <div class="card-footer tx-12 pd-y-15 bg-transparent">
                          <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
                        </div><!-- card-footer -->
                      </div><!-- card -->
              

    </div>
    
</div>

 <!-- MODAL GRID -->
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
                        <input type="email" name="email" class="form-control pd-y-12" placeholder="Enter your email">
                      </div><!-- form-group -->
                      <div class=" mg-b-20">
                          
                            <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput">
                   
                       
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
  
      
@endrole
    
@endsection
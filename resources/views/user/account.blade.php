@extends('user.layouts.dashboard')
 
@section('content')
@include('user.layouts.user-menu')

<div class="slim-mainpanel">
    <div class="container">  
        <div class="row row-sm mg-t-20">
            <div class="col-lg-4">
            <div class="card card-info">
                <div class="card-body pd-40">
                {{-- <div class="d-flex justify-content-center mg-b-30"> --}}
                {{-- <img src="{{asset('img/brandicon.svg')}}" class="wd-10" alt=""> --}}
                {{-- </div> --}}
                <h5 class="tx-inverse mg-b-20">Brands</h5>
                <p>Setup a new profile, you can create multiple business profiles attached to your main account </p>
                <a href="#modaldemo8" data-toggle="modal" data-effect="effect-super-scaled" class="btn btn-primary btn-block">Getting Started</a>
                </div><!-- card -->
            </div><!-- card -->
            </div><!-- col-4 -->
            @include('user.user-create-account-modal')
            <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                    <div class="card card-table">
                      <div class="card-header">
                        <h6 class="slim-card-title">Accounts</h6>
                      </div><!-- card-header -->
                      <div class="table-responsive">
                        <table class="table mg-b-0 tx-13 display responsive nowrap" id="datatable1">
                          <thead>
                            <tr class="tx-10">
                              <th class="wd-10p pd-y-5">&nbsp;</th>
                              <th class="pd-y-5">Details</th>
                              <th class="pd-y-5">Type</th>
                              <th class="pd-y-5">Date</th>
                              <th class="pd-y-5">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @if(Auth::user()->accounts()->count() > 0)
                                @foreach(Auth::user()->accounts()->get() as $account)
                                <tr> 
                                    <td class="pd-l-20">
                                        <img src="{{'/storage/'. substr($account->logo,7) ?? 'http://via.placeholder.com/500x500' }}" class="wd-36 rounded-circle" alt="Image">
                                    </td>
                                    <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">{{$account->name ?? 'undefined'}}</a>
                                    <span class="tx-11 d-block">{{$account->phone ?? ''}}</span>
                                    </td>
                                    <td class="tx-12">
                                        {{ $account->type ?? 'undefined' }}
                                    </td>
                                    <td>
                                            {{\Carbon\Carbon::createFromTimeStamp(strtotime($account->created_at))->diffForHumans() ?? 'null'}}
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">

                                            <a href="{{route('acc.delete',['id'=>$account->id])}}" title="delete account" class="btn btn-danger active"><i class="fa fa-trash"></i></a>
                                            <a href="{{route('acc.details',['id'=>$account->id])}}" title="view account details"  class="btn btn-primary active"><i class="fa fa-eye"></i></a>
                                            <a href="{{route('campaign')}}" title="start campaign"  class="btn btn-secondary active"><i class="fa fa-minus"></i></a>
                                           
                                        </div>
                                    
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                           
                            
                          </tbody>
                        </table>
                      </div><!-- table-responsive -->
                      {{-- <div class="card-footer tx-12 pd-y-15 bg-transparent">
                        <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transaction History</a>
                      </div><!-- card-footer --> --}}
                    </div><!-- card -->
                  </div><!-- col-6 -->
                </div><!-- row -->
           

    </div><!-- container -->
  </div><!-- slim-mainpanel -->

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
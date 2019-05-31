@extends('user.layouts.dashboard')
 
@section('content')
@include('user.layouts.menu')


<div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
           <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item">Clout Package Name</li>            
          </ol> 
          <h6 class="slim-pagetitle right">Invoice</h6>
        </div><!-- slim-pageheader -->

        <div class="card card-invoice">
          <div class="card-body">
            <div class="invoice-header">
              <h1 class="invoice-title">Invoice</h1>
              <div class="billed-from">
                <h6>Clout.ng</h6>
                <p>267A Etim Inyang Cres, Victoria Island, Lagos<br>
                Tel No: 01 280 1375<br>
                Email: accounts@clout.ng</p>
              </div><!-- billed-from -->
            </div><!-- invoice-header -->

            <div class="row mg-t-20">
              <div class="col-md">
                <label class="section-label-sm tx-gray-500">Billed To</label>
                <div class="billed-to">
                  <h6 class="tx-gray-800">{{Auth::user()->name}}</h6>
                
                  Email: {{Auth::user()->email}}</p>
                </div>
              </div><!-- col -->
              <div class="col-md">
                <label class="section-label-sm tx-gray-500">Invoice Information</label>
                <p class="invoice-info-row">
                  <span>Invoice No</span>
                  <span>{{ $package->package_name ?? 'Clout-Single' }} - {{$package->id ?? $items[0]->id}}</span>
                </p> 
                <p class="invoice-info-row">
                  <span>Date:</span>
                  <span>{{Carbon\Carbon::now()}}</span>
                </p>
              </div><!-- col -->
            </div><!-- row -->

            <div class="table-responsive mg-t-40">
              <table class="table table-invoice">
                <thead>
                  <tr>
                    <th class="wd-20p">Type</th>
                    <th class="wd-40p">Description</th>                   
                    <th class="tx-left">Price</th>
                
                  </tr>
                </thead>
                <tbody>
                  @if($items)
                    @foreach($items as $item)
                    <tr>
                      <td>{{$item->package_item_name}}</td>
                      <td class="tx-12">{{$item->package_item_description}}</td>                   
                      <td class="tx-left">{{$item->package_item_unitprice}}</td>                    
                    </tr>                
                  @endforeach
                  @endif
                  <tr>
                    <td colspan="2" rowspan="4" class="valign-middle">
                      <div class="invoice-notes">
                        <label class="section-label-sm tx-gray-500">Notes</label>
                        <p>{{$package->package_description ?? 'No further notes'}}</p>
                      </div><!-- invoice-notes -->
                    </td>
                  
                  </tr>                
                 
                  <tr>
                    <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                    <td colspan="2" class="tx-left"><h4 class="tx-primary tx-bold tx-lato">{{$package->package_price ?? 0}}</h4></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->

            <hr class="mg-b-60">

            <a href="" class="btn btn-primary btn-block">Pay Now</a>

          </div><!-- card-body -->
        </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    

@endsection

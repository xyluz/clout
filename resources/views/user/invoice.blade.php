@extends('user.layouts.dashboard')
 
@section('content')


<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
           <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"></li>            
          </ol> 
          <h6 class="slim-pagetitle right">This package ( {{$package->package_name}} ) contains:</h6>
        </div><!-- slim-pageheader -->

        <div class="card card-invoice">
          <div class="card-body">
           
            <div class="table-responsive mg-t-40">
              <table class="table table-invoice">
                <thead>
                  <tr>
                    <th class="wd-30p">Type</th>
                    <th class="wd-40p">Description</th>                   
                    <th class="tx-left wd-30" colspan="2">Price</th>
                
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
                 
                  </tr>                

                  <tr>
                    <td class="tx-right tx-uppercase tx-bold tx-inverse">Total</td>
                    <td colspan="2" class="tx-left"><h4 class="tx-primary tx-bold tx-lato">{{$package->package_price}}</h4></td>
                  </tr>

                </tbody>
              </table>
            </div><!-- table-responsive -->

            <hr class="mg-b-60">

            <a href="{{ route('cart.add',['id'=>$package->id]) }}"  class="btn btn-primary btn-block">Add to Cart</a>
            <a href="{{ route('cart.add',['id'=>$package->id]) }}"  class="btn btn-success btn-block">Checkout</a>

          </div><!-- card-body -->
        </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->



@endsection

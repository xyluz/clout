@extends('user.layouts.dashboard')
 
@section('content')
@include('user.layouts.menu')

<script src="https://js.paystack.co/v1/inline.js"></script>

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
                    <th class="wd-30p">Type</th>
                    <th class="wd-40p">Description</th>                   
                    <th class="tx-left wd-30">Price</th>
                
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

            <button onclick="payWithPaystack()" class="btn btn-primary btn-block">Pay Now</button>

          </div><!-- card-body -->
        </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    <script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_live_96225c07868c79dfa4651c2d085c65e8d26ddfe0',
      email: '{{Auth::user()->email}}',
      amount: '{{$package->package_price}}' * 100,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Customer Name",
                variable_name: "customer_name",
                value: "{{Auth::user()->name}}"
            },
            {
                display_name: "Clout Package Name",
                variable_name: "clout_package_name",
                value: "{{$package->package_name}}"
            }
         ]
      },
      callback: function(response){
        //do ajax call to update my transactions table, update user purchases
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
        //give error that something went wrong
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>


@endsection

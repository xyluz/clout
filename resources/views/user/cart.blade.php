@extends('user.layouts.dashboard')
 
@section('content')
@include('user.layouts.user-menu')

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

            <button onclick="payWithPaystack()" class="btn btn-primary btn-block">Add to Cart</button>

          </div><!-- card-body -->
        </div><!-- card -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    <script>
    
    $(".update-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ url('update-cart') }}',
            method: "patch",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });



  function payWithPaystack(){
    // console.dir('{!!$items!!}');
    var handler = PaystackPop.setup({
      key: 'pk_test_e5b2f82bc75abecde0e0fe9c004b2eb8551c7549',
      email: '{{Auth::user()->email}}',
      amount: '{{Auth::user()->isReferred() ? $package->package_price - ($package->package_price * (5/100))  : $package->package_price}}' * 100,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Full Name",
                variable_name: "full_name",
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
          //TODO:display preloader
       
          $.ajax({
              type: 'POST',             
              url: "{{route('register.purchase')}}",
              data: {  
                  'items': '{!!$items!!}',                  
                  'transaction': response, 
                  "_token": "{{ csrf_token() }}",
                  'amount' : '{{Auth::user()->isReferred() ? $package->package_price - ($package->package_price * (5/100))  : $package->package_price}}',
              },
              success: function(msg){
                if(msg == "done"){
                  
                  Swal.fire({
                    type: 'success',
                    title: 'Success!',
                    text: 'Your purchase was successful',
                    footer: '<a href="{{route('dashboard')}}">redirecting... click here if it takes too long</a>'
                  });

                  window.location = "{{route('dashboard')}}";

                }else{

                  Swal.fire({
                    type: 'error',
                    title: 'Oops!',
                    text: 'Something went wrong with your purchase, try later or contact admin',
                    footer: '<a href="{{route('dashboard')}}">go to dashboard</a>'
                  });

                }
                 
              }
          });

      },
      onClose: function(){
        Swal.fire({
                    type: 'info',
                    title: 'Transaction Stopped!',
                    text: 'Your transaction has been stopped',
                    footer: '<a href="{{route('dashboard')}}">go to dashboard</a>'
                  });
      }
    });
    handler.openIframe();
  }
</script>


@endsection

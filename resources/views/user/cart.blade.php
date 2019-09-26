@extends('user.layouts.dashboard')
 
@section('content')

<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
           <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"></li>            
          </ol> 
         
        </div><!-- slim-pageheader -->

        <div class="card card-invoice">
          <div class="card-body">
           
            <div class="table-responsive mg-t-40">
              <table class="table table-invoice">
                <thead>
                  <tr>
                    <th class="wd-30p">Product</th>
                    <th class="wd-40p">Price</th>                   
                    <th class="tx-left wd-30">Quantity</th>
                    <th  class="text-center">Subtotal</th>
                    <th ></th>                
                  </tr>
                </thead>
                <tbody>
                <?php $total = 0 ?>

                @if(session('cart') && count(session('cart')) > 0)
                    @foreach(session('cart') as $id => $details)                
                        <?php $total += $details['price'] * $details['quantity'] ?>

                        <tr>
                            <td data-th="Product">
                              
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            
                            </td>
                            <td data-th="Price">&#8358; {{ $details['price'] }}</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                            </td>
                            <td data-th="Subtotal" class="text-center">&#8358; {{ $details['price'] * $details['quantity'] }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>

                              
                  @endforeach
                @endif           

                  {{-- <tr>
                    <td class="tx-right tx-uppercase tx-bold tx-inverse">Discount</td>
                    <td colspan="2" class="tx-left"><h4 class="tx-primary tx-bold tx-lato">&#8358; 7000</h4></td>
                  </tr> --}}
                  <tr>
                    <td class="tx-right tx-uppercase tx-bold tx-inverse">Total</td>
                    <td colspan="2" class="tx-left"><h4 class="tx-primary tx-bold tx-lato">&#8358; {{$total}}</h4></td>
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
   
    var handler = PaystackPop.setup({
      key: 'pk_test_e5b2f82bc75abecde0e0fe9c004b2eb8551c7549',
      email: '{{Auth::user()->email}}',
      amount: '{{Auth::user()->isReferred() ? $total - ($total * (5/100))  : $total}}' * 100,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), 
      metadata: {
         custom_fields: [
            {
                display_name: "Full Name",
                variable_name: "full_name",
                value: "{{Auth::user()->name}}"
            }
         ]
      },
      callback: function(response){
          //TODO:display preloader
       
          $.ajax({
              type: 'POST',             
              url: "{{route('register.purchase')}}", 
              data: {                    
                  'transaction': response, 
                  "_token": "{{ csrf_token() }}",
                  'amount' : '{{Auth::user()->isReferred() ? $total - ($total * (5/100))  : $total}}',
              },
              success: function(msg){
                  console.log(msg);
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

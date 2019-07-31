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

                @if(session('cart'))
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
           

                  <tr>
                    <td class="tx-right tx-uppercase tx-bold tx-inverse">Discount</td>
                    <td colspan="2" class="tx-left"><h4 class="tx-primary tx-bold tx-lato">&#8358; 7000</h4></td>
                  </tr>
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




</script>


@endsection

@extends('user.layouts.dashboard')
 
@section('content')
@include('user.layouts.menu')


<div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Invoice Page</li>
          </ol>
          <h6 class="slim-pagetitle">Invoice Page</h6>
        </div><!-- slim-pageheader -->

        <div class="card card-invoice">
          <div class="card-body">
            <div class="invoice-header">
              <h1 class="invoice-title">Invoice</h1>
              <div class="billed-from">
                <h6>ThemePixels, Inc.</h6>
                <p>201 Something St., Something Town, YT 242, Country 6546<br>
                Tel No: 324 445-4544<br>
                Email: youremail@companyname.com</p>
              </div><!-- billed-from -->
            </div><!-- invoice-header -->

            <div class="row mg-t-20">
              <div class="col-md">
                <label class="section-label-sm tx-gray-500">Billed To</label>
                <div class="billed-to">
                  <h6 class="tx-gray-800">Juan Dela Cruz</h6>
                  <p>4033 Patterson Road, Staten Island, NY 10301 <br>
                  Tel No: 324 445-4544<br>
                  Email: youremail@companyname.com</p>
                </div>
              </div><!-- col -->
              <div class="col-md">
                <label class="section-label-sm tx-gray-500">Invoice Information</label>
                <p class="invoice-info-row">
                  <span>Invoice No</span>
                  <span>GHT-673-00</span>
                </p>
                <p class="invoice-info-row">
                  <span>Project ID</span>
                  <span>32334300</span>
                </p>
                <p class="invoice-info-row">
                  <span>Issue Date:</span>
                  <span>November 21, 2017</span>
                </p>
                <p class="invoice-info-row">
                  <span>Due Date:</span>
                  <span>November 30, 2017</span>
                </p>
              </div><!-- col -->
            </div><!-- row -->

            <div class="table-responsive mg-t-40">
              <table class="table table-invoice">
                <thead>
                  <tr>
                    <th class="wd-20p">Type</th>
                    <th class="wd-40p">Description</th>
                    <th class="tx-center">QNTY</th>
                    <th class="tx-left">Unit Price</th>
                    <th class="tx-left">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Website Design</td>
                    <td class="tx-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</td>
                    <td class="tx-center">2</td>
                    <td class="tx-left">$150.00</td>
                    <td class="tx-left">$300.00</td>
                  </tr>
                  <tr>
                    <td>Firefox Plugin</td>
                    <td class="tx-12">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</td>
                    <td class="tx-center">1</td>
                    <td class="tx-left">$1,200.00</td>
                    <td class="tx-left">$1,200.00</td>
                  </tr>
                  <tr>
                    <td>iPhone App</td>
                    <td class="tx-12">Et harum quidem rerum facilis est et expedita distinctio</td>
                    <td class="tx-center">2</td>
                    <td class="tx-left">$850.00</td>
                    <td class="tx-left">$1,700.00</td>
                  </tr>
                  <tr>
                    <td>Android App</td>
                    <td class="tx-12">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut</td>
                    <td class="tx-center">3</td>
                    <td class="tx-left">$850.00</td>
                    <td class="tx-left">$2,550.00</td>
                  </tr>
                  <tr>
                    <td colspan="2" rowspan="4" class="valign-middle">
                      <div class="invoice-notes">
                        <label class="section-label-sm tx-gray-500">Notes</label>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                      </div><!-- invoice-notes -->
                    </td>
                    <td class="tx-left">Sub-Total</td>
                    <td colspan="2" class="tx-left">$5,750.00</td>
                  </tr>
                  <tr>
                    <td class="tx-left">Tax (5%)</td>
                    <td colspan="2"  class="tx-left">$287.50</td>
                  </tr>
                  <tr>
                    <td class="tx-left">Discount</td>
                    <td colspan="2" class="tx-left">-$50.00</td>
                  </tr>
                  <tr>
                    <td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
                    <td colspan="2" class="tx-left"><h4 class="tx-primary tx-bold tx-lato">$5,987.50</h4></td>
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

@extends('user.layouts.dashboard')
 
@section('content')
@include('user.layouts.user-menu')

<div class="slim-mainpanel">
    <div class="container">  
        <div class="row row-sm mg-t-20">
            <div class="col-lg-4">
            <div class="card card-info">
                <div class="card-body pd-40">
                <div class="d-flex justify-content-center mg-b-30">
                    <img src="../img/icon1.svg" class="wd-100" alt="">
                </div>
                <h5 class="tx-inverse mg-b-20">Safe &amp; Secure</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>
                <a href="" class="btn btn-primary btn-block">Getting Started</a>
                </div><!-- card -->
            </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card card-info">
                <div class="card-body pd-40">
                <div class="d-flex justify-content-center mg-b-30">
                    <img src="../img/icon2.svg" class="wd-100" alt="">
                </div>
                <h5 class="tx-inverse mg-b-20">Instant Exchange</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>
                <a href="" class="btn btn-primary btn-block">Take a Tour</a>
                </div><!-- card-body -->
            </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card card-sales">
                <h6 class="slim-card-title tx-primary">Sales Report</h6>
                <div class="row">
                <div class="col">
                    <label class="tx-12">Today</label>
                    <p>1,898</p>
                </div><!-- col -->
                <div class="col">
                    <label class="tx-12">This Week</label>
                    <p>32,112</p>
                </div><!-- col -->
                <div class="col">
                    <label class="tx-12">This Month</label>
                    <p>72,067</p>
                </div><!-- col -->
                </div><!-- row -->

                <div class="progress mg-b-5">
                <div class="progress-bar bg-primary wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
                <p class="tx-12 mg-b-0">Maecenas tempus, tellus eget conditum rhon.</p>
            </div><!-- card -->

            <div class="card card-impression mg-t-20">
                <div class="card-body pd-b-0">
                <h6 class="slim-card-title tx-primary">Page Impressions</h6>
                <h2 class="tx-lato tx-inverse">323,360</h2>
                <p class="tx-12"><span class="tx-primary">2.5%</span> change from yesterday</p>
                </div><!-- card-body -->
                <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
            </div><!-- card -->
            </div><!-- col-4 -->
        </div><!-- row -->

    </div><!-- container -->
  </div><!-- slim-mainpanel -->
@endsection

    <div class="card card-dash-one mg-t-20">
    <div class="row no-gutters">
      <div class="col-lg-3">
        <i class="icon ion-ios-people-outline"></i>
        <div class="dash-content">
          <label class="tx-primary">Agents</label>
        <h2>{{ Auth::user()->allCampaigns()->count() }}</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
      <div class="col-lg-3">
        <i class="icon ion-cash"></i>
        <div class="dash-content">
          <label class="tx-success">All Time</label>
        <h2>{{ Auth::user()->allUsers()->count() }}</h2>
        
        </div><!-- dash-content -->
      </div><!-- col-3 -->
      <div class="col-lg-3">
        <i class="icon ion-cash"></i>
        <div class="dash-content">
          <label class="tx-purple">Paid</label>
        <h2>{{ Auth::user()->allTransactions()->count() }}</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
      <div class="col-lg-3">
        <i class="icon ion-cash"></i>
        <div class="dash-content">
          <label class="tx-danger">Pending</label>
          <h2>0</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
    </div><!-- row -->
  </div><!-- card -->

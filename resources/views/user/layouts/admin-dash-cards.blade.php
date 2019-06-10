
    <div class="card card-dash-one mg-t-20">
    <div class="row no-gutters">
      <div class="col-lg-3">
        <i class="icon ion-ios-analytics-outline"></i>
        <div class="dash-content">
          <label class="tx-primary">Campaigns</label>
        <h2>{{ Auth::user()->allCampaigns()->count() ?? '0' }}</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
      <div class="col-lg-3">
        <i class="icon ion-ios-pie-outline"></i>
        <div class="dash-content">
          <label class="tx-success">Users</label>
        <h2>{{ Auth::user()->allUsers()->count() ?? '0' }}</h2>
        
        </div><!-- dash-content -->
      </div><!-- col-3 -->
      <div class="col-lg-3">
        <i class="icon ion-ios-stopwatch-outline"></i>
        <div class="dash-content">
          <label class="tx-purple">Transactions</label>
        <h2>{{ Auth::user()->allTransactions()->count() ?? '0' }}</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
      <div class="col-lg-3">
        <i class="icon ion-ios-world-outline"></i>
        <div class="dash-content">
          <label class="tx-danger">Pending Plays</label>
          <h2>0</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
    </div><!-- row -->
  </div><!-- card -->

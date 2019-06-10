
    <div class="card card-dash-one mg-t-20">
    <div class="row no-gutters">
      <div class="col-lg-3">
        <i class="icon ion-ios-analytics-outline"></i>
        <div class="dash-content">
          <label class="tx-primary">Campaigns</label>
        <h2>{{ Auth::user()->campaigns()->count() ?? '0' }}</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
      <div class="col-lg-3">
        <i class="icon ion-ios-pie-outline"></i>
        <div class="dash-content">
          <label class="tx-success">Page Visits</label>
        {{-- <h2>{{ Auth::user()->pageViews()->count() }}</h2> --}}
        <h2>0</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
      <div class="col-lg-3">
        <i class="icon ion-ios-play-outline"></i>
        <div class="dash-content">
          <label class="tx-purple">Plays</label>
        <h2>0</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
      <div class="col-lg-3">
        <i class="icon ion-ios-pause-outline"></i>
        <div class="dash-content">
          <label class="tx-danger">Pending Plays</label>
          <h2>0</h2>
        </div><!-- dash-content -->
      </div><!-- col-3 -->
    </div><!-- row -->
  </div><!-- card -->

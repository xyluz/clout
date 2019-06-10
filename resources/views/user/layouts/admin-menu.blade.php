<div class="slim-navbar">
      <div class="container">
        <ul class="nav">

          <li class="nav-item ">
          <a class="nav-link" href="{{route('dashboard')}}">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>           
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('a.campaign')}}">
              <i class="icon ion-ios-book-outline"></i>
              <span>Campaigns</span>
            </a>           
          </li>
          
          @role('superadmin')

            <li class="nav-item">
                <a class="nav-link" href="{{route('a.users')}}">
                    <i class="icon ion-ios-filing-outline"></i>
                    <span>Users</span>
                </a>                
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('a.users')}}">
                    <i class="icon ion-ios-filing-outline"></i>
                    <span>Presenters</span>
                </a>                
            </li>

          @endrole

        
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->

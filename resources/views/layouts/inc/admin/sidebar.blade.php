<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/home') }}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/country')}}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Add Country</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/houses')}}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Add House</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('wallet')}}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Update Bank/Wallet Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/home')}}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Total Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/total-deposits')}}">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Total Deposits</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/total-withdrawals')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Total Withdrawals</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/total-profits')}}">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Total Profit</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/send-mail')}}">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Send Mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
            <form id="sidebar-logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a style="flex-direction:column;height: 87px;"
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="{{asset('assets/dashboard/dashboard.html')}}"
        >
          <div style="transform:none;" class="sidebar-brand-icon rotate-n-15">
            <img class="V-logo" style="width:100px;" src="{{asset('assets/Images/VsionPakLogoVWhite.png')}}" alt="">
           
          </div>
          <div style="font-size:11px;" class="sidebar-brand-text mx-3"><span style="display:inline;color:#3f48cc;">Vision </span><span style="display:inline;">Pakistan</span></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('user.dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

      

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
        Pins
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('user.pinrequest')}}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pin Code Request</span>
            </a>
           
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('user.viewpin')}}">
                <i class="fas fa-fw fa-wrench"></i>
                <span>View Pin Codes</span>
            </a>
            
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Others
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('user.adduser')}}">
                <i class="fas fa-fw fa-folder"></i>
                <span>Join A User</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('user.treeview')}}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Team View</span></a
            >
          </li>

        <!-- Nav Item - Charts -->
  

        <!-- Nav Item - Tables -->
 
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        
       

    </ul>
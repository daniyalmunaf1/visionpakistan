 <!-- Sidebar -->
 <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled"
        id="accordionSidebar"
        >
        <!-- Sidebar - Brand -->
        <a style="flex-direction:column;height: 87px;"
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="{{asset('assets/adminPanel/admin.html')}}"
        >
          <div style="transform:none;" class="sidebar-brand-icon rotate-n-15">
            <img class="V-logo" style="width:100px;" src="{{asset('assets/Images/VsionPakLogoVWhite.png')}}" alt="">
           
          </div>
          <div style="font-size:11px;" class="sidebar-brand-text mx-3"><span style="display:inline;color:#3f48cc;">Vision </span><span style="display:inline;">Pakistan</span></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item  active ">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('usermanagement')}}">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Users Management</span></a
          >
        </li>
   
        <li class="nav-item ">
          <a class="nav-link"  href="{{route('pinrequest')}}">
            <i class="fas fa-fw fa-key"></i>
            <span>Pin Requests</span></a
          >
        </li>
        <li class="nav-item ">
        <a class="nav-link"  href="{{route('withdrawalrequest')}}">
            <i class="fas fa-fw fa-money"></i>
            <span>Withdrawal Requests</span></a
          >
        </li>
        <li class="nav-item ">
        <a class="nav-link"  href="{{route('teambonusrequest')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Team Bonus Requests</span></a
          >
        </li>
        <li class="nav-item ">
        <a class="nav-link"  href="{{route('rewardrequest')}}">
            <i class="fas fa-fw fa-trophy"></i>
            <span>Rewards Requests</span></a
          >
        </li>
 
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->
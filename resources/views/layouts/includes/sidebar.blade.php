<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">EMA Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
{{--    <hr class="sidebar-divider">--}}
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="far fa-address-book"></i>
            <span>Employee Management</span></a>
    </li>
    <!-- Divider -->
{{--    <hr class="sidebar-divider">--}}

    <!-- Heading -->
{{--    <div class="sidebar-heading">--}}
{{--        Interface--}}
{{--    </div>--}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystem"
           aria-expanded="true" aria-controls="collapseSystem">
            <i class="fas fa-tasks"></i>
            <span>System Management</span>
        </a>
        <div id="collapseSystem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">Country</a>
                <a class="collapse-item" href="cards.html">State</a>
                <a class="collapse-item" href="cards.html">City</a>
                <a class="collapse-item" href="cards.html">Department</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
           aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-tasks"></i>
            <span>User Management</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="buttons.html">User</a>
                <a class="collapse-item" href="cards.html">Role</a>
                <a class="collapse-item" href="cards.html">Permission</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
{{--
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
--}}

    <!-- Sidebar Message -->
{{--    <div class="sidebar-card d-none d-lg-flex">--}}
{{--        <img class="sidebar-card-illustration mb-2" src="{{asset('assets/admin')}}/img/undraw_rocket.svg" alt="...">--}}
{{--        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>--}}
{{--        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>--}}
{{--    </div>--}}

</ul>

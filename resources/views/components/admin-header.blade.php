<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="{{route('dashboard')}}">
                <b class="logo-icon ps-1">
                    <img style="width: 2.5em;" src="{{asset('assets/images/corvo-removebg-preview.png')}}" alt="homepage"
                        class="light-logo" width="25" />
                </b>
                <span class="logo-text ms-2">
                    <img style="width: 8em;" src="{{asset('assets/images/MONITOR5.png')}}" alt="homepage"
                        class="light-logo" />
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-menu font-24"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav float-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <img src="{{asset('assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('logout')}}">
                            <i class="fa fa-power-off me-1 ms-1"></i> 
                            Logout
                        </a>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
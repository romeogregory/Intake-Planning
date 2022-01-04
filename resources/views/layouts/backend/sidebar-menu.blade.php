<!-- LOGO -->
<div class="brand">
    <a href="dashboard/crm-index.html" class="logo">
        <span>
            <img src="../backend/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light mr-2">
        </span>
    </a>
</div>
<!--end logo-->
<div class="menu-content h-100" data-simplebar>
    <ul class="metismenu left-sidenav-menu">
        @hasrole('Administrator')
        <li class="menu-label mt-0">Administrator</li>
        <li>
            <a href="javascript: void(0);"> <i class="fa fa-paper-plane align-self-center menu-icon"></i><span>{{ __('menu.intakes') }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="/intakes"><i class="fa fa-list"></i>{{ __('menu.intakes_list') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="/intake/new"><i class="fa fa-plus-circle"></i>{{ __('menu.intakes_new') }}</a></li> 
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);"> <i class="fa fa-users align-self-center menu-icon"></i><span>{{ __('menu.users') }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="/users"><i class="fa fa-list"></i>{{ __('menu.users_list') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="/user/new"><i class="fa fa-plus-circle"></i>{{ __('menu.users_new') }}</a></li> 
            </ul>
        </li>
        <li>
            <a href="/calendar"><i class="fa fa-calendar-alt align-self-center menu-icon"></i><span>{{ __('menu.calendar') }}</span></a>
        </li>
        {{-- <hr class="hr-dashed hr-menu"> --}}
        @endhasrole
        @hasrole('Support')
        <li class="menu-label mt-0">Support</li>
        <li>
            <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
            </ul>
        </li>
        <li>
            <a href="widgets.html"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Widgets</span><span class="badge badge-soft-success menu-arrow">New</span></a>
        </li>
        @endhasrole
        @hasrole('Klant')
        <li class="menu-label mt-0">Klant</li>
        <li>
            <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
            </ul>
        </li>
        <li>
            <a href="widgets.html"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Widgets</span><span class="badge badge-soft-success menu-arrow">New</span></a>
        </li>
        @endhasrole
        @hasrole('Prospect')
        <li class="menu-label mt-0">Prospect</li>
        <li>
            <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="index.html"><i class="ti-control-record"></i>Analytics</a></li>
                <li class="nav-item"><a class="nav-link" href="sales-index.html"><i class="ti-control-record"></i>Sales</a></li> 
            </ul>
        </li>
        <li>
            <a href="widgets.html"><i data-feather="layers" class="align-self-center menu-icon"></i><span>Widgets</span><span class="badge badge-soft-success menu-arrow">New</span></a>
        </li>
        @endhasrole          
    </ul>

    {{-- <div class="update-msg text-center">
        <a href="javascript: void(0);" class="float-right close-btn text-muted" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
            <i class="mdi mdi-close"></i>
        </a>
        <h5 class="mt-3">Mannat Themes</h5>
        <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
        <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
    </div> --}}
</div>
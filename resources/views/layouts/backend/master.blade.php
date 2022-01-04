<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.backend.head')
</head>

<body class="dark-sidenav">
    <!-- Page Loader -->
    
    
    <div class="left-sidenav">
        @include('layouts.backend.sidebar-menu')
    </div>

    <div class="page-wrapper">
        <div class="topbar">
            @include('layouts.backend.header')
        </div>

        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">@yield('pagename')</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/dashboard">{{ config('app.name') }}</a></li>
                                        <li class="breadcrumb-item active">@yield('pagename')</li>
                                    </ol>
                                </div>
                                <!--end col-->
                                {{-- <div class="col-auto align-self-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                        <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                        <span class="" id="Select_date">Jan 11</span>
                                        <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i data-feather="download" class="align-self-center icon-xs"></i>
                                    </a>
                                </div> --}}
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <!-- end page title end breadcrumb -->
                @yield('content')
            </div>

            @include('layouts.backend.footer')
            <div>
            </div>

            @include('layouts.backend.footer-scripts')

</body>


</html>

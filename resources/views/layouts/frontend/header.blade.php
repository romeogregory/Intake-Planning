<header class="sticky-fixed-after transparent-header">
    <div id="sticky-placeholder"></div>
    <div id="navbar-wrap">
        <div class="navbar-layout1">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center position-relative">
                    <div class="col-lg-2 d-flex justify-content-start">
                        <div class="temp-logo text-center">
                            <a href="index.html" class="default-logo">
                                <img src="frontend/media/logo.png" alt="logo" class="img-fluid">
                            </a>
                            <a href="index.html" class="sticky-logo">
                                <img src="frontend/media/logo.png" alt="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex justify-content-end possition-static">
                        @include('layouts.frontend.horizontal-menu')
                    </div>
                    <div class="col-lg-3 d-flex justify-content-end">
                        <ul class="header-action-items">
                            <li class="single-item">
                                <a href="https://dash.serointech.com" class="header-search">
                                    <i class="fa fa-sign-in-alt tippy-info" title="{{ __('menu.crm') }}" data-tippy-animation="scale"
                                    data-tippy-inertia="true" data-tippy-duration="[600, 300]"
                                    data-tippy-arrow="true" data-tippy-placement="bottom"></i>
                                </a>
                            </li>
                            <li class="single-item mr-2">
                                <a href="https://dash.serointech.com/intake/request"
                                    class="item-btn btn-ghost btn-light">{{ __('menu.intake') }}</a>
                            </li>
                            {{-- <li class="single-item">
                                <button type="button" class="offcanvas-menu-btn menu-status-open">
                                    <span class="menu-btn-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </button>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
</header>

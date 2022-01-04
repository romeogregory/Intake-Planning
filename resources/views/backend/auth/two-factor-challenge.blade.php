<!DOCTYPE html>
<html lang="en">

<head>
    @section('css')

    @endsection

    @include('layouts.backend.head')
</head>

<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="/backend/assets/images/logo-sm-dark.png" height="50" alt="logo"
                                            class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">
                                        {{ config('app.name') }}</h4>
                                    <p class="text-muted  mb-0">{{ __('login.crm') }}</p>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav-border nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active font-weight-semibold" data-toggle="tab"
                                            href="#TwoFac_Tab" role="tab">{{ __('two-factor.twofactor') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-semibold" data-toggle="tab" href="#Recovery_Tab"
                                            role="tab">{{ __('two-factor.recovery') }}</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="TwoFac_Tab" role="tabpanel">
                                        <form class="form-horizontal auth-form needs-validation" method="POST"
                                            action="{{ url('/two-factor-challenge') }}" novalidate>
                                            @csrf
                                            <div class="form-group mb-2">
                                                <label for="code">{{ __('two-factor.token') }}</label>
                                                <div class="input-group">
                                                    <input type="text"
                                                        class="form-control @error('code') is-invalid state-invalid @enderror"
                                                        name="code" id="code" placeholder="{{ __('two-factor.token') }}"
                                                        required autofocus>
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <hr />
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit">{{ __('login.login') }}<i
                                                            class="fas fa-sign-in-alt ml-1"></i></button>
                                                    <a href="/logout"
                                                        class="btn btn-danger btn-block waves-effect waves-light">{{ __('auth.logout') }}<i
                                                            class="fas fa-sign-out-alt ml-1"></i></a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                    </div>
                                    <div class="tab-pane p-3" id="Recovery_Tab" role="tabpanel">
                                        <form class="form-horizontal auth-form needs-validation" method="POST"
                                            action="{{ url('/two-factor-challenge') }}" novalidate>
                                            @csrf
                                            <div class="form-group mb-2">
                                                <label for="recovery_code">{{ __('two-factor.code') }}</label>
                                                <div class="input-group">
                                                    <input type="text"
                                                        class="form-control @error('recovery_code') is-invalid state-invalid @enderror"
                                                        name="recovery_code" id="recovery_code"
                                                        placeholder="{{ __('two-factor.code') }}" required autofocus>
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <hr />
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit">{{ __('login.login') }}<i
                                                            class="fas fa-sign-in-alt ml-1"></i></button>
                                                    <a href="/logout"
                                                        class="btn btn-danger btn-block waves-effect waves-light">{{ __('auth.logout') }}<i
                                                            class="fas fa-sign-out-alt ml-1"></i></a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">{{ config('app.name') }} ©
                                    {{ now()->year }}</span>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End Log In page -->


    @section('js')
    <script src="{{URL::asset('backend/assets/plugins/parsleyjs/parsley.min.js')}}"></script>
    <script src="{{URL::asset('backend/assets/pages/jquery.validation.init.js')}}"></script>
    @endsection

    @include('layouts.backend.footer-scripts')





</body>

</html>

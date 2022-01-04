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
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">
                                        @if (session('status'))
                                        <div class="alert custom-alert custom-alert-primary icon-custom-alert alert-secondary-shadow fade show"
                                            role="alert">
                                            <i
                                                class="fa fa-info-circle alert-icon text-primary align-self-center font-30 mr-3"></i>
                                            <div class="alert-text my-1">
                                                <span>{{ session('status') }}</span>
                                            </div>
                                            <div class="alert-close">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true"><i
                                                            class="mdi mdi-close font-16"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                        @endif
                                        @if ($errors->any())
                                        <div class="alert custom-alert custom-alert-danger icon-custom-alert alert-secondary-shadow fade show"
                                            role="alert">
                                            <i
                                                class="fa fa-times alert-icon text-danger align-self-center font-30 mr-3"></i>
                                            <div class="alert-text my-1">
                                                <h5 class="mb-1 font-weight-bold mt-0">{{ __('errors.error_title') }}
                                                </h5>
                                                <span>{{ __('errors.error_1') }}</span>


                                            </div>
                                            <div class="alert-close">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true"><i
                                                            class="mdi mdi-close font-16"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                        @endif

                                        <form class="form-horizontal auth-form needs-validation" method="POST"
                                            action="{{ route('password.email') }}" novalidate>
                                            @csrf

                                            <div class="form-group mb-2">
                                                <label for="email">{{ __('fields.email') }}</label>
                                                <div class="input-group">
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid state-invalid @enderror"
                                                        name="email" id="email" placeholder="{{ __('fields.email') }}"
                                                        value="{{ old('email') }}" required autofocus>
                                                    @error('email') <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <hr />
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit">{{ __('forgot-password.reset') }} <i
                                                            class="fas fa-unlock-alt ml-1"></i></button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->

                                        <div class="m-3 text-center text-muted">
                                            <p class="mb-0">{!! __('forgot-password.text_1') !!}</p>
                                        </div>
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

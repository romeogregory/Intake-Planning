<!DOCTYPE html>
<html lang="en">

<head>
    @section('css')
    <link href="{{URL::asset('backend/assets/css/intlTelInput.min.css')}}" rel="stylesheet" type="text/css" />
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
                                    <p class="text-muted  mb-0">{{ __('intake.intake') }}</p>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="Intake_Tab" role="tabpanel">
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
                                            action="{{ route('intake.store') }}" novalidate>
                                            @csrf

                                            <div class="form-group mb-2">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="name">{{ __('fields.name') }}</label>
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control @error('name') is-invalid state-invalid @enderror"
                                                                name="name" id="name"
                                                                placeholder="{{ __('fields.name') }}"
                                                                value="{{ old('name') }}" required autofocus>
                                                            @error('name') <div class="invalid-feedback">{{$message}}
                                                            </div>
                                                            @enderror
                                                        </div>

                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <label for="lastname">{{ __('fields.lastname') }}</label>
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control @error('lastname') is-invalid state-invalid @enderror"
                                                                name="lastname" id="lastname"
                                                                placeholder="{{ __('fields.lastname') }}"
                                                                value="{{ old('lastname') }}" required>
                                                            @error('lastname') <div class="invalid-feedback">
                                                                {{$message}}</div>
                                                            @enderror
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div><!-- end row -->
                                            </div>
                                            <!--end form-group-->


                                            <div class="form-group mb-2">
                                                <label for="email_intake">{{ __('fields.email') }}</label>
                                                <div class="input-group">
                                                    <input type="email"
                                                        class="form-control @error('email_intake') is-invalid state-invalid @enderror"
                                                        name="email_intake" id="email_intake" placeholder="{{ __('fields.email') }}"
                                                        value="{{ old('email_intake') }}" required>
                                                    @error('email_intake') <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                
                                            </div>
                                            <!--end form-group-->


                                            <div class="form-group mb-2">
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <label for="text">{{ __('fields.phone_number') }}</label>
                                                        <div class="input-group">
                                                            <input type="number"
                                                                class="form-control @error('phone_number') is-invalid state-invalid @enderror"
                                                                id="phone_number" name="phone_number"
                                                                value="{{ old('phone_number') }}" required>
                                                            @error('phone_number')
                                                            {{$message}}
                                                            @enderror

                                                        </div>

                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <label
                                                            for="company_name">{{ __('fields.company_name') }}</label>
                                                        <div class="input-group">
                                                            <input type="text"
                                                                class="form-control @error('company_name') is-invalid state-invalid @enderror"
                                                                name="company_name" id="company_name"
                                                                placeholder="{{ __('fields.company_name') }}"
                                                                value="{{ old('company_name') }}" required>
                                                            @error('company_name') <div class="invalid-feedback">
                                                                {{$message}}</div>
                                                            @enderror
                                                        </div>


                                                    </div> <!-- end col -->
                                                </div><!-- end row -->

                                            </div>
                                            <!--end form-group-->

                                            <div class="form-group mb-2">
                                                <label for="explanation">{{ __('fields.explanation') }}</label>
                                                <i class="fa fa-info-circle mt-1 float-right tippy-info"
                                                    title="{!! __('intake.info') !!}" data-tippy-animation="scale"
                                                    data-tippy-inertia="true" data-tippy-duration="[600, 300]"
                                                    data-tippy-arrow="true" data-tippy-placement="right"></i>
                                                <div class="input-group">
                                                    <textarea
                                                        class="form-control @error('explanation') is-invalid state-invalid @enderror"
                                                        id="explanation" name="explanation" maxlength="500"
                                                        >{{ old('explanation') }}</textarea>
                                                    @error('explanation') <div class="invalid-feedback">{{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--end form-group-->


                                            <hr class="mt-4" />
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit">{{ __('intake.intake') }} <i
                                                            class="fas fa-paper-plane ml-1"></i></button>
                                                    <a href="https://serointech.com"
                                                        class="btn btn-secondary btn-block waves-effect waves-light">{{ __('intake.button_back') }}
                                                        <i class="fas fa-hand-point-left ml-1"></i></a>
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
    <script src="{{URL::asset('backend/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{URL::asset('backend/assets/plugins/parsleyjs/parsley.min.js')}}"></script>
    <script src="{{URL::asset('backend/assets/pages/jquery.validation.init.js')}}"></script>
    <script src="{{URL::asset('backend/assets/plugins/tippy/tippy.all.min.js')}}"></script>
    <script src="{{URL::asset('backend/assets/plugins/tinymce/tinymce.min.js')}}"></script>

    <script src="{{URL::asset('backend/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{URL::asset('backend/assets/js/intlTelInput.min.js')}}"></script>
       
    <script src="{{URL::asset('backend/assets/js/intlTelInput-jquery.min.js')}}"></script>


    <script>
        tippy('.tippy-info');

        $("#phone_number").intlTelInput({
            utilsScript: '/backend/assets/js/utils.js',
            initialCountry: "nl",
            nationalMode: true,
            hiddenInput: "full_number",
            separateDialCode: true,



        });

        if ($("#explanation").length > 0) {
        tinymce.init({
            selector: "textarea#explanation",
            force_p_newlines : false,
            theme: "modern",
            height: 150,
        });
    }

        $('[maxlength]').maxlength();

    </script>
    @endsection

    @include('layouts.backend.footer-scripts')





</body>

</html>

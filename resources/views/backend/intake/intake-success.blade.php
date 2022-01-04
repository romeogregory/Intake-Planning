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
                                    <p class="text-muted  mb-0">{{ __('intake.intake_success') }}</p>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="IntakeAangevraagd_Tab" role="tabpanel">

                                        <form class="form-horizontal auth-form needs-validation">


                                            <div class="alert custom-alert custom-alert-primary icon-custom-alert alert-secondary-shadow fade show"
                                                role="alert">
                                                <i
                                                    class="fa fa-info-circle alert-icon text-primary align-self-center font-30 mr-3"></i>
                                                <div class="alert-text my-1">
                                                    <span>{!! __('intake.intake_success_message') !!}</span>

                                                </div>
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
    <script>
        var timeleft = 5;
        var downloadTimer = setInterval(function () {
            if (timeleft <= 0) {
                clearInterval(downloadTimer);
                document.getElementById("countdown").innerHTML = "0";
            } else {
                document.getElementById("countdown").innerHTML = timeleft;
            }
            timeleft -= 1;
        }, 1000);

    </script>
    @endsection

    @include('layouts.backend.footer-scripts')





</body>

</html>

@extends('layouts.backend.master')
@section('pagename') {{ __('intake.intake_new') }} @endsection
@section('css')
<link href="{{URL::asset('backend/assets/css/intlTelInput.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<form class="form-horizontal auth-form needs-validation" method="POST" action="{{ route('intake.storeManual') }}"
    novalidate>
    @csrf
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('intake.intake_info') }}</h4>
                </div>
                <div class="card-body">

                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="name">{{ __('fields.name') }}</label>
                                <div class="input-group">
                                    <input type="text"
                                        class="form-control @error('name') is-invalid state-invalid @enderror"
                                        name="name" id="name" placeholder="{{ __('fields.name') }}"
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
                                        name="lastname" id="lastname" placeholder="{{ __('fields.lastname') }}"
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
                            <div class="col-md-3 mb-2">
                                <label for="text">{{ __('fields.phone_number') }}</label>
                                <div class="input-group">
                                    <input type="number"
                                        class="form-control @error('phone_number') is-invalid state-invalid @enderror"
                                        id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                        required>
                                    @error('phone_number')
                                    {{$message}}
                                    @enderror

                                </div>

                            </div><!-- end col -->
                            <div class="col-md-9">
                                <label for="company_name">{{ __('fields.company_name') }}</label>
                                <div class="input-group">
                                    <input type="text"
                                        class="form-control @error('company_name') is-invalid state-invalid @enderror"
                                        name="company_name" id="company_name"
                                        placeholder="{{ __('fields.company_name') }}" value="{{ old('company_name') }}"
                                        required>
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
                        <div class="input-group">
                            <textarea class="form-control @error('explanation') is-invalid state-invalid @enderror"
                                id="explanation" name="explanation" maxlength="500">{{ old('explanation') }}</textarea>
                            @error('explanation') <div class="invalid-feedback">{{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!--end form-group-->
                    <div class="form-group mt-4">
                        <button class="btn btn-primary float-right waves-effect waves-light"
                            type="submit">{{ __('intake.intake_manual') }} <i
                                class="fas fa-plus-circle ml-1"></i></button>
                    </div>
                    <!--end form-group-->
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('intake.intake_date_info') }}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="name">{{ __('fields.start_date') }}</label>
                                <div class="input-group">
                                    <input class="form-control @error('start') is-invalid state-invalid @enderror"
                                        type="datetime-local" name="start" value="{{ old('start') }}"
                                        id="example-datetime-local-input">
                                    @error('start') <div class="invalid-feedback">{{$message}}
                                    </div>
                                    @enderror
                                </div>

                            </div><!-- end col -->
                            <div class="col-md-6">
                                <label for="lastname">{{ __('fields.end_date') }}</label>
                                <div class="input-group">
                                    <input class="form-control @error('end') is-invalid state-invalid @enderror"
                                        type="datetime-local" name="end" value="{{ old('end') }}"
                                        id="example-datetime-local-input">
                                    @error('end') <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>

                            </div> <!-- end col -->
                        </div><!-- end row -->
                    </div>
                    <div class="form-group mb-2">
                        <label for="teams_link">{{ __('fields.teams') }}</label>
                        <div class="input-group">
                            <input type="text"
                                class="form-control @error('teams_link') is-invalid state-invalid @enderror"
                                name="teams_link" id="teams_link" placeholder="{{ __('fields.teams') }}"
                                value="{{ old('teams_link') }}" required>
                            @error('teams_link') <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>

                    </div>
                    <!--end form-group-->
                </div>
            </div> <!-- end col -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('fields.notes') }}</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <form method="post">
                        <textarea id="notes" name="notes">{{ old('notes') }}</textarea>
                    </form>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->
</form>
@endsection
@section('js')
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


    if ($("#notes").length > 0) {
        tinymce.init({
            selector: "textarea#notes",
            force_p_newlines : false,
            theme: "modern",
            height: 500,
        });
    }

    if ($("#explanation").length > 0) {
        tinymce.init({
            selector: "textarea#explanation",
            force_p_newlines : false,
            theme: "modern",
            height: 150,
        });
    }

</script>
@endsection

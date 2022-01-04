@extends('layouts.backend.master')
@section('pagename') {{ __('user.user_new') }} @endsection
@section('css')
<link href="{{URL::asset('backend/assets/css/intlTelInput.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('backend/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<form class="form-horizontal auth-form needs-validation" method="POST" action="{{ route('users.store') }}"
    novalidate>
    @csrf
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('user.user_info') }}</h4>
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
                        <label for="email">{{ __('fields.email') }}</label>
                        <div class="input-group">
                            <input type="email"
                                class="form-control @error('email') is-invalid state-invalid @enderror"
                                name="email" id="email" placeholder="{{ __('fields.email') }}"
                                value="{{ old('email') }}" required>
                            @error('email') <div class="invalid-feedback">{{$message}}</div>
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
                        <label>{{ __('fields.group') }}</label>
                        <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="role">
                            <option value="Administrator">Administrator</option>
                            <option value="Support">Support</option>
                            <option value="Klant">Klant</option>
                            <option value="Prospect">Prospect</option>
                        </select>

                    </div>
                    <!--end form-group-->

                    <div class="form-group mt-4">
                        <button class="btn btn-primary float-right waves-effect waves-light"
                            type="submit">{{ __('user.user_new') }} <i class="fas fa-plus-circle ml-1"></i></button>
                    </div>
                    <!--end form-group-->
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('fields.password') }}</h4>
                </div>
                <div class="card-body">
                    <div class="form-group mb-2">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="name">{{ __('fields.password') }}</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control @error('password') is-invalid state-invalid @enderror"
                                        name="password" id="password" data-toggle="password" placeholder="{{ __('fields.password') }}"
                                        required>
                                    @error('password') <div class="invalid-feedback">
                                        {{$message}}</div>
                                    @enderror
                                </div>

                            </div><!-- end col -->
                            <div class="col-md-6">
                                <label for="lastname">{{ __('fields.password_confirm') }}</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control @error('password_confirm') is-invalid state-invalid @enderror"
                                        name="password_confirmation" id="password_confirmation" data-toggle="password"
                                        placeholder="{{ __('fields.password_confirm') }}" required>
                                        @error('password_confirmation') <div class="invalid-feedback">
                                            {{$message}}</div>
                                        @enderror
                                </div>

                            </div> <!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end col -->
    </div> <!-- end row -->
</form>
@endsection
@section('js')
<script src="{{URL::asset('backend/assets/pages/jquery.validation.init.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/js/intlTelInput.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/js/intlTelInput-jquery.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/plugins/bootstrap-show-password/js/bootstrap-show-password.js')}}"></script>


<script>
    $("#phone_number").intlTelInput({
        utilsScript: '/backend/assets/js/utils.js',
        initialCountry: "nl",
        nationalMode: true,
        hiddenInput: "full_number",
        separateDialCode: true,
    });

    $(".select2").select2({
        width: '100%'
    });

    

</script>
@endsection

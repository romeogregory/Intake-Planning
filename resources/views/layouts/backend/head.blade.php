        <meta charset="utf-8" />
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- Page css -->
        @yield('css')

        <!-- App css -->
        <link href="{{URL::asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('backend/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        
        <link href="{{URL::asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{URL::asset('backend/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
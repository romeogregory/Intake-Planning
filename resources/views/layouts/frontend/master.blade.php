<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.head')
</head>

<body>
    <div id="preloader" class="tlp-preloader">
        <div class="animation-preloader">
            <div class="tlp-spinner"></div>
            <img src="frontend/media/preloader.png" alt="Preloader">
        </div>
    </div>
    <div id="wrapper" class="wrapper">
        <a href="#main_content" data-type="section-switch" class="return-to-top">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <div id="main_content">
            @include('layouts.frontend.header')


            @yield('content')



            @include('layouts.frontend.footer')

        </div>
    </div>

    @include('layouts.frontend.footer-scripts')

</body>

</html>
<!DOCTYPE html>
<html lang="en">

@include('layouts.frontend.head')

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


			<section class="error-page-wrap has-animation">
				<div class="container">
					<div class="error-page">
						<div class="item-figure">
							<div class="translate-zoomout-50 opacity-animation transition-200 transition-delay-100">
								<img src="frontend/media/illustration/404.png" alt="404">
							</div>
						</div>
						<div class="item-content">
							<div class="translate-bottom-75 opacity-animation transition-200 transition-delay-500">
								<h2 class="item-title">{{ __('errors.404_error') }}</h2>
							</div>
							<div class="translate-bottom-75 opacity-animation transition-200 transition-delay-1000">
								<p>{{ __('errors.404_error_1') }}</p>
							</div>
							<div class="translate-bottom-75 opacity-animation transition-200 transition-delay-1500">
								<a href="https://serointech.com" class="btn-fill btn-gradient">{{ __('errors.404_error_btn') }}</a>
							</div>
						</div>
					</div>
				</div>
			</section>


        </div>
    </div>

    @include('layouts.frontend.footer-scripts')

</body>

</html>

    @include('layouts.backend.footer-scripts')





</body>

</html>

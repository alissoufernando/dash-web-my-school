<!doctype html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		@include('livewire.dashboard.partials.style')
        @livewireStyles()
		<!-- Title -->
		<title>My School</title>
    </head>

    <body class="body-bg-f8faff">
		<!-- Start Preloader Area -->
		<div class="preloader">
            <img src="{{ asset('assets/site/images/ewaste.png') }}" alt="main-logo" width="100" height="100">
        </div>
		<!-- End Preloader Area -->

		{{ $slot }}

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        @livewireScripts()
        @include('livewire.dashboard.partials.script')
    </body>
</html>

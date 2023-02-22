
<!doctype html>
<html lang="fr">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Link Of CSS -->
        @include('livewire.dashboard.partials.style')
        @livewireStyles()
		<title>My School</title>
    </head>

    <body class="body-bg-f8faff">
		<!-- Start Preloader Area -->
		<div class="preloader">
            <img src="{{ asset('assets/dash/images/logo.png') }}" alt="main-logo" width="100" height="100">
        </div>
		<!-- End Preloader Area -->

		<!-- Start All Section Area -->
        <div class="all-section-area">
            <!-- Start Header Area -->
            @include('livewire.dashboard.partials.header')
            <!-- End Header Area -->

            <!-- Start Sidebar Area -->
            @include('livewire.dashboard.partials.sidebar')
            <!-- End Sidebar Area -->

            <!-- Start Main Content Area -->
            {{$slot}}
            <!-- End Main Content Area -->
        </div>
        <!-- End All Section Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>

		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
        @livewireScripts()
        @include('livewire.dashboard.partials.script')
    </body>
</html>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MACROBYTE</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{asset("css/cssquantum.css")}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<link rel="stylesheet" href="{{asset("dashboard/css/icons/dripicons.min.css")}}">
	<link rel="stylesheet" href="{{asset("dashboard/css/icons/line-awesome.min.css")}}">
	<link rel="stylesheet" href="{{asset("dashboard/css/layouts/horizontal/themes/theme-c.css")}}">
	<link rel="stylesheet" href="{{asset("dashboard/css/layouts/vertical/themes/theme-c.css")}}">
	

	<link rel="stylesheet" href="{{asset("dashboard/css/icons/material-design-iconic-font.min.css")}}">
	<script type="text/javascript" src="{{asset("dashboard/vendor/jquery/dist/jquery.min.js")}}"></script>
	@laravelPWA
	
	<style>
		.texto-artist {
	color: white; text-shadow: black 0.1em 0.1em 0.2em;
	font-weight: bold;
}
.texto-borde {
	color: white; text-shadow: black 0.1em 0.1em 0.2em;
	font-weight: normal;
}

	</style>

@livewireStyles
</head>

<body class="content-menu  ">
	@hasSection ('login')
	@yield('login')
	@endif
	@hasSection('content')
	<div id="">
		<!-- TOP TOOLBAR WRAPPER -->
		@include('partials.navmobile')
		@include('partials.nav')

		<!-- END TOP TOOLBAR WRAPPER -->
			<div class="content-wrapper">
				<!-- MENU SIDEBAR WRAPPER -->
				@include('partials.sidebar')
				<div class="content container-fluid">

					@include('partials.session-flash-status')
					@include('partials.validation-error')

				@yield('content')
				</div>
			
				<!-- SIDEBAR QUICK PANNEL WRAPPER -->
					<aside class="sidebar sidebar-right">
						    <div class="sidebar-content">
								<div class="tab-panel m-b-30" id="sidebar-tabs">
																				
							   </div>
						</div>
					</aside>
			</div>
		</div>
		@endif
		@hasSection ('content-music')
		
		<div id="">
			<!-- TOP TOOLBAR WRAPPER -->
			@include('partials.navmobile')
			@include('partials.nav')
	
			<!-- END TOP TOOLBAR WRAPPER -->
				<div class="content-wrapper">
					<!-- MENU SIDEBAR WRAPPER -->
					@include('partials.sidebar')
					<div class="content" data-layout="tabbed">
						
						@yield('content-music')
					</div>
				
					<!-- SIDEBAR QUICK PANNEL WRAPPER -->
						<aside class="sidebar sidebar-right">
								<div class="sidebar-content">
									<div class="tab-panel m-b-30" id="sidebar-tabs">
																					
								   </div>
							</div>
						</aside>
				</div>
			</div>
			
		
	@endif

	@livewireScripts
		<script src="{{asset('dashboard/vendor/modernizr/modernizr.custom.js')}}"></script>
	<script src="{{asset('dashboard/vendor/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{asset('dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('dashboard/vendor/js-storage/js.storage.js')}}"></script>
	<script src="{{asset('dashboard/vendor/js-cookie/src/js.cookie.js')}}"></script>
	<script src="{{asset('dashboard/vendor/pace/pace.js')}}"></script>
	<script src="{{asset('dashboard/vendor/metismenu/dist/metisMenu.js')}}"></script>
	<script src="{{asset('dashboard/vendor/switchery-npm/index.js')}}"></script>
	<script src="{{asset('dashboard/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('dashboard/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
	<script src="{{asset('dashboard/vendor/jquery-validation/additional-methods.min.js')}}"></script>
	<script src="{{asset('dashboard/vendor/jquery-steps/jquery.steps.min.js')}}"></script>
	<script src="{{asset('dashboard/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
	<script src="{{asset('dashboard/js/global/app.js')}}"></script>
	<script src="{{asset('dashboard/js/components/vertical-wizard-init.js')}}"></script>
	<script src="{{asset('dashboard/vendor/noUiSlider/nouislider.min.js')}}"></script>
	<script src="{{asset('dashboard/vendor/rateYo/jquery.rateyo.min.js')}}"></script>
	<script src="{{asset('dashboard/vendor/wNumb/wNumb.js')}}"></script>
	<script src="{{asset('dashboard/js/components/ecom-dashboard-slider-init.js')}}"></script>
	</body>
</html>

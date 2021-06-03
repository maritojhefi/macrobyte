
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="{{asset('april/distri/images/logo.png')}}" />

	<title>Macrobyte</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500">
	<link rel="stylesheet" href="{{asset('dashboard/css/vendor/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/vendor/metismenu/dist/metisMenu.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/vendor/switchery-npm/index.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/css/icons/line-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/css/icons/dripicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/css/icons/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/css/common/main.bundle.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/css/layouts/vertical/core/main.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/css/layouts/vertical/menu-type/content.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/css/layouts/vertical/themes/theme-e.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="{{asset("dashboard/vendor/jquery/dist/jquery.min.js")}}"></script>



</head>
<style>


	#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #333; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}

}

.text-small {
  font-size: 12px;
  font-weight: bold;
}

a.disabled {
  pointer-events: none;
  cursor: default;
}

</style>

<body class="content-menu ">
	<!-- CONTENT WRAPPER -->
	<div id="">
		<!-- TOP TOOLBAR WRAPPER -->
	
		<!-- END TOP TOOLBAR WRAPPER -->
			<div class="content-wrapper">
				<!-- MENU SIDEBAR WRAPPER -->
			
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


	</body>
</html>
<!DOCTYPE html>

<!--
Theme: Keen - The Ultimate Bootstrap Admin Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: You must have a valid license purchased only from https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/ in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>My Assist</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="<?php base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?php base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php base_url() ?>assets/media/logos/favicon.ico" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		<?php echo view('partials/_page-loader.php'); ?>

		<?php echo view('layout.php'); ?>

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#385aeb",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#800000",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php base_url() ?>assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="<?php base_url() ?>assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="<?php base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?php base_url() ?>assets/js/pages/dashboard.js" type="text/javascript"></script>

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?php base_url() ?>assets/js/pages/components/charts/flotcharts.js" type="text/javascript"></script>

		<!--begin::Page Vendors(used by this page) -->
		<script src="<?php base_url() ?>assets/plugins/custom/flot/flot.bundle.js" type="text/javascript"></script>
		

		<!-- SERTIFIKAT KEEN DATATABLE -->
		 <!--begin::Page Scripts(used by this page) -->

		 <script src="<?php base_url() ?>assets/js/components/data-lahan.js" type="text/javascript"></script>
		 <script src="<?php base_url() ?>assets/js/components/data-sertifikat.js" type="text/javascript"></script>
		 <script src="<?php base_url() ?>assets/js/components/data-bangunan.js" type="text/javascript"></script>

		 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
		 <script type="text/javascript" src="<?php base_url() ?>assets/js/pages/components/maps/map.js"></script>
		<!--end::Page Scripts -->

	</body>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<!-- end::Body -->
</html>
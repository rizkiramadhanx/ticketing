<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../../" />
	<title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Page bg image-->
		<style>
			body {
				background-image: url('assets/media/auth/bg10.jpeg');
			}

			[data-bs-theme="dark"] body {
				background-image: url('assets/media/auth/bg10-dark.jpeg');
			}
		</style>
		<!--end::Page bg image-->
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<div class="d-flex flex-lg-row-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
					<!--begin::Image-->
					<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="assets/media/auth/agency.png" alt="" />
					<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="assets/media/auth/agency-dark.png" alt="" />
					<!--end::Image-->
					<!--begin::Title-->
					<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
					<!--end::Title-->
					<!--begin::Text-->
					<div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
						<a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed
						<br />and provides some background information about
						<a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
						<br />work following this is a transcript of the interview.
					</div>
					<!--end::Text-->
				</div>
				<!--end::Content-->
			</div>
			<!--begin::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
				<!--begin::Wrapper-->
				<div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
							<!--begin::Form-->
							<form class="form w-100" method="POST" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo42/dist/index.html" action="{{ route('user.login') }}">
								<!--begin::Heading-->
								@csrf
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->
								@if (session('success'))
								<div class="alert alert-success">
									{{ session('success') }}
								</div>
								@endif
								@if (session('error'))
								<div class="alert alert-danger">
									{{ session('error') }}
								</div>
								@endif
								<!--begin::Alert-->
								@if ($errors->any())
								<div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mb-10">
									<!--begin::Icon-->
									<i class="ki-duotone ki-notification-bing fs-2hx text-danger me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
									<!--end::Icon-->

									<!--begin::Wrapper-->
									<div class="d-flex flex-column pe-0 pe-sm-10">
										<!--begin::Title-->
										<h4 class="fw-semibold">Error</h4>
										<!--end::Title-->

										<!--begin::Content-->
										@foreach ($errors->all() as $error)
										<div>{{ $error }}</div>
										@endforeach
										<!--end::Content-->
									</div>
									<!--end::Wrapper-->

									<!--begin::Close-->
									<button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
										<i class="ki-duotone ki-cross fs-1 text-danger"><span class="path1"></span><span class="path2"></span></i>
									</button>
									<!--end::Close-->
								</div>
								@endif

								<!--end::Alert-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" name="email" placeholder="Email" value="{{ old('email') }}" name="email" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<input type="password" name="password" placeholder="Password"  name="password" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="../../demo42/dist/authentication/layouts/overlay/reset-password.html" class="link-primary">Forgot Password ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Sign In</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<!-- <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
									<a class="link-primary">Sign up</a>
								</div> -->
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="assets/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
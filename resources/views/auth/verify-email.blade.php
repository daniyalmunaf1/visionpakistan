<!doctype html>
<html lang="en">
  <head>
  	<title>Vision Pakistan - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon"  sizes="512x512" href="assets/favicon/android-chrome-512x512.png">
	<link rel="stylesheet" href="assets/css/login.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/bootstrap/style.bundle.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap/_media.css">
    <link rel="stylesheet" href="assets/css/bootstrap/mixins/_border-radius.css">
    <link rel="stylesheet" href="assets/css/bootstrap/mixins/_screen-reader.css">
    <link rel="stylesheet" href="assets/css/bootstrap/mixins/_visibility.css">
    <link rel="stylesheet" href="assets/css/bootstrap/utilities/_stretched-link.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
				  <form method="POST" class="form w-100" action="{{ route('verification.send') }}">

<!--begin::Heading-->
<div class="text-center mb-10">
	<!--begin::Title-->
	<h1 class="text-dark fw-bolder mb-3">Verify Your Email...</h1>
	<!--end::Title-->
	<!--begin::Link-->
	<div class="text-gray-500 fw-semibold fs-6">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</div>
	<!--end::Link-->
	@if (session('status') == 'verification-link-sent')
		<div class="mb-4 font-medium mt-3 text-sm text-green-600">
			<p class="alert alert-success">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</p>
		</div>
	@endif
</div>


<!--end::Actions-->
<!--begin::Actions-->
<div class="d-flex flex-wrap justify-content-center pb-lg-0">
@csrf
	<button type="submit" id="" class="btn btn-primary me-4">
		<!--begin::Indicator label-->
		<span class="indicator-label">Resend Verification Email</span>
		
		<!--end::Indicator progress-->
	</button>
</form>
<form method="POST" action="{{ route('logout') }}">
                                @csrf
								    <button class="btn btn-secondary">Logout</button>
                            </form>
							<!--end::Form-->
	        </div>
				</div>
			</div>
		</div>
	</section>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/index.js"></script>
	<script src="assets/js/custom/authentication/sign-in/general.js"></script>

	</body>
</html>



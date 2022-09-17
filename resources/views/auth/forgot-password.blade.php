
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
	<a href="{{ route('login') }}"><img src="assets/Images/svg/arrow-left.svg" alt=""></a>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
				  <form  method="POST" action="{{ route('password.email') }}" class="form w-100" novalidate="novalidate" id="kt_password_reset_form"  >
                	            @csrf
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-500 fw-semibold fs-6">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</div>
									<!--end::Link-->
                                    
                                    <!-- Session Status -->
                                    @if(Session::has('status'))
                                    <p class="alert alert-success">{{ Session::get('status') }}</p>
                                    @endif
                                    <!-- Validation Errors -->
                                    @if(Session::has('errors'))
                                    <p class="alert alert-danger">    {{ implode('', $errors->all(':message')) }}
													</p>
                                    @endif
								</div>
								<!--begin::Heading-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
                                    <input id="email" placeholder="Email" class="form-control bg-transparent" type="email" name="email"  required autofocus />

									<!--end::Email-->
								</div>
								<!--begin::Actions-->
								<div class="d-flex flex-wrap justify-content-center pb-lg-0">
									<button type="submit" id="" class="btn btn-primary me-4">
										<!--begin::Indicator label-->
										<span class="indicator-label">Email Password Reset Link</span>
										
									</button>
									<a href="{{ route('login') }}" class="btn btn-light">Cancel</a>
								</div>
								<!--end::Actions-->
							</form>
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



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
	<a href="{{route('index')}}"><img src="assets/Images/svg/arrow-left.svg" alt=""></a>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Here</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Login</h3>
				  <form  method="POST" action="{{ route('login') }}" class="form w-100" novalidate="novalidate"  >
								@csrf
                           	 	<!--begin::Heading-->
								
								<!--begin::Heading-->
								<!-- Session Status -->
                                    @if(Session::has('status'))
                                    <p class="alert alert-success">{{ Session::get('status') }}</p>
                                    @endif
                                    <!-- Validation Errors -->
                                    @if(Session::has('errors'))
                                    <p class="alert alert-danger">    {{ implode('', $errors->all(':message')) }}
														</p>
                                    @endif
								<!--begin::Input group=-->
								<div class=" mb-8">
									<!--begin::Email-->
                                    <input id="email" placeholder="Email/Phone Number" value="{{ old('email') }}" class="form-control bg-transparent" type="text" name="email" required autofocus />

									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
                                    <input id="password" placeholder="Password" class="form-control bg-transparent" type="password" name="password" required autocomplete="current-password" />                                    
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
                                    @if (Route::has('password.request'))
                                        <a class="link-primary" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Sign In</span>
										<!--end::Indicator label-->
										
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								
								<!--end::Sign up-->
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



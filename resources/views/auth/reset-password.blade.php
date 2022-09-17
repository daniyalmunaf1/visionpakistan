
<!doctype html>
<html lang="en">
  <head>
  	<title>Vision Pakistan - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
	<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap/style.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/_media.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/mixins/_border-radius.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/mixins/_screen-reader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/mixins/_visibility.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/utilities/_stretched-link.css')}}">

	</head>
	<body>
	<a href="{{ route('login') }}"><img src="{{asset('assets/Images/svg/arrow-left.svg')}}" alt=""></a>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Setup New Password</h3>
				  <form class="form w-100" method="POST" action="{{ route('password.update') }}" novalidate="novalidate" id="kt_new_password_form" >
                           	 @csrf
                            	<input type="hidden" name="token" value="{{ $request->route('token') }}">

								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-500 fw-semibold fs-6">Have you already reset the password ?
									<a href="{{ route('login')}}" class="link-primary fw-bold">Sign in</a></div>
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
								<!--begin::Input group-->
                                <!--begin::Email-->
                                <div class="fv-row mb-8">

                                    <div class="position-relative mb-3">

                                    <input id="email" placeholder="Email" class="form-control bg-transparent" type="email" name="email" value="{{$request->email}}" required autofocus />
                                    </div>
                                </div>
									<!--end::Email-->
								<div class="fv-row mb-8" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
                                   
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
                                            <input id="password" class="form-control bg-transparent" placeholder="Password" type="password" name="password" required />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group=-->
								<!--end::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Repeat Password-->
                                    <input id="password_confirmation" placeholder="Repeat Password" class="form-control bg-transparent" type="password" name="password_confirmation" required />
									<!--end::Repeat Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<label class="form-check form-check-inline">
                                        <input class="form-check-input"  type="checkbox" name="TermsAndConditions" id="TermsAndConditions" value="1" required/>

										<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
										<a href="#" class="ms-1 link-primary">Terms And Conditions</a></span>
									</label>
								</div>
								<!--end::Input group=-->
								<!--begin::Action-->
								<div class="d-grid mb-10">
									<button type="Submit" id="" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Submit</span>
										
									</button>
								</div>
								<!--end::Action-->
							</form>		
	        </div>
				</div>
			</div>
		</div>
	</section>
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
	<script src="{{asset('assets/js/index.js')}}"></script>
	<script src="{{asset('assets/js/custom/authentication/sign-in/general.js')}}"></script>

	</body>
</html>



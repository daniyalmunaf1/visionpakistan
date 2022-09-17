<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Custom fonts for this template-->
  <link href="{{asset('assets/dashboard/vendor/fontawesome-free/css/all.css')}}" rel="stylesheet" type="text/css">
  <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('assets/dashboard/css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{asset('assets/dashboard/css/sb-admin-2.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/dist/pincode-input.min.css')}}" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="{{asset('assets/dist/pincode-input.min.js')}}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pincode-input@0.4.2/dist/pincode-input.min.css" /><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pincode-input@0.4.2/dist/pincode-input.min.css" /><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pincode-input@0.4.2/dist/pincode-input.min.css" /><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pincode-input@0.4.2/dist/pincode-input.min.css" />
<script src="https://cdn.jsdelivr.net/npm/pincode-input@0.4.2/dist/pincode-input.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/dashboard/joinAuser/joinuser.css')}}">
<link rel="stylesheet" href="{{asset('assets/dist/pincode-input.min.css')}}" />
<link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
    <title>Vision Pakistan - Join</title>
    <style>
        .pincode-input{
        margin: 5px;
        }
    </style>
</head>
<body id="page-top">
    <div id="wrapper">
    @include('user.sidebar')


     <!-- Content Wrapper -->
     <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('user.navbar')
            
            <div class="registration-form">
            
                <form method="POST" action="{{ route('register') }}" class="form w-100" novalidate="novalidate" id="" >
                    @csrf
                    @if(Session::has('errors'))
            <p class="alert alert-danger">    {{ implode('', $errors->all(':message')) }}
            </p>
            @endif
            @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('issue'))
            <div class="alert alert-danger">{{ Session::get('issue') }}</div>
            @endif
                    <div class="form-icon">
                        <span><i class="icon icon-user"></i></span>
                    </div>
                    @can('silver')
                    <label for="pincode-input">Enter 6 Digits PIN</label>
                    <input type="number" class="form-control item" value="{{ old('pin') }}" name="pin" placeholder="Enter 6 Digits Pin" maxlength="6">
                    @endcan('silver')
                    @can('gold')
                    <label for="pincode-input">Enter 8 Digits PIN</label>
                    <input type="number" class="form-control item" value="{{ old('pin') }}" name="pin" placeholder="Enter 8 Digits Pin" maxlength="8">
                    @endcan('gold')
                    <!-- <div id="pincode-input" name="pin" class="form-group container"></div> -->
                    <div class="form-group">
                        <label for="username">Enter Name of User</label>
                        <input type="text" class="form-control item" value="{{ old('name') }}" id="name" name="name" placeholder="Enter Name Of New User">
                    </div>
                    <div class="form-group">
                        <label for="email1">Enter Email of User</label>
                        <input type="email" class="form-control item" value="{{ old('email') }}" id="eamil1" name="email" placeholder="Enter Email of new User">
                    </div>
                    <div class="form-group">
                        <label for="accnum">Enter Account Number</label>
                        <input type="number" class="form-control item" value="{{ old('accountnumber') }}" id="accnum" name="accountnumber" placeholder="Account Number of new User">
                    </div>
                    <div class="form-group">
                        <label for="accname">Bank Name</label>
                        <input type="text" class="form-control item" id="accname" value="{{ old('bankname') }}" name="bankname" placeholder="Bank Name of new User">
                    </div>
                    <div class="form-group">
                        <label for="accname">Account Holder Name</label>
                        <input type="text" class="form-control item" id="accname" value="{{ old('accountname') }}" name="accountname" placeholder="Account Holder Name of new User">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input id="password" class="form-control item" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
                    </div>
                    <div class="form-group">
                        <label for="pass">Confirm Password</label>
                        <input id="password_confirmation" placeholder="Repeat Password" class="form-control bg-transparent" type="password" name="password_confirmation" required />
                    </div>
                    <hr>
                    <div  class="form-group">
                        <h1 style="text-align: center;">Your Support</h1>
                        <label for="email2">Under User Email</label>
                        <input type="email" class="form-control item" id="email2" name="ref_email" value="{{Auth::user()->email}}" placeholder="Email of user which is joining a new user">
                    </div>
                 
                    <div class="form-group">
                        <button type="Submit" class="btn btn-block create-account">Create Account</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>

<script>$(document).ready(function(){
    $('#birth-date').mask('00/00/0000');
    $('#phone-number').mask('0000-0000');
   })</script>
   <script>
    new PincodeInput('#pincode-input', {
      count: 6,
      secure: false,
      previewDuration: 200,
      onInput: (value) => {
        console.log(value)
      }
    })
    </script>
       <!-- Bootstrap core JavaScript-->
       <script src="{{asset('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
       <script src="{{asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   
       <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
       <script src="{{asset('assets/js/script.js')}}"></script>

       <!-- Core plugin JavaScript-->
       <script src="{{asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
   
       <!-- Custom scripts for all pages-->
       <script src="{{asset('assets/dashboard/js/sb-admin-2.min.js')}}"></script>
   
       <!-- Page level plugins -->
       <script src="{{asset('assets/dashboard/vendor/chart.js/Chart.min.js')}}"></script>
   
       <!-- Page level custom scripts -->
       <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script>
       <script src="{{asset('assets/js/demo/chart-pie-demo.js')}}"></script>
</body>
</html>
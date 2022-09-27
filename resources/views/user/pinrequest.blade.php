<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vision Pakistan is a network Marketing Website, Here you can earn unlimited Money by just developing a network">
  <meta name="keywords" content="Network Marketing,Online Earnig,Earning,Marketing,Work From Home,Make Your Network,Invite,Invite Friends">
  <meta name="author" content="Vision Pakistan">

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
<link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.css')}}">
    <title>Vision Pakistan - Pin Code Request</title>
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
                <form method="POST" action="{{route('user.pinrequeststore')}}">
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
                   
                    <div class="form-group">
                        <label for="reciever-acc">Company Account Number#</label>
                        <input type="number" name="company_acc_number" value="{{$bank->number}}" class="form-control item" id="reciever-acc" placeholder="Enter Account# of Company Account">
                    </div>
                    <div class="form-group">
                        <label for="sender-acc">Sender Account Number#</label>
                        <input type="number" name="sender_acc_number" value="{{ old('trx_id') }}" class="form-control item" id="sender-acc" placeholder="Enter Account# of Sender Account">
                    </div>
                    <div class="form-group">
                        <label for="trxid">Trx ID</label>
                        <input type="text" value="{{ old('trx_id') }}" name="trx_id" class="form-control item" id="trxid" placeholder="Enter Transaction Id">
                    </div>
                    <div class="form-group">
                        <label for="ammount">Amount</label>
                        <input type="number" name="amount" value="{{ old('amount') }}" class="form-control item" id="ammount" placeholder="Enter Sending amount">
                    </div>
                    <div class="form-group">
                        <label for="ammount">Number Of Pins</label>
                        <input type="number" name="number_of_pins" value="{{ old('number_of_pins') }}" class="form-control item" id="ammount" placeholder="Enter Number Of Pins You Want">
                    </div>
                 
                    <div class="form-group">
                        <button type="submit" class="btn btn-block create-account">Pin Request</button>
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
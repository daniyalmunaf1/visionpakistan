<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Vision Pakistan is a network Marketing Website, Here you can earn unlimited Money by just developing a network">
  <meta name="keywords" content="Network Marketing,Online Earnig,Earning,Marketing,Work From Home,Make Your Network,Invite,Invite Friends">
  <meta name="author" content="Vision Pakistan">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/_media.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/mixins/_border-radius.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/mixins/_screen-reader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/mixins/_visibility.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap/utilities/_stretched-link.css')}}">
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style>
   
      input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0;
}

/* Firefox */
input[type=number] {
-moz-appearance: textfield;
}
 .loginbtn{
  outline: none;
  border: none;
  padding: 5px;
  padding-left: 25px;
  padding-right: 25px;
  border-radius: 10px;
transition: 0.5s all;
background-color: rgb(53 136 246);
  color: white;
  
}
.loginbtn:hover {
  background-color: white;
  color:rgb(53 136 246);
border: 1px solid;
}

  </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">

    <title>Vision Pakistan - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
      href="{{asset('assets/dashboard/vendor/fontawesome-free/css/all.min.css')}}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/dashboard/css/sb-admin-2.css')}}" rel="stylesheet" />
    <style>
   
    </style>
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
     @include('admin.sidebar')

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          @include('admin.navbar')

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            @if (Session::has('message'))
            <div class="text-center alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
            
              <h1 class="h3 mb-0 text-gray-800">Hi Admin</h1>
            </div>

            <!-- Content Row -->
            <div class="row"> 
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$TotalusersCount}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
              <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Silver Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$SilverusersCount}}</div>
                                        </div>
                                        <div class="col-auto">
                                          <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-success text-uppercase mb-1"
                        >
                          Gold Users
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{$GoldusersCount}}
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-info text-uppercase mb-1"
                        >
                          Pending Pin Requests
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div
                              class="h5 mb-0 mr-3 font-weight-bold text-gray-800"
                            >
                              {{$PinRequestCount}}
                            </div>
                          </div>
                          <div class="col"></div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-key fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-danger text-uppercase mb-1"
                        >
                        Withdrawal Requests
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{$WithdrawalRequestCount}}
                        </div>
                      </div>
                      <div class="col-auto">
                        <i
                          class="fas fa-clipboard-list fa-2x text-gray-300"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-danger text-uppercase mb-1"
                        >
                        Team Bouns Requests
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{$BonusRequestCount}}
                        </div>
                      </div>
                      <div class="col-auto">
                        <i
                          class="fas fa-users fa-2x text-gray-300"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div
                          class="text-xs font-weight-bold text-danger text-uppercase mb-1"
                        >
                        Reward Requests
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{$RewardRequestCount}}
                        </div>
                      </div>
                      <div class="col-auto">
                        <i
                          class="fas fa-clipboard-list fa-2x text-gray-300"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
       
            <hr>
            <style>
              .accountNumber{
                display: flex;
                flex-direction: column;
                text-align: center;
                padding: 20px;
                margin-top: 25px;
              }
              .account-details{
                display: flex;
                flex-direction: column;
              }
              .bank-acc{
                display: flex;
                align-items: center;
                justify-content: space-evenly;
              }
            </style>
            <h3 style="text-align: center;color:#535353;">Current Bank Account</h3>
            <div class="accountNumber"style="background:white;">

              <div class="date"></div>
              <hr>
              <div  class="account-details">
                <div class="bank-acc ">
                  <h5 class="text-gray-700">Back Account <i class="fa fa-hand-o-right"></i> </h5>
                  <p>{{$bank->bankname}}</p>
                </div>
                <div class="bank-acc ">
                  <h5 class="text-gray-700">Account Number <i class="fa fa-hand-o-right"></i> </h5>
                  <p>{{$bank->number}}</p>
                </div>
                <div class="bank-acc ">
                  <h5 class="text-gray-700">Account Name <i class="fa fa-hand-o-right"></i></h5>
                  <p>{{$bank->accountname}}</p>
                </div>
                           </div>

            </div>
       
           
  </div>
    
  <div class="container " style="margin-top:15px ;">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section text-gray-700">Change Bank Account</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
          <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-dollar"></span>
          </div>
          <h3 class="text-center mb-4">Details Of Bank Account</h3>
        <form method="POST" action="{{route('updatebankdetails')}}" class="login-form">
          @csrf
              <div class="form-group">
                  <input type="text" name="bankname" value="{{$bank->bankname}}" class="form-control rounded-left" placeholder="Bank Account" required>
              </div>
        <div class="form-group d-flex">
          <input type="number"name="number" value="{{$bank->number}}" class="form-control rounded-left" placeholder="Account Number" required>
        </div>
        <div class="form-group d-flex">
          <input type="text" name="accountname" value="{{$bank->accountname}}" class="form-control rounded-left" placeholder="Account Name" required>
        </div>
        <div class="form-group">
        <!-- <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button> -->
        <button type="submit" class="loginbtn">Submit</button>

        </div>
      </form>
    </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
<h3 class="text-gray-700 text-center">Accounts Deactivation Limit</h3>
<div class="toggle-deac d-flex"style="padding: 20px;margin-top:30px; justify-content:space-evenly;">
  <h4 class="text-gray-700">   
    Accounts Deactivation
  </h4>
  <div class="right-sect">
    @if($status=='enabled')
    <a class="btn btn-primary">Enabled</a>
    <a href="{{route('deactivatestatus')}}" style="color:white;" class="btn btn-danger">Disable</a>
    @else
    <a href="{{route('deactivatestatus')}}" class="btn btn-primary">Enable</a>
    <a style="color:white;" class="btn btn-danger">Disabled</a>
    @endif
  </div>
</div>
<div class="bg-white" style="padding: 20px;margin-top:30px ;"> <div class="bank-acc">
  <h5 class="text-gray-700">Current Deactivation Time <i class="fa fa-hand-o-right"></i></h5>
  <p style="font-size: 20px;">{{$days}} days</p>
</div></div>
<div class="change-acc-limit" style="margin-top:30px ;">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-5">
        <div class="login-wrap p-4 p-md-5">
      <div class="icon d-flex align-items-center justify-content-center">
          <span class="fa fa-clock"></span>
      </div>
      <h3 class="text-center mb-4">Change Accounts Deactivation Limit </h3>
      <form method="POST" action="{{route('updatedays')}}" class="login-form">
          @csrf  
              <h5 class="text-gray-700">Enter After How Many Days User Account will deactivate if he dosen't work</h5>
    <div class="form-group d-flex">
      <input type="number" id="deac-limit" name="days" value="{{$days}}" class="form-control rounded-left" placeholder="Enter Deactivation Days" required>
    </div>

    <div class="form-group">
    <!-- <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button> -->
    <button type="submit" class="loginbtn">Submit</button>

    </div>
  </form>
</div>
    </div>
</div>

</div>
</div>
</div>
          </div>
        </div>
      </div>
      
    </div>
    <script>
      const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];
      const days = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
      ];
      const dateClass = document.querySelector(".date")
      let date = new Date();
      let todayDate=`${days[date.getDay()]}, ${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;
dateClass.innerHTML=todayDate;


      </script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/dashboard/js/sb-admin-2.min.js')}}"></script>

  </body>
</html>

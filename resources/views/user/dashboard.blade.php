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
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
    <meta name="description" content="" />
    <meta name="author" content="" />
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
      <!-- Sidebar -->
      @include('user.sidebar')

      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          @include('user.navbar')

          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Hello {{Auth::user()->name}}</h1>
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
                                                Your Level</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{Auth::user()->level}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
                                                Current Income</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{Auth::user()->current_income}}</div>
                                        </div>
                                        <div class="col-auto">
                                          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                          Reward Income
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{Auth::user()->reward_income}}
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                          Total Income
                        </div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div
                              class="h5 mb-0 mr-3 font-weight-bold text-gray-800"
                            >
                            {{Auth::user()->total_income}}
                            </div>
                          </div>
                          <div class="col"></div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                        Team Bouns
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{Auth::user()->team_bonus}}
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
                          Available Pins
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          {{$pins}}
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
            <h1 style="text-align: center;color:#535353;">Company Bank Account</h1>
            <div class="accountNumber"style="background:white;">

              <div class="date"></div>
              <hr>
              <div  class="account-details">
                <div class="bank-acc">
                  <h5>Back Account <i class="fa fa-hand-o-right"></i> </h5>
                  <p style="max-width: 124px;">{{$bank->bankname}}</p>
                </div>
                <div class="bank-acc">
                  <h5>Account Number <i class="fa fa-hand-o-right"></i> </h5>
                  <p style="max-width: 124px;">{{$bank->number}}</p>
                </div>
                <div class="bank-acc">
                  <h5>Account Name <i class="fa fa-hand-o-right"></i></h5>
                  <p style="max-width: 124px;">{{$bank->accountname}}</p>
                </div>
                           </div>

            </div>
            <section id="paymentplans" class="pricing-section section3">
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center title-ex1">
                      <h2>Our Payment Plans</h2>
                      <p>
                        Inventore cillum soluta inceptos eos platea, soluta
                        class laoreet repellendus imperdiet optio.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Pricing Table starts -->
                @can('silver')
                <div class="row">
                  <div class="col-md-4">
                    <div class="price-card featured">
                      <h2>Silver</h2>
                      <p>Most popular choice</p>
                      <p class="price"><span>1000</span></p>
                      <ul class="pricing-offers">
                        <li>6 Digit Pin</li>
                        <li>1050rs Reward for one Score</li>
                        <li>less rewards</li>
                      </ul>
                      <a href="{{route('user.plan')}}" class="login-btn">Buy Now</a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="price-card">
                      <h2>Gold</h2>
                      <p>Recomended</p>
                      <p class="price"><span>5000</span></p>
                      <ul class="pricing-offers">
                        <li>8 Digit Pin</li>
                        <li>5400rs Reward for one Score</li>
                        <li>More Rewards</li>
                      </ul>
                      <a href="#paymentplans" class="login-btn">Buy Now</a>
                    </div>
                  </div>
                </div>
                @endcan('silver')
                @can('gold')
                <div class="row">
                  <div class="col-md-4">
                    <div class="price-card ">
                      <h2>Silver</h2>
                      <p>Most popular choice</p>
                      <p class="price"><span>1000</span></p>
                      <ul class="pricing-offers">
                        <li>6 Digit Pin</li>
                        <li>1050rs Reward for one Score</li>
                        <li>less rewards</li>
                      </ul>
                      <a href="" class="login-btn">Buy Now</a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="price-card featured">
                      <h2>Gold</h2>
                      <p>Recomended</p>
                      <p class="price"><span>5000</span></p>
                      <ul class="pricing-offers">
                        <li>8 Digit Pin</li>
                        <li>5400rs Reward for one Score</li>
                        <li>More Rewards</li>
                      </ul>
                      <a href="{{route('user.plan')}}" class="login-btn">Buy Now</a>
                    </div>
                  </div>
                </div>
                @endcan('gold')

              </div>
             <a href="{{route('user.planchange')}}"> <button style="display:block;margin:auto;margin-top: 20px;" class="login-btn">Change Plan</button></a>
            </section>
            <div  class="container"style="margin-top:5.5rem;">

           

              <div class="card mb-4">
                  <div class="card-body" style="overflow:auto;">
                      <!-- Grid row -->
                      <div class="row">
                          <!-- Grid column -->
                          <div class="col-md-12">
                              <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">Payments History</h2>
                              
                          </div>
                          <!-- Grid column -->
                      </div>
                      <!-- Grid row -->
                      <!--Table-->
                      <table class="table table-striped">
                          <!--Table head-->
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Type</th>
                                  <th>Amount</th>
                                  <th>Status</th>
                                  <th>Date</th>
                              </tr>
                          </thead>
                          <!--Table head-->
                          <!--Table body-->
                          <tbody>
                              @foreach($withdrawrequests as $withdrawrequest)
                              <tr>
                                  <th scope="row">{{++$sno}}</th>
                                  <th>Invitation</th>
                                  @if($withdrawrequest->plan=='silver')<td>1050</td>@else<td>5400</td>@endif
                                  @if($withdrawrequest->status==0)<td><a class="btn-primary btn">Pending</a></td>@else<td><a style="background-color:#1de41d;border-color:#1de41d;" class="btn-primary btn">Cleared</a></td>@endif
                                  <td>{{$withdrawrequest->created_at}}</td>
                              </tr>
                              @endforeach
                              @foreach($rewardrequests as $rewardrequest)
                              <tr>
                                  <th scope="row">{{++$sno}}</th>
                                  <th>Reward</th>
                                  <td>{{$rewardrequest->reward}}</td>
                                  @if($rewardrequest->status==0)<td><a class="btn-primary btn">Pending</a></td>@else<td><a style="background-color:#1de41d;border-color:#1de41d;" class="btn-primary btn">Cleared</a></td>@endif
                                  <td>{{$rewardrequest->created_at}}</td>
                              </tr>
                              @endforeach
                              @foreach($teambonusrequests as $teambonusrequest)
                              <tr>
                                  <th scope="row">{{++$sno}}</th>
                                  <th>TeamBonus</th>
                                  @if($teambonusrequest->plan=='silver')<td>300</td>@else<td>450</td>@endif
                                  @if($teambonusrequest->status==0)<td><a class="btn-primary btn">Pending</a></td>@else<td><a style="background-color:#1de41d;border-color:#1de41d;" class="btn-primary btn">Cleared</a></td>@endif
                                  <td>{{$teambonusrequest->created_at}}</td>
                              </tr>
                              @endforeach
                              
                              
                          </tbody>
                          <!--Table body-->
                      </table>
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

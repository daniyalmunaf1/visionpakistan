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
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/rewards.css')}}">
   
    <title>Vision Pakistan - Plan</title>

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
  </head>
  <style>
    @media screen and (max-width: 767px) {
      #accordionSidebar {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
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
            @can('silver')
              <h1 class="h1 mb-0 text-gray-800">Silver Plan</h1>
              @endcan('silver')
                @can('gold')
                <h1 class="h1 mb-0 text-gray-800">Gold Plan</h1>
              @endcan('gold')
            </div>
            <style>
              .row {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-evenly;
              }
              .row a {
                display: flex;
                justify-content: center;
                align-items: center;
                color: black;
                text-decoration: none;
                align-self: center;
                font-size: 1.7rem;
                font-weight: 800;
                cursor: pointer;
                margin: 10px;
                transition: 1s all;
              }
              .row a:hover {
                border-top: 30px solid #3588f6;
                border-top-style: dashed;
                border-left: 30px solid #000000;
                border-bottom: 30px solid #3588f6;
                border-right: 30px solid #000000;
                border-bottom-style: dashed;
                border-right-style: double;
                border-left-style: double;
               color: #3588f6;
              }
            </style>
            <!-- Content Row -->
            <div class="row" style="">
              <a href="{{route('user.pinrequest')}}" class="pinrequest-btn diamond-shaped-btn"
                >Pin Code Request</a
              >
              <a href="{{route('user.viewpin')}}" class="pinrequest-btn diamond-shaped-btn"
                >View Pin Codes</a
              >
              <a href="{{route('user.adduser')}}" class="pinrequest-btn diamond-shaped-btn"
                >Join A User</a
                >
              <a href="{{route('user.treeview')}}" class="pinrequest-btn diamond-shaped-btn"
                >Team View</a
              >
            </div>
            <section class="rewards-sec" style="margin-top:30px; color:black;overflow:auto;">
                <h1>Your Future Rewards </h1>

               <!-- Table Example -->
               <div class="container"style="min-width: 445px;padding:0;">
                @can('silver')
                <div class="table">
                  <div class="table-header">
                    <div class="header__item"><a  class="filter__link">Your Level</a></div>
                    <div class="header__item"><a  class="filter__link filter__link--number">Your Score</a></div>
                    <div class="header__item"><a  class="filter__link filter__link--number">Cost Of Rewards</a></div>
                    <div class="header__item"><a  class="filter__link filter__link--number">Type Of Rewards</a></div>
                  </div>
                  <div class="table-content">	
                    <div class="table-row">		
                      <div class="table-data">2</div>
                      <div class="table-data">45</div>
                      <div class="table-data">2500</div>
                      <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                  
                    </div>
                    <div class="table-row">
                      <div class="table-data">3</div>
                      <div class="table-data">300</div>
                      <div class="table-data">SmartPhone<br>25,000</div>
                      <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/phone.png')}}" alt=""> </div>
  
                    </div>
                    <div class="table-row">
                      <div class="table-data">4</div>
                      <div class="table-data">2000</div>
                      <div class="table-data">Corei5 4thGen Laptop<br>35,000</div>
                      <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/laptop.png')}}" alt=""></div>
                    </div>
                    <div class="table-row">
                      <div class="table-data">5</div>
                      <div class="table-data">5000</div>
                      <div class="table-data">Smart LED TV<br>40,000</div>
                      <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/tv.png')}}" alt=""></div>
                    </div>
                    <div class="table-row">
                      <div class="table-data">6</div>
                      <div class="table-data">10,000</div>
                      <div class="table-data">75,000</div>
                      <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                    </div>
                    <div class="table-row">
                      <div class="table-data">7</div>
                      <div class="table-data">20,000</div>
                      <div class="table-data">150,000</div>
                      <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                    </div>
                    <div class="table-row">
                      <div class="table-data">8</div>
                      <div class="table-data">32,000</div>
                      <div class="table-data">Complete Umrah Package<br>2500,000</div>
                      <div class="table-data"> <img style="width: 46px;" src="{{asset('assets/dashboard/rewards-img/umrah.png')}}" alt=""> </div>
                    </div>
                    <div class="table-row">
                      <div class="table-data">9</div>
                      <div class="table-data">52,000</div>
                      <div class="table-data">500,000</div>
                      <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                    </div>
                    <div class="table-row">
                      <div class="table-data">10</div>
                      <div class="table-data">90,000</div>
                      <div class="table-data">100,0000</div>
                      <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                    </div>
                    <div class="table-row">
                      <div class="table-data">11</div>
                      <div class="table-data">150,000</div>
                      <div class="table-data">200,0000</div>
                      <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                    </div>
                  </div>	
                </div>
                @endcan('silver')
                @can('gold')
                <div class="table">
                    <div class="table-header">
                      <div class="header__item"><a  class="filter__link">Your Level</a></div>
                      <div class="header__item"><a  class="filter__link filter__link--number">Your Score</a></div>
                      <div class="header__item"><a  class="filter__link filter__link--number">Cost Of Rewards</a></div>
                      <div class="header__item"><a  class="filter__link filter__link--number">Type Of Rewards</a></div>
                    </div>
                    <div class="table-content">	
                      <div class="table-row">		
                        <div class="table-data">2</div>
                        <div class="table-data">35</div>
                        <div class="table-data">7000</div>
                        <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                    
                      </div>
                      <div class="table-row">
                        <div class="table-data">3</div>
                        <div class="table-data">110</div>
                        <div class="table-data">SmartPhone<br>25,000</div>
                        <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/phone.png')}}" alt=""> </div>
    
                      </div>
                      <div class="table-row">
                        <div class="table-data">4</div>
                        <div class="table-data">320</div>
                        <div class="table-data">Corei5 4thGen Laptop<br>35,000</div>
                        <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/laptop.png')}}" alt=""></div>
                      </div>
                      <div class="table-row">
                        <div class="table-data">5</div>
                        <div class="table-data">750</div>
                        <div class="table-data">Smart LED TV 42"<br>50,000</div>
                        <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/tv.png')}}" alt=""></div>
                      </div>
                      <div class="table-row">
                        <div class="table-data">6</div>
                        <div class="table-data">1600</div>
                        <div class="table-data">80,000</div>
                        <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                      </div>
                      <div class="table-row">
                        <div class="table-data">7</div>
                        <div class="table-data">3600</div>
                        <div class="table-data">150,000</div>
                        <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                      </div>
                      <div class="table-row">
                        <div class="table-data">8</div>
                        <div class="table-data">7200</div>
                        <div class="table-data">Complete Umrah Package<br>2500,000</div>
                        <div class="table-data"> <img style="width: 46px;" src="{{asset('assets/dashboard/rewards-img/umrah.png')}}" alt=""> </div>
                      </div>
                      <div class="table-row">
                        <div class="table-data">9</div>
                        <div class="table-data">21,000</div>
                        <div class="table-data">1200,000</div>
                        <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                      </div>
                      <div class="table-row">
                        <div class="table-data">10</div>
                        <div class="table-data">36,000</div>
                        <div class="table-data">1500,000</div>
                        <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                      </div>
                      <div class="table-row">
                        <div class="table-data">11</div>
                        <div class="table-data">95,000</div>
                        <div class="table-data">3500,000</div>
                        <div class="table-data"> <img style="width: 56px;" src="{{asset('assets/dashboard/rewards-img/money.png')}}" alt=""> </div>
                      </div>
                    </div>	
                </div>
                @endcan('gold')
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
<script src="{{asset('assets/dashboard/css/rewards.js')}}"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/dashboard/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assets/dashboard/vendor/chart.js')}}/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('assets/js/demo/chart-pie-demo.js')}}"></script>
  </body>
</html>

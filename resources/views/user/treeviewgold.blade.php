<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Custom fonts for this template-->
    <link
      href="{{asset('assets/dashboard/vendor/fontawesome-free/css/all.css')}}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/dashboard/css/sb-admin-2.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/dashboard/css/sb-admin-2.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/dist/pincode-input.min.css')}}" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/treeview/tree.css')}}" />
<style>
  .bg-white-ul{
    background-color: white;
    width: 200px;
    height: 65px;
    box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
  }
  .bg-blue{
    color: #3588f6;
  }
</style>
    <title>Vision Pakistan - Tree View</title>
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

          <div class="score-counter" style="display:flex;flex-direction:column;text-align: center;
border: 1px solid;
margin: auto;
border-radius: 10px;
BACKGROUND: #3588f6;
color: white;">
 <h1>
  Your Score
 </h1> 
 <p>
  01/35
 </p>
</div>
          <h4 style="text-align:center;" class="complete-score display-none">Add 3 users to submit a score</h4>
          <h4 style="text-align:center;" class="complete-score1">You Can Now Submit the Score</h4>
          <div class="genealogy-body genealogy-scroll">
            <div class="genealogy-tree">
              <ul>
                <li>
                  <a href="javascript:void(0);">
                    <div  class="member-view-box" style="right:-25px;">
                      <div class="member-image">
                        <img
                          class="user-img1"
                          src="{{asset('assets/dashboard/treeview/icons8-user-80.png')}}"
                          alt="User"
                        />
                        <div class="member-details">
                          <h3 class="member-h3-1">hafizasimbwn@gmail.com</h3>
                        </div>
                      </div>
                    </div>
                  </a>
               
                <ul class="active">
                    <li>
                      <a href="javascript:void(0);">
                        <div class="member-view-box">
                          <div class="member-image">
                            <!-- <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member"> -->
                            <img
                              class="user-img2"
                              src="{{asset('assets/dashboard/treeview/icons8-user-80.png')}}"
                              alt="User"
                            />
                            <div class="member-details">
                              <h3 class="member-h3-2">
                                usmanmansha12@gmail.com
                              </h3>
                            </div>
                          </div>
                        </div>
                      </a>
                
                      <ul> <strong style="font-size: 2rem;padding-right:20px;    color: #3588f6;">1:</strong> <div class="bg-white-ul"><li  class="bg-blue"style="font-size: 1.5rem;">  30</li></div> </ul>
                    
                      <ul> <strong style="font-size: 2rem;padding-right:20px;    color: #3588f6;">2:</strong> <div class="bg-white-ul"> <li class="bg-blue" style="font-size: 1.5rem;">  30</li></div></ul>
                      <ul> <strong style="font-size: 2rem;padding-right:20px;    color: #3588f6;">3:</strong> <div class="bg-white-ul"> <li class="bg-blue" style="font-size: 1.5rem;">  30</li></div></ul>
                   
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="member-view-box">
                          <div class="member-image">
                            <!-- <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member"> -->
                            <img
                              class="user-img3"
                              src="{{asset('assets/dashboard/treeview/icons8-user-80.png')}}"
                              alt="User"
                            />
                            <div class="member-details">
                              <h3 class="member-h3-3">
                                hafizasimbwn3@gmail.com
                              </h3>
                            </div>
                          </div>
                        </div>
                      </a>
                                     

                      <ul> <div class="bg-white-ul"><li style="font-size: 1.5rem;" class="bg-blue"> 30</li></div> </ul>
                    
                      <ul> <div class="bg-white-ul"> <li style="font-size: 1.5rem;" class="bg-blue"> 30</li></div></ul>
                      <ul> <div class="bg-white-ul"> <li style="font-size: 1.5rem;" class="bg-blue"> 30</li></div></ul>
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="member-view-box">
                          <div class="member-image">
                            <!-- <img src="https://image.flaticon.com/icons/svg/145/145867.svg" alt="Member"> -->
                            <img
                              class="user-img4"
                              src="{{asset('assets/dashboard/treeview/icons8-user-80.png')}}"
                              alt="User"
                            />
                            <div class="member-details">
                              <h3 class="member-h3-4">
                                hafizasimbwn3@gmail.com
                              </h3>
                            </div>
                          </div>
                        </div>
                      </a>
                      
                      <ul> <div class="bg-white-ul"><li style="font-size: 1.5rem;"class="bg-blue">  30</li></div> </ul>
                    
                      <ul> <div class="bg-white-ul"> <li style="font-size: 1.5rem;"class="bg-blue">  30</li></div></ul>
                      <ul> <div class="bg-white-ul"> <li style="font-size: 1.5rem;"class="bg-blue">  30</li></div></ul>
                    </li>
                  </li>
                  
                </ul>
            </li>
            </div>
          </div>
          <button class="submit-btn-tree">Submit</button>

        </div>
      </div>
    </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('assets/dashboard/treeview/tree.js')}}"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"
    ></script>
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

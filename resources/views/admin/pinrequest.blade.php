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
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">

    <title>Vision Pakistan - Pin Requests</title>

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
      @include('admin.sidebar')

      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          @include('admin.navbar')
<style>
  input[type='number']{
    max-width: 70px;
  }
</style>

   <div style="text-align: center;padding-top: 40px;" class="container">
   @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
        <div class="row d-flex justify-content-center">
            <div>
                      <table class="table table-striped">
                        <h1>Silver Pin Requests</h1>
                          <!--Table head-->
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Username</th>
                                  <th>Email</th>
                                  <th>Trx Id</th>
                                  <th>Amount</th>
                                  <th>Quantity Of Pins</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <!--Table head-->
                          <!--Table body-->
                          <tbody>
                                @foreach($SilverPinRequests as $PinRequest)
                              <tr>
                                  <th scope="row">{{++$sno}}</th>
                                  <td>{{$PinRequest->name}}</td>
                                  <td>{{$PinRequest->email}}</td>
                                  <td>{{$PinRequest->trx_id}}</td>
                                  <td>{{$PinRequest->amount}}</td>
                                  <td>
                                   <form method="POST" style="float:center;" action="{{ route('sendpin',[$PinRequest->id,$PinRequest->user_id,$PinRequest->trx_id,'silver']) }}" class="" novalidate="novalidate" id="" >
									@csrf
                                  

                                     <input class="pins-qunat" type="number" value="{{$PinRequest->number_of_pins}}" placeholder="#" name="number_of_pins" id=""> 
                                  
                                    </td><td>
                                     <button type="submit" class="btn-primary btn">Generate Pin</button> 
                                    
                                    </form>
                                   </td>
                              </tr>
                              @endforeach
                              
                          </tbody>
                          <!--Table body-->
                      </table>
            </div>
            <div >
                      <h1 style="margin-top:50px;">Gold Pin Requests</h1>
                      <table class="table table-striped">
                          <!--Table head-->
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Username</th>
                                  <th>Email</th>
                                  <th>Trx Id</th>
                                  <th>Amount</th>
                                  <th>Quantity Of Pins</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <!--Table head-->
                          <!--Table body-->
                          <tbody>
                          @foreach($GoldPinRequests as $PinRequest)
                              <tr>
                                  <th scope="row">{{++$sno}}</th>
                                  <td>{{$PinRequest->name}}</td>
                                  <td>{{$PinRequest->email}}</td>
                                  <td>{{$PinRequest->trx_id}}</td>
                                  <td>{{$PinRequest->amount}}</td>
                                  <td>
                                   <form method="POST" style="float:center;" action="{{ route('sendpin',[$PinRequest->id,$PinRequest->user_id,$PinRequest->trx_id,'gold']) }}" class="" novalidate="novalidate" id="" >
									@csrf
                                  

                                     <input class="pins-qunat" type="number" value="{{$PinRequest->number_of_pins}}" placeholder="#" name="number_of_pins" id=""> 
                                  
                                    </td><td>
                                     <button type="submit" class="btn-primary btn">Generate Pin</button> 
                                    
                                    </form>
                                   </td>
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
    <style>
      .pins-qunat{
        border: 1px solid #3588f6;
    border-radius: 6px;
    outline: none;
    color: #3588f6;
      }
    </style>
<script>
  let pinsQuantity = document.getElementsByClassName('pins-qunat');
Array.from(pinsQuantity).forEach((e)=>{
e.value;
e.setAttribute('min','0');
})

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


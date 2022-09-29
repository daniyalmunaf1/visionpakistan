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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style>
   #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->
    <link rel="icon"  sizes="512x512" href="{{asset('assets/favicon/android-chrome-512x512.png')}}">

    <title>Vision Pakistan - Users List</title>

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
      
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content"style="overflow:auto;">
          <!-- Topbar -->
          @include('admin.navbar')

          <!-- End of Topbar -->
          <!-- <div style="text-align: center;padding-top: 40px; overflow: auto; margin:50px;
    min-width: 590px;" > -->
    <div style="text-align: center;padding-top: 40px; overflow: auto; margin:50px;" >
     
     <!-- Topbar Search -->

     @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
<h1>Users List</h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Email" title="Type in a name">
               <table style="width:1250px;" class="table table-striped" id="myTable">
                   <!--Table head-->
                   <thead>
                       <tr>
                           <!-- <th>#</th> -->
                           <th>Activate</th>
                           <th>Username</th>
                           <th>Email</th>
                           <th>Score</th>
                           <th>Level</th>
                           <th>Plan</th>
                           <th>Current Income</th>
                           <th>Reward Income</th>
                           <th>Team Bonus</th>
                           <th>Total Income</th>
                           <th>Ref Email</th>
                           <th style="width:180px;">Actions</th>
                       </tr>
                   </thead>
                   <!--Table head-->
                   <!--Table body-->
                   <tbody>
                        @foreach($users as $user)
                       <tr>
                           <!-- <th scope="row">{{++$sno}}</th> -->
                           <td>
                           <!-- <form method="POST" action="{{ route('deactivateuser',$user) }}" class="" novalidate="novalidate" id="" > -->
																<!-- @csrf -->
																<!-- {{method_field('put')}} -->
																<!-- <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm "> -->
                                  <!-- <div> -->
																	<!-- <label class="form-check form-switch form-check-custom form-check-solid"> -->
																		<input class="form-check-input w-30px h-20px" type="checkbox" name="lock" onclick="return false;" @if($user->deactivate==0) checked @endif />
																	<!-- </label> -->
<!-- </div> -->

																	<!--end::Svg Icon-->
																<!-- </button> -->
															</form>
                            
                          </td>
                           <td>{{$user->name}}</td>
                           <td>{{$user->email}}</td>
                           <td>{{$user->score}}</td>
                           <td>{{$user->level}}</td>
                           <td style="text-transform:capitalize;">{{ implode(',', $user->roles()->get()->pluck('name')->toArray())}}</td>
                           <td>{{$user->current_income}}</td>
                           <td>{{$user->reward_income}}</td>
                           <td>{{$user->team_bonus}}</td>
                           <td>{{$user->total_income}}</td>
                           <td>{{$user->ref_email}}</td>
                           <td>
                           <a class="btn btn-success" style=""  href="{{route('deactivateuser',$user)}}">A/C</a>
                            <a class="btn btn-primary" style="" href="{{route('users.edit',$user->id)}}"><i class="fa fa-edit"></i></a>
                           <form method="POST" style="float:right;" action="{{ route('users.destroy',$user) }}" class="" novalidate="novalidate" id="" >
															@csrf
																{{method_field('DELETE')}}
                             <button class="btn btn-danger del-user" onclick="return confirm('Are you sure You Want to delete this User?')"><i class="fa fa-trash"></i></button>
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
          <!-- Begin Page Content -->
          <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
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

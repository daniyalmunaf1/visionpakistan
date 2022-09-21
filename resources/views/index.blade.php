<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vision Pakistan is a network Marketing Website, Here you can earn unlimited Money by just developing a network">
  <meta name="keywords" content="Network Marketing,Online Earnig,Earning,Marketing,Work From Home,Make Your Network,Invite,Invite Friends">
  <meta name="author" content="Vision Pakistan">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon"  sizes="512x512" href="assets/favicon/android-chrome-512x512.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap/_media.css">
    <link rel="stylesheet" href="assets/css/bootstrap/mixins/_border-radius.css">
    <link rel="stylesheet" href="assets/css/bootstrap/mixins/_screen-reader.css">
    <link rel="stylesheet" href="assets/css/bootstrap/mixins/_visibility.css">
    <link rel="stylesheet" href="assets/css/bootstrap/utilities/_stretched-link.css">
    <link rel="stylesheet" href="assets/dashboard/css/rewards.css">
  
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
     <title>Vision Pakistan</title>
</head>
<body >	

	<div class="navigation-wrap start-header start-style"style="    max-height: 80px;
  padding: 0;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light" style="max-height: 79px;">
					
				<img class="vision-pak-logo" src="assets/Images/visionpakLogo.png" alt="">
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0" style="background-color: white;padding: 29px;">
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#home">Home</a>
									
								</li>
								
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="#aboutus">About Us</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link"href="#contactus">Watch Video</a>
									
								</li>
                @can('login')
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link"href="{{route('dashboard')}}">Dashboard</a>
									
								</li>
                <form method="POST" action="{{ route('logout') }}">
                            			@csrf
                 
								<li class="pl-4 pl-md-0 ml-0 ml-md-4">
                <button type="submit" class="nav-login login-a" >
                    
                    
										LogOut</button>
									
								</li>
									</form>
  
                @endcannot
                @cannot('login')
								<li class="pl-4 pl-md-0 ml-0 ml-md-4">
								<a  class="nav-login login-a" href="{{route('login')}}">Login</a>
									
								</li>
                @endcannot

							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>

    <section id="home" class="container section1">
<div class="sec1-cont">
    <div class="left-sec1-cont">
        <h1>Let's Start Earning With <br> <h1 class="blue-color">Vision Pakistan</h1></h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto hic porro, quaerat cumque quis voluptates quae rerum asperiores in id! Harum, in?</p>
@cannot('login')
<a  class="nav-login login-a" href="{{route('login')}}">Log In</a>
@endcannot
@can('login')
<a style="width:100px;" class="nav-login login-a" href="{{route('dashboard')}}">Dashboard</a>
@endcan
    </div>
    <div class="right-sec1-cont">
       <img src="assets/Images/img-1.jpg" alt="">
    </div>
</div>
    </section>

    <section class="container section2">
        <div class="left-sec2-cont">
            <img src="assets/Images/img-2.jpg" alt="">

        </div>
        <div class="right-sec2-cont">
<h1>Welcome to <spans class="blue-color">Vision Pakistan</spans> </h1>
<h3>Why You Should Choose Us?</h3>
<ul class="list-bullets">
    <li class="mb-2">Lorem ipsum dolor sit amet.</li>
    <li class="mb-2">Consectetur adipisicing elit.</li>
    <li class="mb-2">Consectetur adipisicing elit.</li>
   
</ul>

        </div>

    </section>
    <section id="aboutus" class="container section4">
<div class="aboutus container">
    <h1>About <span class="blue-color">Vision Pakistan</span></h1>
    <div class="aboutcontent">
        <img src="assets/Images/img-3.jpg" alt="">
        <div class="about-para">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore nam ratione, aspernatur ut facilis ipsa nisi aut fugiat optio quibusdam velit iusto nesciunt tenetur commodi similique doloribus, delectus eos sapiente quam! Qui quia libero cumque reiciendis sapiente iure ab nihil?</p>
            <p class="mt-14">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel ea, eius, inventore doloremque, modi laborum distinctio atque accusantium repellendus aut dolore ab?</p>

        </div>
    </div>
</div>

    </section>

    <section class="rewards-table" style="display: flex;justify-content: center;
    margin-top: 75px;flex-wrap: wrap;text-align: center;">
<div class="silverPlans"style="display: flex;flex-direction:column;">
  <h2>Silver Package Rewards</h2>
  <div class="container" style="margin-top: 20px;">
	
    <div class="table">
      <div class="table-header">
        <div class="header__item"><a  class="filter__link">Your Level</a></div>
       
        <div class="header__item"><a  class="filter__link filter__link--number">Cost Of Rewards</a></div>
        <div class="header__item"><a  class="filter__link filter__link--number">Type Of Rewards</a></div>
      </div>
      <div class="table-content">	
        <div class="table-row">		
          <div class="table-data">1</div>
          
          <div class="table-data">2500</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
      
        </div>
        <div class="table-row">
          <div class="table-data">2</div>
 
          <div class="table-data">SmartPhone</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/phone.png" alt=""> </div>

        </div>
        <div class="table-row">
          <div class="table-data">3</div>
  
          <div class="table-data">Corei5 4thGen Laptop</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/laptop.png" alt=""></div>
        </div>
        <div class="table-row">
          <div class="table-data">4</div>
        
          <div class="table-data">Smart LED TV</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/tv.png" alt=""></div>
        </div>
        <div class="table-row">
          <div class="table-data">5</div>
          
          <div class="table-data">75,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">6</div>
       
          <div class="table-data">150,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">7</div>
         
          <div class="table-data">Complete Umrah Package</div>
          <div class="table-data"> <img style="width: 46px;" src="assets/dashboard/rewards-img/umrah.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">8</div>
        
          <div class="table-data">500,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">9</div>
         
          <div class="table-data">1000,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">10</div>
       
          <div class="table-data">2000,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
      </div>	
    </div>
  </div>
</div>
<div class="goldPlans" style="display: flex;flex-direction:column;text-align: center;">
  <h2>Gold Package Rewards</h2>
  <div class="container"style="margin-top: 20px;">
	
    <div class="table">
      <div class="table-header">
        <div class="header__item"><a  class="filter__link">Your Level</a></div>
     
        <div class="header__item"><a  class="filter__link filter__link--number">Cost Of Rewards</a></div>
        <div class="header__item"><a  class="filter__link filter__link--number">Type Of Rewards</a></div>
      </div>
      <div class="table-content">	
        <div class="table-row">		
          <div class="table-data">1</div>
    
          <div class="table-data">7000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
      
        </div>
        <div class="table-row">
          <div class="table-data">2</div>
  
          <div class="table-data">SmartPhone</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/phone.png" alt=""> </div>

        </div>
        <div class="table-row">
          <div class="table-data">3</div>
 
          <div class="table-data">Corei7 4thGen Laptop</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/laptop.png" alt=""></div>
        </div>
        <div class="table-row">
          <div class="table-data">4</div>
   
          <div class="table-data">Smart LED TV 42"</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/tv.png" alt=""></div>
        </div>
        <div class="table-row">
          <div class="table-data">5</div>
         
          <div class="table-data">80,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">6</div>
       
          <div class="table-data">150,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">7</div>
 
          <div class="table-data">Complete Umrah Package</div>
          <div class="table-data"> <img style="width: 46px;" src="assets/dashboard/rewards-img/umrah.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">8</div>
    
          <div class="table-data">1200,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">9</div>
   
          <div class="table-data">1500,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
        <div class="table-row">
          <div class="table-data">10</div>
    
          <div class="table-data">3500,000</div>
          <div class="table-data"> <img style="width: 56px;" src="assets/dashboard/rewards-img/money.png" alt=""> </div>
        </div>
      </div>	
    </div>
  </div>
</div>
    </section>


 

   <!-- Footer -->
<footer class="mt-14 text-center text-lg-start bg-light text-muted">
    <!-- Section: Links  -->
    <section class="footer-sec">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Vision Pakistan
            </h6>
            <p>
             Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
       
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            
            <p>
              <a href="#!" class="text-reset">Video Link</a>
            </p>
            <p>
              <a href="#aboutus" class="text-reset">About Us</a>
            </p>
            @cannot('login')

            <p>
              <a href="{{route('login')}}" class="text-reset">Log In</a>
            </p>
            @endcannot
          
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p>
              <i class="fas fa-envelope me-3"></i>
              hafizasimbwn123@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i>0304 4112119 </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">VisionPakistan.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

      

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/index.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</body>
</html>
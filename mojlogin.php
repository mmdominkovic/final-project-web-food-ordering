<?php 
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))

{
	header("location:index.php");
}
else{ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="images/logo.png" rel="icon" type="image/x-icon"/>
        <title>Pizza Delicious</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		  <link rel="stylesheet" href="style/fontawesome-free/css/all.min.css">
        <!-- Styles -->
		<link rel="stylesheet" type="text/css" href="style/registerstyle.css?<?php echo time(); ?>">

        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css?<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="style/css/grayscale.min.css?<?php echo time(); ?>">

     <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        
    </head>
	<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="mojindex.php">  <img src="images/logo.png" style="height:55px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="mojindex.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  js-scroll-trigger" href="#login">Login</a></li>
          
          <li class="nav-item">
            <a class="nav-link" href="mojregister.php">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Header -->
<header class="masthead" id="login">

	  <div class="container-fluid">
       <div class="row ">
	   
           <div class="col-sm-6 bg" style="background-image:url('images/bg_pic.png')">
		  
        <h1 class="mx-auto my-0 text-uppercase text-center"> <br> <br> Pizza Delicious</h1>
    
           </div>
		   
           <div class="col-sm-6">
               <div class="row pt-5">
                   <div class="col-md-8 col-sm-10 offset-sm-1 offset-md-2">
				   <br>
				   <br>
				   <br>
				   <br>
                       <h4>Get More tasty things with Loggin.</h4>
                    
                   
                      <div class="login">
                       <ul class="nav nav-tabs">
                           <li class="nav-item">
                             <a class="nav-link active" href="#">Login</a>
                           </li>
                         </ul>
                         <form method="post" action="routers/router.php" class="login-form" id="form">                              
                          <div class="alert alert-warning alert-dismissible fade show">
                                       <button type="button" class="close" data-dismiss="alert">&times;</button>
                                       Please fill the following information.
                                     </div>
                                     <input in="username" name="username" type="text" class="form-control" placeholder="Username">
                                     <div class="form-group">
                                     <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                                     </div>
                                     <span toggle="#password-field"></span>
                                     <button name="login" a href="javascript:void(0);" onclick="document.getElementById('form').submit();" type="submit" class="btn btn-primary btn-block">Submit</a></button>
                    </form>
                       
                      </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
       
   
  </header>
 <!-- Contact Section -->
 <section id="signup" class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="mailto:megi.dominkovic@hotmail.com">megi.dominkovic@hotmail.com</a>

              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+387 31 902-8832</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>
  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Marija Magdalena Dominkovic
    </div>
  </footer>
  
          <script type="text/javascript" src="js/jquery/jquery.min.js"></script> 
          <script type="text/javascript" src="js/js/bootstrap.bundle.min.js"></script>
          <script type="text/javascript" src="js/jquery-easing/jquery.easing.min.js"></script> 
          <script type="text/javascript" src="js/grayscale.min.js"></script> 



</body>
</html> <?php }
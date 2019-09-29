<?php 
session_start(); 
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))

{
	header("location:index.php");
}
else{ 
?>
<!doctype html>
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

            .m-b-md {  margin-bottom: 30px; }
              
.hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}

            }
        </style>
        
    </head>
    <body id="page-top"> 
   
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">  <img src="images/logo.png" style="height:55px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mojlogin.php">Login</a></li>
          
          <li class="nav-item">
            <a class="nav-link" href="mojregister.php">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
 
    <!-- Header -->
    <header class="masthead" >
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase"> Pizza Delicious</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Welcome to Pizza Delicious! Dont be afraid to try best pizza in town!</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Eat Drink Enjoy </h2>
          <p class="text-white-50">Pizza Delicious Restaurant has been family-owned and operated for over 20 years. Each member of our family has worked and contributed to our restaurant in some form once they are of age. This allows us to preserve our handed-down family recipes and share them with our customers for generations to come!</p>
        </div>
      </div>
      <img src="images/about.jpg" class="img-fluid" alt="">
    </div>
  </section>
       <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="images/bg_pic.png" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Shoreline</h4>
            <p class="text-black-50 mb-0">Pizza Delicious Restaurant specializes in all types of pizza. We got fresh BIO ingredients every day, that is what make our Pizzas taste Delicious</p>
          </div>
        </div>
      </div>

    


      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
        <div class="hovereffect">
          <img class="img-fluid " src="images/pizza-4.jpg" alt="">  
        <div class="overlay"></div>
      </div>
      </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Margherita</h4>
                <p class="mb-0 text-white-50">Pizza Margherita is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt and extra-virgin olive oil. Traditionally, it is made with fior di latte.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
        <div class="hovereffect">
          <img class="img-fluid" src="images/pizza-2.jpg" alt="">
          <div class="overlay"></div>
      </div>
      </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Mediterranean sardine pizza</h4>
                <p class="mb-0 text-white-50">Little bit different, this Mediterranean pizza would rock you with sardines, onions, kalamata olives and fresh baby spinach leaves.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
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
          <!-- Scripts -->
          <script type="text/javascript" src="js/jquery/jquery.min.js"></script> 
          <script type="text/javascript" src="js/js/bootstrap.bundle.min.js"></script>
          <script type="text/javascript" src="js/jquery-easing/jquery.easing.min.js"></script> 
          <script type="text/javascript" src="js/grayscale.min.js"></script> 

   


	

    </body>
</html>
 <?php }
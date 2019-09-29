<?php
include 'includes/connect.php';
include 'includes/wallet.php';

	if($_SESSION['customer_sid']==session_id())
	{
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
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		  <link rel="stylesheet" href="style/fontawesome-free/css/all.min.css">
        <!-- Styles -->
        
        <link rel="stylesheet" type="text/css" href="style/adminstyle.css?<?php echo time(); ?>">
        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css?<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="style/css/grayscale.min.css?<?php echo time(); ?>">

     <style>
     .form-control{
       display: inline;
     }
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
   
   <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">  <img src="images/logo.png" style="height:55px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $name;?> 
          </button>
          
          <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item"  type="button"><a href="logout.php">Logout</a></button>
   
 </div>
 
</div>

<div class="btn-group">
            <button type="button" class="btn btn-secondary "  aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-money" aria-hidden="true"></i>
<?php echo $balance;?> 
          </button>
 
</div>

<ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#menu"> Food Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#order"> My Orders</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#details">My Details</a></li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
        </div>
       
      
        
        </ul>
      
      </div>
    </nav>
  
      <!-- Header -->
      <header class="masthead" >
      <div class="align-items-center" style="padding-top: 150px">
      
      <div class="social-box">
    <div class="container">



     	<div class="row">
			 
			    <div class="col-lg-4 col-xs-12 text-center">
					<div class="box">
          <i class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3>Menu</h3>
						</div>
						<div class="box-text">
							<span>Currently available Menu Items.</span>
						</div>
						<div class="box-btn">
						    <a class="js-scroll-trigger" href="#menu">Go for it!</a>
						</div>
					 </div>
				</div>	 
				

				 <div class="col-lg-4 col-xs-12  text-center">
					<div class="box">
          <i class="fa fa-list fa-3x" aria-hidden="true"></i>
						<div class="box-title">
							<h3>My Orders</h3>
						</div>
						<div class="box-text">
							<span>List of my previous and active Orders</span>
						</div>
						<div class="box-btn">
						    <a class="js-scroll-trigger" href="#order">Go for it!</a>
						</div>
					 </div>
				</div>	 
				
				<div class="col-lg-4 col-xs-12 text-center">
					<div class="box">
          <i class="fa fa-user-circle fa-3x" aria-hidden="true"></i>

						<div class="box-title">
							<h3>About me</h3>
						</div>
						<div class="box-text">
							<span>Edit your details here.</span>
						</div>
						<div class="box-btn">
						    <a class="js-scroll-trigger"  href="#details">Go for it!</a>
						</div>
					 </div>
				</div>	 

					
		
		</div>		
    </div>
</div>
      </div>
    </header>
  

    <section id="menu" class="about-section text-center">
   <!--start container-->
   <div class="container py-5">
   <div class="row">
            <div class="col-lg-7 mx-auto bg-white rounded shadow">
		  <form class="formValidate" id="formValidate" method="post" action="place-order.php" novalidate="novalidate">
      <div class="col s12 m4 l3">


         
              
				<?php
				$result = mysqli_query($con, "SELECT * FROM items where not deleted;");
				while($row = mysqli_fetch_array($result))
      {
        echo '<div class="img-wrap" ><img src="'.$row["image"].'"class="img-thumbnail"></div>';               
        echo '<figcaption class="info-wrap"><h4 class="title">'.$row["name"].'</h4></figcaption> 
        <div class="bottom-wrap">
        <div class="price-wrap h5">	<span class="price-new">$'.$row["price"].'</span></div>';      
					echo '<div class="input-field"><label for='.$row["id"].' class="">Quantity</label>';
          echo '<input id="'.$row["id"].'" name="'.$row['id'].'" type="text"></div></div';
				}
				?>
                   

			  
			  
			                        <div class="input-field col s12">
                              <button class="btn btn-primary" type="submit" name="action">Order
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                         
     
      </div>
			</form>
        </div>
        <!--end container-->
</section>

    <section id="users" class="about-section text-center">
  
    </section>
    

<!--start container-->

  <section id="order">
   <!--start container-->
<div class="container" style="display:block;
  overflow:auto;
  height:650px;
  width:100%;">
  <!--editableTable-->
<div>
     
            <?php
            if(isset($_GET['status'])){
                $status = $_GET['status'];
            }
            else{
                $status = '%';
            }
            $sql = mysqli_query($con, "SELECT * FROM orders WHERE customer_id = $user_id AND status LIKE '$status';;");
            echo '<div class="list-group">
        <div>
        
			<ul  class="list-group list-group-flush" style="background-color: #818181;">';
            while($row = mysqli_fetch_array($sql))
            {
                $status = $row['status'];
                echo '<li class="list-group-item list-group-item-secondary">
				   
			       <h3 ><strong>Order No.</strong> '.$row['id'].'</h3>
                      <p><strong>Date:</strong> '.$row['date'].'</p>
                      <p><strong>Payment Type:</strong> '.$row['payment_type'].'</p>
                      <p><strong>Address: </strong>'.$row['address'].'</p>							  
                      <p><strong>Status:</strong> '.($status=='Paused' ? 'Paused <a  data-position="bottom" data-delay="50" data-tooltip="Please contact administrator for further details." class="btn-floating waves-effect waves-light tooltipped cyan">    ?</a>' : $status).'</p>						                               
                     
					                      </li>';
                $order_id = $row['id'];
                $sql1 = mysqli_query($con, "SELECT * FROM order_details WHERE order_id = $order_id;");
                while($row1 = mysqli_fetch_array($sql1))
                {
                    $item_id = $row1['item_id'];
                    $sql2 = mysqli_query($con, "SELECT * FROM items WHERE id = $item_id;");
                    while($row2 = mysqli_fetch_array($sql2)){
                        $item_name = $row2['name'];
                    }
                    echo '<li class="list-group-item">
                    <div class="row">
                    <div class="col s7">
                    <p class="title"><strong>'.$row1['item_id'].'.</strong> '.$item_name.'</p>
                    </div>
                    <div class="col s2">
                    <span>'.$row1['quantity'].' Pieces</span>
                    </div>
                    <div class="col s3">
                    <span>$ '.$row1['price'].'</span>
                    </div>
                    </div>
                    </li>';
                    $id = $row1['order_id'];
                }
                echo '<li class="list-group-item">
                                <div class="row">
                                    <div class="col s7">
                                        <h3 class="list-group"><strong> Total</strong></h3>
                                        <h3><strong>$ '.$row['total'].'</strong></h3>
                                    </div>
                                    </div>
                                   ';
                        if(!preg_match('/^Cancelled/', $status)){
                            if($status != 'Delivered'){
                        echo '<form action="routers/cancel-order.php" method="post">
                                <input type="hidden" value="'.$id.'" name="id">
                                <input type="hidden" value="Cancelled by Customer" name="status">	
                                <input type="hidden" value="'.$row['payment_type'].'" name="payment_type">											
                                <button class="btn btn-danger" type="submit" name="action">Cancel Order
                                <i class="fa fa-ban" aria-hidden="true"></i>

                                </button>
                                </form>';
                        }
                        }
                        echo'</div></li>';

            }
            ?>
             </ul>
        </div>
      </div>
    </div>
</div>
<!--end container-->
</section>
<?php
$user_id = $_SESSION['user_id'];
$result = mysqli_query($con, "SELECT * FROM users where id = $user_id");
while($row = mysqli_fetch_array($result)){
$name = $row['name'];	
$address = $row['address'];
$contact = $row['contact'];
$email = $row['email'];
$username = $row['username'];
$password =$row['password'];
$wallet_id = $_SESSION['user_id'];

$result = mysqli_query($con, "SELECT * FROM wallet_details where wallet_id = $wallet_id");
while($row = mysqli_fetch_array($result)){
$cvv = $row['cvv'];	
$num = $row['number'];

}

}
	if($_SESSION['customer_sid']==session_id())
	{

    ?>
 
<section id="details" class="about-section text-center">
  
<!--start container-->
<br>
<div class="container">
  <div class="row">
	<div class="col-md-9">       
  <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
      
        <div class="row">
          <div class="col-md-12">
            <form class="formValidate" id="formValidate" method="post" action="routers/details-router.php" novalidate="novalidate"class="col s12">
              

              <div class="form-group">
              <div class="col-xs-6">
                  <i class="fa fa-user" ></i><label for="username" >Username</label>
                  <input class="form-control" name="username" id="username" type="text" value="<?php echo $username;?>">
                </div>
              </div>	

              <div class="form-group">
              <div class="col-xs-6">
                <i class="fa fa-user"></i><label for="name" class="">Name</label>
                  <input class="form-control" name="name" id="name" type="text" value="<?php echo $name;?>">
                </div>
              </div>

              <div class="form-group">
              <div class="col-xs-6">
              <i class="fa fa-credit-card" title="It is verified, can't change it."></i><label for="name" class="">Card number</label>
                  <input disabled class="form-control" name="name" id="name" type="text" value="<?php echo $num;?>">
                </div>
              </div>
              <div class="form-group">
              <div class="col-xs-6">
              <i class="fa fa-key" aria-hidden="true" title="It is verified, can't change it." ></i><label for="name" class="">CVV number</label>
                  <input disabled class="form-control" name="name" id="name" type="text" value="<?php echo $cvv;?>">
                </div>
              </div>
              <div class="form-group">
              <div class="col-xs-6">
                <i class="fa fa-envelope" aria-hidden="true"></i><label for="email" class="">Email</label>
                  <input class="form-control"name="email" id="email" type="email" value="<?php echo $email;?>">
                </div>
              </div>

              <div class="form-group">
              <div class="col-xs-6">
                <i class="fa fa-lock" aria-hidden="true"></i> <label for="password" class="">Password</label>
                  <input value="<?php echo $password;?>" class="form-control" name="password" id="password" type="password">
                  <input type="checkbox" onclick="Toggle()">Show Password
                </div>
              </div>

              <div class="form-group">
              <div class="col-xs-6">
                <i class="fa fa-user"></i>  <label for="phone" class="">Contact</label>
                  <input class="form-control" name="phone" id="phone" type="number" value="<?php echo $contact;?>">
                </div>
              </div>		
          
              <div class="form-group">
              <div class="col-xs-6">
                <i class="fa fa-home" aria-hidden="true"></i> <label for="address" class="">Address</label>
                  <textarea class="form-control" name="address" id="address" class="materialize-textarea validate" ><?php echo $address;?></textarea>
                </div>
                <br>
                <div class="form-group">
                  <div class="col-xs-6">
                    <button class="btn btn-success" type="submit" name="action">Submit
                     
                    </button>
                  </div>
                </div>
             
            </form>
          </div>
        
    
    
  </div>
    </section>
    <?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:admin-page.php");		
		}
		else{
			header("location: index.php#details");
		}
	}
?>
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
                <a href="#">hello@yourdomain.com</a>
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
              <div class="small text-black-50">+1 (555) 902-8832</div>
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
  </div>
</div>
</div>
      </div>
<!--end container-->

</section>
<!-- END CONTENT -->



 <!-- Scripts -->
 <script type="text/javascript" src="js/mainjs.js"></script>
 <script type="text/javascript" src="js/jquery/jquery.min.js"></script> 
 <script type="text/javascript" src="js/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" src="js/jquery-easing/jquery.easing.min.js"></script> 
<script type="text/javascript" src="js/grayscale.min.js"></script> 

   


</body>

</html>
<?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:admin-page.php");		
		}
		else{
			header("location:mojindex.php");
		}
	}
?>
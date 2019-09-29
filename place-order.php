<?php
include 'includes/connect.php';
include 'includes/wallet.php';
$total = 0;
	if($_SESSION['customer_sid']==session_id())
	{
$result = mysqli_query($con, "SELECT * FROM users where id = $user_id");
while($row = mysqli_fetch_array($result)){
$name = $row['name'];	
$address = $row['address'];
$contact = $row['contact'];
$verified = $row['verified'];

}
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
        <link rel="stylesheet" type="text/css" href="style/adminstyle.css?<?php echo time(); ?>">

        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css?<?php echo time(); ?>">
		    <link rel="stylesheet" type="text/css" href="style/css/grayscale.min.css?<?php echo time(); ?>">
        <link rel="stylesheet" type="text/css" href="style/registerstyle.css?<?php echo time(); ?>">

      <script>
        function checkOption(obj) {
    var input = document.querySelectorAll('[name="cc_number"],[name="cvv_number"] ');
    for(var i=0; i < input.length; i++) {
     input[i].disabled = !(obj.value == "Wallet")
    }
}

      </script>

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
            .pointer {}
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
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          
        
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
        </div>
       
      
        
        </ul>
      
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
                   <div class="col-md-8 col-sm-10 offset-sm-1 offset-md-2"><br> <br>
                   <h4>Provide required delivery and payment details.</h4>

				    
<!--start container-->
          <div class="login" style="color: black;">
            <form class="formValidate login-form" id="formValidate" method="post" action="confirm-order.php" novalidate="novalidate">
            <div class="alert alert-warning alert-dismissible fade show">
                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                            Please fill the following information.
            </div>
            
            
                    <label for="exampleFormControlSelect1">Payment Type</label>
                    <div class="input-group">
                    <select class="form-control" onChange="checkOption(this)" id="exampleFormControlSelect1" name="payment_type">
                          <option class="form-control" value="Cash On Delivery" <?php if(!$verified) echo 'disabled';?>selected>Cash on Delivery</option>							
                           <option class="form-control" value="Wallet" >Wallet</option>
                    </select>
                </div>
           		
         
                <label for="address">Address</label>
                <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-home" aria-hidden="true"></i></span>
                  <textarea class="form-control" name="address" id="address" class="materialize-textarea validate"><?php echo $address;?></textarea>
                </div>
           

         
             <label for="cc_number">Card Number</label>
             <div class="input-group">
                    <span class="input-group-text">
                      <i class="fa fa-credit-card"></i></span>
                <input class="form-control" name="cc_number" id="cc_number" type="text" disabled>
                </div>
            

            <label data-toggle="tooltip" title="3 digits code on back side of the card" data-original-title="">CVV <i class="fa fa-question-circle"></i></label>
        <div class="form-group">
        
        <input style="display: inline" class="form-control col-5" name="cvv_number" id="cvv_number" type="text" disabled>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Preview your recipe
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Estimated Receipt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
	
<div class="container">
  
  <div class="divider"></div>
<div id="work-collections" class="section">
<div class="row">
<div>
<ul id="issues-collection" class="list-group list-group-flush" style="background-color: #818181;">
<?php
echo '<li class="list-group-item list-group-item-secondary">
<p><strong>Name:</strong>'.$name.'</p>
<p><strong>Contact Number:</strong> '.$contact.'</p>';

foreach ($_POST as $key => $value)
{
if($value == ''){
    continue;
}
if(is_numeric($key)){
$result = mysqli_query($con, "SELECT * FROM items WHERE id = $key");
while($row = mysqli_fetch_array($result))
{
    $price = $row['price'];
    $item_name = $row['name'];
    $item_id = $row['id'];
}
    $price = $value*$price;
    
echo '<li class="list-group-item">
<div class="row">
 <div class="col s7">
    <p class="title"><strong>'.$item_id.'. </strong>'.$item_name.'</p>
 </div>
 <div class="col s2">
    <span>'.$value.' Pieces</span>
 </div>
 <div class="col s3">
    <span>$ '.$price.'</span>
 </div>
</div>
      </li>';
$total = $total + $price;
}
}
echo '<li class="list-group-item list-group-item-secondary">
<div class="row">
    <div class="col s7">
        <p class="list-group"> Total</p>
    </div>
    <div class="col s2">
        <span>&nbsp;</span>
    </div>
    <div class="col s3">
        <span><strong>$ '.$total.'</strong></span>
    </div>
</div>
</li>';

?>
</ul>
        </div>
        </div>
        </div>
      </div>
    </div>
</div>
<div class="modal-footer">
        <button style="cursor: pointer;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
      </div>
      
    </div>
  </div>
</div> <button class="btn btn-secondary" type="submit" name="action">Submit</button>
                </div>
              			  
               
      
              <?php
                  foreach ($_POST as $key => $value)
                {
                    if($key == 'action' || $value == ''){
                        break;
                    }
                    echo '<input name="'.$key.'" type="hidden" value="'.$value.'">';
                }
              ?>
          </form>
</div> <!-- card-body.// -->
</article> <!-- card.// -->


	</aside> <!-- col.// -->
<!--end container-->

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
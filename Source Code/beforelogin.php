	<!DOCTYPE html>
	<html>
	<head>
		<title>final</title>
		<link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" type="text/css" href="css/style1.css">
		<link rel="stylesheet" type="text/css" href="css/stylefornotindex.css">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/font-awesome.min.css">
		
		<style type="text/css">
			
				 #container{
				 	background-color: red;
				 	background: linear-gradient(to right, #16222a, #3a6073);
				 	height: 600px;
				 	width: 100%;
				 }
				 #warning{
				 	box-sizing: border-box;
				 	border-radius: 5px;
				 	background: yellow;
				 }
				 #login1{
				 	bottom: 15%;
				 	right: 15%;
				 	background: linear-gradient(to right, #00d2ff, #3a7bd5);
				 	width: 20%;
				 }
				 #login{
				 background: linear-gradient(to right, #870000, #190a05); 
				 bottom: 15%;
				 	left: 15%;
				 	width: 20%;
				 }
				 #text{
				 	font-family: luna;
				 	text-align: center;
				 	font-size: 150%;
				 }
		</style>
	</head>

	<body >
		<?php include('include/headerfornotindex.php');?>

	<div class="navbar">
	  <a  href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
	  <a href="products.php"><i class="fab fa-product-hunt"></i> Products</a> 
	  <a href="beforelogin.php" class="active"><i class="fab fa-hotjar"></i> Book Online</a> 
	  
	  <a href="#"><i class="fas fa-building"></i>Nearby Dealerships</a>
	  <a href="aboutus.php" ><i class="fas fa-address-card"></i></i>About Us</a>
	  <a href="contactus.php"><i class="fas fa-user-ninja"></i>Contact Us</a>    
	    <a href="loginpage.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i>Login</a>
	</div>
	<div id="container">
	<div warning>
		<form>
			<div id="text"><p>Please Login Before Ordering</p></div>
			<button id="login"><a href="loginpage.php">Login</a></button>
			<button id="login1"><a href="loginpage.php/#sign-up-htm">Sign Up!</a></button>	
		</form>
	</div>
	</div>
	
	<?php include('include/foot.php');?>




			

	</body>
	</html>
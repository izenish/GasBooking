	
<?php

if (isset($_POST['book'])) {
	// echo "Nepal";exit();
	$u = $_POST['username'];
	$b = $_POST['brand'];
	$q = $_POST['quantity'];
	$a = $_POST['address'];
	// echo 'U: '.$u.', E: '.$e.', P: '.$p;
	// exit(0);
	

	$sql = "INSERT INTO `booking` (`username`, `brand`,`quantity`,`address`)
VALUES ('$u','$b','$q','$a')";
//echo $sql;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gassakyo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
    echo "Booking Confirmed";
    // header('Location: list_user.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>final</title>
		<link rel="stylesheet" href="style.css">
            <link rel="stylesheet" type="text/css" href="css/style1.css">
		<link rel="stylesheet" type="text/css" href="css/stylefornotindex.css">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/font-awesome.min.css">
		
		<style type="text/css">

			input[type=text]{
				border: 3px solid #555;
				width: 30%;
				height: 25px;
			}
			
			#booking{
				margin-left: 20%;
				margin-top: 3%;
				font-family: poppins;
				font-size: 30px;
			}
				 
				 #button{
				 	background: linear-gradient(to right, #ff4e50, #f9d423);
				 	width: 50%;
				 	height: 40px;
				 }
		</style>
	</head>

	<body >
		<?php include('include/headerfornotindex.php');?>

	<div class="navbar">
	  <a  href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
	  <a href="products.php"><i class="fab fa-product-hunt"></i> Products</a> 
	  <a href="afterlogin.php" class="active"><i class="fab fa-hotjar"></i> Book Online</a> 
	  
	  <a href="#"><i class="fas fa-building"></i>Nearby Dealerships</a>
	  <a href="aboutus.php" ><i class="fas fa-address-card"></i></i>About Us</a>
	  <a href="contactus.php"><i class="fas fa-user-ninja"></i>Contact Us</a>    
	    <a href="logout.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i>Log Out</a>
	</div>
	<div id="booking">
		<form name="book" method="POST">
			Username:<br>
			<input type="text" name="username"><br>
			Brand:<br>
			<input type="text" name="brand"><br>
			Quantity:<br>
			<input type="text" name="quantity"><br>
			Address:<br>
			<input type="text" name="address">
			<br>
			<input type="submit" name="book" value="Book Now" id="button">
		</form>
	</div>
	
	<?php include('include/foot.php');?>




			

	</body>
	</html>
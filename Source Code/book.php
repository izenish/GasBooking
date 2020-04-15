<?php
if(isset($_COOKIE["member_login"])){	
	if(empty($_SESSION)) // if the session not yet started
   			session_start();
		$_SESSION['username'] = $_COOKIE["member_login"];
	echo "<script>window.location='userlogin.php';</script>";
	exit;
}

if(isset($_POST['submit'])){
	// echo "Nepal";exit;
	$u = $_POST['username'];
	$p = md5($_POST['pass']);

	$sql = "SELECT * FROM `user` WHERE (`username`='$u' OR `email`='$u') AND `password`='$p' AND `status`=1 AND `is_verified`=1;";
	//echo $sql;
	require_once('DBConnect.php');
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// echo "Login Successful";exit;
		if(empty($_SESSION)) // if the session not yet started
   			session_start();
		$_SESSION['username'] = $u;
		$row = mysqli_fetch_assoc($result);
		//echo "<pre>"; print_r($row);exit;
		$_SESSION['u_id'] = $row['id'];
		if(!empty($_POST["remember_me"])) {
				setcookie ("member_login",$_POST["username"],time()+(60 * 60)); /* expire in 1 hour */
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				}
			}
		echo "<script>window.location='userlogin.php';</script>";		
        exit; 
	}else{
		echo "<script>alert('Username or Password Incorrect!');</script>";
		echo "<script>window.location='book.php';</script>";
		exit;
	}
	
}
?>
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
			#detail{
				font-family: poppins;
				margin-left: 09%;
				font-size: 40px;
				height: 100%;
				float: left;
			}
			.content{
				font-size: 15px;
			}
			tr:nth-child(even){
				background-color: skyblue;
				color: white;
			}	
			#login{
				margin-top: 50px;
				margin-left: 2%;
			}	 
		</style>
	</head>

	<body >
		<?php include('include/headerfornotindex.php');?>

	<div class="navbar">
	  <a  href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
	  <a href="products.php"><i class="fab fa-product-hunt"></i> Products</a> 
	  <a href="book.php" class="active"><i class="fab fa-hotjar"></i> Book Online</a> 
	  
	  <a href="#"><i class="fas fa-building"></i>Nearby Dealerships</a>
	  <a href="aboutus.php" ><i class="fas fa-address-card"></i></i>About Us</a>
	  <a href="contactus.php"><i class="fas fa-user-ninja"></i>Contact Us</a>    
	    <a href="loginpage.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i>Login</a>
	</div>
	<div id="detail">
		
		<?php
// echo "Nepal";exit();
require_once("DBConnect.php");

$sql = "SELECT * FROM `gas` WHERE 1 Limit 0, 10";
$result = mysqli_query($conn, $sql);
// $data = mysqli_num_rows($result);
// echo "<pre>"; print_r($result); exit();
?>



        <div class="content">
<h1>Dealder</h1>
<table border="1" cellspacing="0" cellpadding="20">
    <tr>
        <th>S.N.</th>
        <th>Provider</th>
        <th>Location</th>
        <th>Stock</th>
        <th>Brand</th>
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //$user_list = mysqli_fetch_assoc($result);
    // echo "<pre>"; print_r($user_list);exit;
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";

?>
    <tr>
        <td><?= ++$i;?></td>
        <td><?= $row["provider"];?></td>
        <td><?= $row["location"];?></td>
        <td><?= $row["stock"];?></td>
        <td><?= $row["brand"];?></td>
    </tr>
<?php
    }   
} else {
    ?>
    <tr>
        <td colspan="3">No Record(s) found.</td>
    </tr>
    <?php
}
?>
<?php 
mysqli_close($conn);
?></div>
</table>
            
        
	
</div>
</div>
	<div id="login" style="float: right; margin-right: 30%;">
		<form action="" method="POST">
		<input type="text" name="username" placeholder="username"><br>
		<input type="password" name="pass" placeholder="passowrd"><br>
		<input type="submit" name="submit" value="Submit">
		</form>
	</div>
	




			

	</body>
	</html>
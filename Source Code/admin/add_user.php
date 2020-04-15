<?php include 'navbar.php' ?>	
<?php

if (isset($_POST['add_user'])) {
	// echo "Nepal";exit();
	$f = $_POST['firstname'];
	$l = $_POST['lastname'];
	$u = $_POST['username'];
	$e = $_POST['email'];
	$p = $_POST['password'];
	// echo 'U: '.$u.', E: '.$e.', P: '.$p;exit;
	$sql = "INSERT INTO `user` (`firstname`,`lastname`,`username`, `email`,`password`)
VALUES ('$f','$l','$u', '$e', md5('$p'))";
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
	echo "<script>alert('New record created successfully.');</script>";
		echo "<script>window.location='add_user.php';</script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<div class="grid">
		<div>
			<?php include 'navbar.php' ?>
		</div>
		<div class="content">
			<div id="box">
				<form action="" method="POST" name="user">
<table cellspacing="7">
	<tr>
		<th colspan="2"><h1>Add User</h1></th>
	</tr>
		<tr>
		<td class="green">First name:</td>
		<td><input type="text"  name="firstname" required="required"></td>
	</tr>
		<tr>
		<td class="green">Last name:</td>
		<td><input type="text"  name="lastname" required="required"></td>
	</tr>
	<tr>
		<td class="green">Username:</td>
		<td><input type="text" name="username" required="required"></td>
	</tr>
	<tr>
		<td class="green">Email:</td>
		<td><input type="email" name="email"  required="required"></td>
	</tr>
	<tr>
		<td class="green">Password:</td>
		<td><input type="password"  name="password" required="required"></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="add_user" value="ADD USER"></td>
	</tr>
</table>
</form>
			</div>

			
		</div>
		</div>
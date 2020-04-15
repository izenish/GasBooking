<?php

if (isset($_POST['add_stock'])) {
	// echo "Nepal";exit();
	$u = $_POST['gname'];
	$e = $_POST['quantity'];
	// $p = $_POST['patient'];
	// $re_p = $_POST['password-re'];
	// echo 'U: '.$u.', E: '.$e.', P: '.$p;exit;
	
	$sql = "INSERT INTO `stock` (`Brand`, `Availability`)
VALUES ('$u', '$e')";
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
    echo "New record created successfully.";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>


<h1>Manage Stock</h1>
<form action="" method="POST" name="user">
<table>
	<tr>
		<td>Brand</td>
		<td><input type="text" name="gname" placeholder="Nepal Gas" required="required"></td>
	</tr>
	<tr>
		<td>Number Of Stock</td>
		<td><input type="text" name="quantity" value=" " required="required"></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="add_stock" value="Add Stock"></td>
	</tr>
</table>
</form>
			
		</div>
	
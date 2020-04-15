<?php
// echo $_COOKIE["member_login"];exit;
if(empty($_SESSION)) // if the session not yet started
   session_start();

if(!isset($_SESSION['username'])) {
	echo "<script>window.location='login.php';</script>";
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dash Board</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/png" href="images/1.png">
</head>
<body>
	<center><h1 style="font-family: poppins;font-size: 45px;">Dashboard</h1></center>
	<span style="float: right; margin-right: 10px;color: #fff;">Welcome <?= ucwords($_SESSION['username']);?>!</span></p><br>
	<div class="content" style="margin-top: -2%;">
<div id="im" style="background:#2874A6;">Add User<a href="add_user.php"><img src="images/listuser.png"  title="ADD USER"></a></div>
<div id="im" style="background: #239B56;">Manage User<a href="manage_user.php"><img src="images/manageuser.png"  title="MANAGE USER"></a></div>
<div id="im" style="background: #C70039;">View Stock<a href="liststock.php"><img src="images/liststock.png"  title="ADD CONTENT"></a></div>
<div id="im" style="background: #900C3F;">Manage Stock<a href="managestock.php"><img src="images/managestock.png" title="MANAGE CONTENT"></a></div>
<div id="im" style="background: #f7955b;">Homepage<a href="../main.php"><img src="images/homepage.png"  title="HOMEPAGE"></a></div>
<div id="im" style="background: #342f66">Logout<a href="../logout.php"><img src="images/log_out.png"  title="LOG-OUT"></a></div>
</div>
<div style="float: right;margin-top: -390px;">
	<div style="color: white;font-size: 10px;"><iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=333333&aj_time=yes&font_size=12&line_brake=0&api=890182j592" width="334" height="22"  ></iframe>
	</div>
	<div><iframe src="http://nepalicalendar.rat32.com/embed/index.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden;height: 400px; " allowtransparency="true"></iframe></div>
 </div>
</body>
</html>

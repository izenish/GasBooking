<?php
error_reporting(0);
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be less than or equal to 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"files/".$file_name);

         $sql = "INSERT INTO `files` (`title`) VALUES ('$file_name');";
         $server = "localhost";
$username = "root";
$pwd = "";
$db = "project_db";

// Create connection
$conn = mysqli_connect($server, $username, $pwd, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('File uploaded successfully!');</script>";
            echo "<script>window.location='upload_file.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
         
      }else{
         print_r($errors);
      }
   }
?>

<?php
// echo "Nepal";exit();
$server = "localhost";
$username = "root";
$pwd = "";
$db = "project_db";

// Create connection
$conn = mysqli_connect($server, $username, $pwd, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `content` WHERE 1 Limit 0, 10";
$result = mysqli_query($conn, $sql);
// $data = mysqli_num_rows($result);
// echo "<pre>"; print_r($result); exit();
?>
<div class="grid">
  <div><?php include 'navbar.php'  ?></div>
        <div class="content">

<h1>Manage Contents</h1>
<!-- <form action="" method="POST">
 <input type="text" placeholder="Any Keyword ..." name="key" />
 <input type="submit" value="Search" />
</form> -->
<br>
<table border="1" cellspacing="0" cellpadding="20" width="100%">
    <tr>
        <th>S.N.</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Action</th>
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
        <td style="text-align: center;"><?= ++$i;?></td>
        <td><?= $row["title"];?></td>
        <td><?= $row["description"];?></td>
        <td><?= $row["created_at"];?></td>
        <td style="text-align: center;"><a style="color: #00F; text-decoration: none;"  href="edit_about.php?id=<?= $row['id'];?>">&#9998;</a>&nbsp;<a style="color: #F00; text-decoration: none;" onclick="return confirm('Are you sure you want to delete this file?')" href="delete_content.php?id=<?= $row['id'];?>">&#10008;</a></td>
    </tr>
<?php
    }   
} else {
    ?>
    <tr>
        <td colspan="5">No Record(s) found.</td>
    </tr>
    <?php
}
?>
<?php 
mysqli_close($conn);
?>
</table>
            
        </div>
        
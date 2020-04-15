<?php
// echo "Nepal";exit();
require_once("DBConnect.php");

$sql = "SELECT * FROM `stock` WHERE 1 Limit 0, 10";
$result = mysqli_query($conn, $sql);
// $data = mysqli_num_rows($result);
// echo "<pre>"; print_r($result); exit();
?>


<h1>Stock Remaining</h1>

<table border="1" cellspacing="0" cellpadding="20">
    <tr>
        <th>S.N.</th>
        <th>Brand</th>
        <th>Availability(STOCK)</th>
        
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
        <td><?= $row["Brand"];?></td>
        <td><?= $row["Availability"];?></td>
      
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
?>
</table>
            
        </div>
   
<?php
 include 'connection.php';
 $ids =$_GET['idth'];
$deletequery = "delete from job where ID = $ids";
$query = mysqli_query($con,$deletequery);
header('location:display.php');
 ?>

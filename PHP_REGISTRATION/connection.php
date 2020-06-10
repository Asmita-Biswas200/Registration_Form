<?php
$username ='root';
$password ='root';
$server = 'localhost';
$db = 'job_reg';

$con = mysqli_connect($server,$username,$password,$db);
if($con){
  /*echo "connection Successful";
}*/?>

<script>
alert("connection successful");
</script>
<?php
}else{
  //echo "No connection";
  die("no connection" . mysqli_connect_error());
}
 ?>

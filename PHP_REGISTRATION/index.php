<!DOCTYPE html>
<html lang="en">
<head>
  <title>registration_form</title>
  <?php include 'links.php' ?>
<link rel="stylesheet" href="style.css">
</head>


<body>
<div class="container">
  <div class="row">
    <div class="col-md3-left">
      <img src="" alt="">

      <h3>Welcome</h3>
      <p>please fill the deatils  carefully</p>
      <a href="display.php">check form</a>  <br/>
    </div>
<div class="col-md9-right">
  <div class="tab-content" id="mycontent">
    <div class="tab_fan_fade_show_active" id="home" role="tabpanel">
       <h2 class="headin2">Apply for web developer post</h2>
          <form action="" method="post">
             <div class="row_register_form">
               <div class="col-md-6">
                     <div class="form_group">
                         <input type="text" class="form-control" placeholder="Enter your name *" name="user" value="" required/>
                       </div>

                      <div class="form_group">
                          <input type="tel" class="form-control" placeholder="Enter mobile number *"  name="mobile" value="" required/ >
                       </div>

                      <div class="form_group">
                           <input type="text" class="form-control" placeholder="Reference *"  name="refer" value="" required/ >
                        </div>

                     <div class="form_group">
                         <input type="text" class="form-control" placeholder="Enter your qualification *" name="degree" value="" required/>
                       </div>
                </div>

            <div class="col-md-6">
               <div class="form_group">
                  <input type="text" class="form-control" placeholder="enter applied post *"  name="post" value="web developer" />
                </div>

              <div class="form_group">
                 <input type="email" class="form-control" placeholder="enter your email *"  name="email" value="" required/>
              </div>

            <div>
                <input type="text" class="form-control" name="y_o_p" placeholder="year_of_passing">
            </div>


                 <input type="submit" class ="cregister" name="submit" value="register">
           </div>
         </div>
       </form>
       </div>
      </div>
     </div>
    </div>
   </div>

</body>
</html>

<?php
include 'connection.php';

if(isset($_POST['submit'])){
  $a =$_POST['user'];
  $b =$_POST['mobile'];
  $c=$_POST['degree'];
  $d=$_POST['post'];
  $e=$_POST['email'];
  $f = $_POST['y_o_p'];
  $g = $_POST['refer'];

  $insert_query = "insert into job(NAME, DEGREE, YEAR_OF_PASSING, MOBILE, EMAIL, REFER, POST) values ('$a','$c','$f','$b','$e','$g','$d')";

  $res = mysqli_query($con,$insert_query);
  if($res){
?>
    <script>
        alert("data inserted properly");
    </script>

<?php
  }else{
?>
     <script>
        alert("data not inserted");
     </script>
<?php
   }
}
?>

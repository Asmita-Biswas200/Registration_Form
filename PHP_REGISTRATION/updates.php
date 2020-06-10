<?php  ?>
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

               <?php
               include 'connection.php';

               $ids = $_GET['id'];
               $showquery = "select * from job where id = {$ids}";
               $showdata = mysqli_query($con,$showquery);
               $arrdata = mysqli_fetch_array($showdata);


               if(isset($_POST['submit'])){

                  $idupdate = $_GET['id'];

                 $a =$_POST['user'];
                 $b =$_POST['mobile'];
                 $c=$_POST['degree'];
                 $d=$_POST['post'];
                 $e=$_POST['email'];
                 $f = $_POST['y_o_p'];
                 $g = $_POST['refer'];
        // $insert_query = "insert into job(NAME, DEGREE, YEAR_OF_PASSING, MOBILE, EMAIL, REFER, POST) values ('$a','$c','$f','$b','$e','$g','$d')";
        $updatequery ="update job set ID=$idupdate, NAME ='$a',DEGREE='$c',MOBILE ='$b',POST='$d',REFER= '$g',EMAIL = '$e', YEAR_OF_PASSING='$f' where ID = $idupdate ";

                 $res = mysqli_query($con,$updatequery );
                 if($res){
               ?>
                   <script>
                       alert("data updated properly");
                   </script>

               <?php
                 }else{
               ?>
                    <script>
                       alert("data not updated");
                    </script>
               <?php
                  }
               }
               ?>





               <div class="col-md-6">
                     <div class="form_group">
                         <input type="text" class="form-control" placeholder="Enter your name *" name="user" value=" <?php echo $arrdata['NAME'] ?>" required/>
                       </div>

                      <div class="form_group">
                          <input type="tel" class="form-control" placeholder="Enter mobile number *"  name="mobile" value=" <?php echo $arrdata['MOBILE'] ?>" required/ >
                       </div>

                      <div class="form_group">
                           <input type="text" class="form-control" placeholder="Reference *"  name="refer" value="<?php echo $arrdata['REFER'] ?>" required/ >
                        </div>

                     <div class="form_group">
                         <input type="text" class="form-control" placeholder="Enter your qualification *" name="degree" value=" <?php echo $arrdata['DEGREE'] ?>" required/>
                       </div>
                </div>

            <div class="col-md-6">
               <div class="form_group">
                  <input type="text" class="form-control" placeholder="enter applied post *"  name="post" value="web developer" />
                </div>

              <div class="form_group">
                 <input type="email" class="form-control" placeholder="enter your email *"  name="email" value=" <?php echo $arrdata['EMAIL'] ?>" required/>
              </div>

            <div>
                <input type="text" class="form-control" name="y_o_p" placeholder="year_of_passing" value=" <?php echo $arrdata['YEAR_OF_PASSING'] ?>">
            </div>


                 <input type="submit" class ="cregister" name="submit" value="update">
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

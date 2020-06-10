

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'links.php'; ?>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <div class="main-div">
          <h3>List of candidates for web developer</h3>
             <div class="center-div">
                 <div class="table-responsive">
                     <table>
                       <thead>
                         <tr>
                            <th>Id</th>
                             <th>Name</th>
                             <th>Degree</th>
                             <th>year_of_passing</th>
                             <th>mobile</th>
                             <th>>email</th>
                             <th>Refer</th>
                             <th>Post</th>
                             <th colspan="2">Operation</th>
                         </tr>
                       </thead>

                       <tbody>

                         <?php

                         include 'connection.php';


                         $select_query ="select * from job ";

                         $query = mysqli_query($con,$select_query);
                         $nums = mysqli_num_rows($query);
                         //echo $nums;
                         //$res = mysqli_fetch_array($query);
                         //echo $res[7];

                         while($res = mysqli_fetch_array($query)){
                           ?>
                           <tr>
                             <td><?php echo $res['ID'] ?></td>
                             <td><?php echo $res['NAME'] ?></td>
                             <td><?php echo $res['DEGREE'] ?></td>
                             <td><?php echo $res['YEAR_OF_PASSING'] ?></td>
                             <td><?php echo $res['MOBILE'] ?></td>
                             <td><span class="email-style">  <?php echo $res['EMAIL']; ?>  </span></td>
                             <td><?php echo $res['REFER'] ?></thd>
                             <td><?php echo $res['POST'] ?></th>
                             <td><a href="updates.php?id=<?php echo $res['ID'] ?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>

                             <td><a href="delete.php?idth=<?php echo $res['ID'] ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                           </tr>
                           <?php
                         }
                          ?>

                       </tbody>
                     </table>
                 </div>
          </div>
        </div>

        <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
  </body>
</html>

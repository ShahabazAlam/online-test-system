<?php
$uid=$_GET["uid"];
include("connection1.php");
  $qry="UPDATE `user` SET `status` = '1' WHERE `user`.`id` = '$uid'";
  $run2 = mysqli_query($con,$qry);
  if($run2 == true)
    {
                    ?>
                     <script>alert("User Locked");
                     window.open("AllUsers.php","_self");</script>
                     <?php
    }
   else
    {
                    ?>
                     <script>alert("Operation Failed");
                     window.open("AllUsers.php","_self");</script>
                     <?php
    }
?>
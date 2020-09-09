<?php
session_start();
$session_id=$_SESSION['$sid'];
include("connection1.php");
$qry3="DELETE FROM `user_online` WHERE `session_id` = $session_id";
mysqli_query($con,$qry3);
session_destroy();
header("location:index.php");
  ?>
<?php
$session_id=$_SESSION['$sid'];
$time_value=time();
$qry2 ="SELECT * FROM user_online WHERE session_id = '$session_id'";
 $run2 = mysqli_query($con,$qry2);
 $count2= mysqli_num_rows ($run2); 
if($count2 == 0 )
{

    $qry="INSERT INTO user_online (id, session_id, login_time) VALUES (NULL,'$session_id','$time_value')";
     mysqli_query($con,$qry);
}
else
{
  $qry1="UPDATE user_online SET login_time = '$time_value' WHERE session_id ='$session_id'";
     mysqli_query($con,$qry1);
}

?>


<?php

               session_start();
              if(isset($_SESSION['$sid']))
              {
                header("location:main.php");
                exit();
              }
                include("connection1.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>DOP-KAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <div class="row">
   <div class="col-md-12">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
       </button>
      <a class="navbar-brand" href="#">DOP-KAT</a>
     </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li class="active">
     <li class="active">
        <a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="AdminPanel/LoginAdmin.php">Admin Panel</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</nav>
<div class="jumbotron">
   <div class="container">    
     <div id="loginbox" style="margin-top:10px;" class="mainbox col-md-4 col-md-offset-4 col-xs12 col-xs-offset-0">
      <form method="POST" action="index.php" name="vform" >                    
        <div class="panel panel-info" >
           <div class="panel-heading">
             <div class="panel-title"><strong>Sign In:User</strong></div>
           </div>     
               <div style="padding-top:30px" class="panel-body" >
                 <div style="display:none" id="login-alert" class="alert alert-danger col-xs-12"></div>
                            
                      
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                       <select  class="form-control" name="uname">
            <option value="">Select User: 

   <!---------------------------------------------------------------------------------------------->
                    <?php
                             $qry2="SELECT * FROM `user`";
                             $run2 = mysqli_query($con,$qry2);
                             $count=mysqli_num_rows($run2);
                            for($i=0;$i<$count;$i++)
                       {
                              $data1=mysqli_fetch_assoc($run2);
                    ?>
                              <option><?php echo $data1['user']?></option>
                              <?php    
                        }
                    ?>

    <!---------------------------------------------------------------------------------------------->
                            </select>                                        
                         </div>
                                
                                  <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                  </div>
                                      <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" name="submit" value="LogIn" class="btn btn-success">
                                    </div>
                                </div>    
                     
                          </div>                     
                      </div> 
                             </form>   
                   </div>
                 </div>
                 </div>
<!----------------------------------------------------------------------------------------------->
     <?php
              if(isset($_POST["submit"]))
           {
                   $uname = $_POST["uname"];
                   $pass = $_POST["password"];
                   $qry2="SELECT * FROM `user` WHERE user = '$uname' AND password = '$pass'";
                   $run2 = mysqli_query($con,$qry2);
                   $count=mysqli_num_rows($run2); 
               if($count < 1)
             {
        ?>
                    <script>
                    alert("Incorrect Username or Password");
                    window.open("index.php","_self");
                    </script>
       <?php
              }
                 else
              {
                    $datarow = mysqli_fetch_assoc($run2);
                    $id = $datarow['id'];
                    $user = $datarow['user'];

                    $qry3="SELECT * FROM `user` WHERE id = '$id' AND status= '1'";
                    $run3 = mysqli_query($con,$qry3);
                    $count1=mysqli_num_rows($run3); 
                 if($count1 == 1)
               {
                
              ?>          <script>
                         window.open("youarelocked.php","_self");
                        </script>
              <?php
                }
                  else
                {
                        $_SESSION['$sid']=$id;
                        $_SESSION['$name']=$user;
                       $qry="INSERT INTO `totalvisit` (`id`, `s_id`,`user_id`) VALUES (NULL, '1','$id')";
                         mysqli_query($con,$qry);
                        $qry1="UPDATE `user` SET `status` = '1' WHERE `user`.`id` = '$id'";
                          $run2 = mysqli_query($con,$qry1);
           ?>
                         <script>
                         window.open("main.php","_self");
                        </script>
         <?php                
                   }  
                   }
                 }
            ?>
<!----------------------------------------------------------------------------------------------->
<footer class="container-fluid" style="background-color:black;">
 <center><p style="color:white">Copyright &copy; DOP-KAT-2019</p></center>
</footer>
</body>
</html>

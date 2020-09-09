<?php

              session_start();
              if(!isset($_SESSION['$email']))
              {
                header("location:../index.php");
                exit();
              }
                include("../connection1.php");
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
<link rel="stylesheet" href="Dashboard.css">
</head>
<body>
<div class="container-fluid text-center">    
  <div class="row content">
    <nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
       </button>
         <a class="navbar-brand" href="#">DashBoard</a>
     </div>


    <!-- Collect the nav links, forms, and other content for toggling -->


       <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
        <li><a href="Dashboard.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li ><a href="AllUsers.php">All-Users<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
         <li ><a href="AllAdmins.php">All-Admin<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
        <li ><a href="AllQues.php">All-Questions<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>
        <li ><a href="Result.php">Results<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="AddQues.php">Add Quesstion</a></li>
            <li><a href="AllQues.php">Delete Quesstion</a></li>
             <li><a href="RegAdmin.php">Add Admin</a></li>
             <li><a href="UserReg.php">Add User</a></li>
             <li class="divider"></li>
            <li><a href="LogOutAdmin.php"><strong>LogOut</strong></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div>
<center><h2> WELCOME TO ADMIN PANEL</h2></center>
</div>
    <div class="col-md-8 col-md-offset-0 col-xs-12 col-xs-offset-0 "> 
        <?php
                     include("connection1.php");
                     $qry2="SELECT * FROM `user`";
                     $run2 = mysqli_query($con,$qry2);
                     $users=mysqli_num_rows($run2);

                     $qry2="SELECT * FROM `questions`";
                     $run2 = mysqli_query($con,$qry2);
                     $questions=mysqli_num_rows($run2);

                     $qry2="SELECT * FROM `totalvisit`";
                     $run2 = mysqli_query($con,$qry2);
                     $TotalVisit=mysqli_num_rows($run2);

                     ?>


<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="col-md-4 col-xs-12">
      <div class="dash-box dash-box-color-1">
        <div class="dash-box-icon">
          <i class="glyphicon glyphicon-cloud"></i>
        </div>
        <div class="dash-box-body">
          <span class="dash-box-count"><?php echo $users; ?></span>
          <span class="dash-box-title">Total Users</span>
        </div>      
      </div>
    </div>
    <div class="col-md-4 col-xs-12">
      <div class="dash-box dash-box-color-2">
        <div class="dash-box-icon">
          <i class="glyphicon glyphicon-download"></i>
        </div>
        <div class="dash-box-body">
          <span class="dash-box-count"><?php echo $questions; ?></span>
          <span class="dash-box-title">Total Questions</span>
        </div>      
      </div>
    </div>
    <div class="col-md-4 col-xs-12">
      <div class="dash-box dash-box-color-3">
        <div class="dash-box-icon">
          <i class="glyphicon glyphicon-heart"></i>
        </div>
        <div class="dash-box-body">
          <span class="dash-box-count"><?php echo $TotalVisit; ?></span>
          <span class="dash-box-title">Total-Visit-User</span>
        </div>       
      </div>
    </div>
  </div>
</div>
 </div>
</div>

<footer class="container-fluid text-center">
 <p> Copyright &copy; DOP-KAT-2019</p>
 <?php
                    $qry2="SELECT * FROM `user_online`";
                     $run2 = mysqli_query($con,$qry2);
                     $TotalOnline=mysqli_num_rows($run2);
  ?>
 <p><strong>Online Now-<?php echo $TotalOnline; ?></strong></p>
</footer>


<!-- javascript -->

<script type="text/javascript">
 function htmlbodyHeightUpdate(){
    var height3 = $( window ).height()
    var height1 = $('.nav').height()+50
    height2 = $('.main').height()
    if(height2 > height3){
      $('html').height(Math.max(height1,height3,height2)+10);
      $('body').height(Math.max(height1,height3,height2)+10);
    }
    else
    {
      $('html').height(Math.max(height1,height3,height2));
      $('body').height(Math.max(height1,height3,height2));
    }
    
  }
  $(document).ready(function () {
    htmlbodyHeightUpdate()
    $( window ).resize(function() {
      htmlbodyHeightUpdate()
    });
    $( window ).scroll(function() {
      height2 = $('.main').height()
        htmlbodyHeightUpdate()
    });
  });
</script>
</body>
</html>

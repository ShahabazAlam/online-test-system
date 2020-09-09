<?php

              session_start();
              if(!isset($_SESSION['$email']))
              {
                header("location:../index.php");
                exit();
              }
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
      <li><a href="Dashboard.php"><strong>Home</strong></a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</nav>
<div class="jumbotron">
   <div class="container">    
     <div id="loginbox" style="margin-top:10px;" class="mainbox col-md-4 col-md-offset-4 col-xs-12 col-xs-offset-0">
      <form method="POST" action="RegistrationUser.php" name="vform" >                    
        <div class="panel panel-info" >
           <div class="panel-heading">
             <div class="panel-title"><strong>User:Registration</strong></div>
           </div>     
               <div style="padding-top:30px" class="panel-body" >
                 <div style="display:none" id="login-alert" class="alert alert-danger col-xs-12"></div>
                      <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Enter Username">                                        
                                    </div>

                                  <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="email" type="email" class="form-control" name="email" placeholder="Enter Email">
                                  </div>
                                
                                  <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Enter Password">
                                  </div>
                                      <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" name="submit" value="Register" class="btn btn-success">
                                    </div>
                                </div>    
                            </div>                     
                       </div> 
                   </form>   
                   </div>
                 </div>
                 </div>
<!----------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------->
<footer class="container-fluid" style="background-color:black;">
 <center><p style="color:white">Copyright &copy; DOP-KAT-2019</p></center>
</footer>
</body>
</html>

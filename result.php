
<?php
                    session_start();
                   if(!isset($_SESSION['$sid']))
              {
                    header("location:index.php");
                    exit();
              }
                    if(!isset($_POST['radiobtn']))
              {
                    header("location:main.php");
                    exit();
            }
                    else
            {
                    include("connection1.php");

$point=0;
$marks=0;
                   foreach($_POST['radiobtn'] as $opt_num => $opt_val)
          {
                   if($opt_val==1)
          {
                   $point = $point + 1;
                   $marks = $marks + 100; 
          }
                           
         }
       }
 $name = $_SESSION['$name'];
 $qry ="INSERT INTO `result` (`id`,`Name`, `Marks`, `TotalCorrectAns`) VALUES (NULL,'$name', '$marks', '$point')";
        $run2 = mysqli_query($con,$qry);
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
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
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
        <li><a href="logout.php"><strong>Home</strong></a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8 text-left"> 
     <p style="margin-top:40px"><center> <h3>RESULT</h3></center></p>
      

   <hr>
<p style="margin-top:100px"> <center><strong><?php  echo "your total correct answer is ".$point."<br>";
   ?>
   <hr>
   <?php
echo "your total right marks is ".$marks;?></strong></center></p>
<hr>
</div>
<div class="col-sm-2 sidenav">
     </div>
  </div>
</div>

<footer class="container-fluid" style="background-color:black;">
 <center><p style="color:white">Copyright &copy; DIP-KAT-2019</p></center>

</body>
</html>

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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="AllUsers.css">
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
        <li><a href="Dashboard.php"><strong>Dashboard</strong></a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8"> 
     <div style="width:100%"><h2><b>Results</b></h2></div>
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><center>Name</center></th>
                         <th><center>Tota Correct Ans.</center></th>
                        <th><center>Marks</center></th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                     include("connection1.php");
                     $qry2="SELECT * FROM `result`";
                     $run2 = mysqli_query($con,$qry2);
                     $count=mysqli_num_rows($run2);
              if($count < 1 )
                   {
                    ?>
                     <script>alert("No Data Found");
                     window.open("Dashboard.php","_self");</script>
                     <?php
                   }
                else
                   {
                   for($i=0;$i<$count;$i++)
                   {
                   $data=mysqli_fetch_assoc($run2);
         ?>            <tr>
                        <td><?php echo $data['Name'];?></td>
                        <td><?php echo $data['TotalCorrectAns'];?></td>
                        <td><?php echo $data['Marks'];?></td>
                        <td>
              <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
               <a href="DeleteResult.php?uid=<?php echo $data['id']?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                         </tr>  
                 <?php
                      }
                    }
                  ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

<footer class="container-fluid text-center">
 <p>Copyright &copy; DOP-KAT-2019</p>
</footer>

</body>
</html>

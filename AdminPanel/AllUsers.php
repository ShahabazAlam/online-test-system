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
        <a href="Dashboard.php">Dashboard</a></li>
      </ul>
    </div>
  </div>
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
    <div style="width:100%"><h2>All Users</h2></div>
           <table class="table table-bordered">
                <thead>
                    <tr>
                       <th><center>ID</center></th>
                        <th><center>Name</center></th>
                        <th colspan="3" scope="colgroup"><center>Email</center></th>
                         <th><center>Action</center></th>
                        <th><center>Status</center></th>
                       
                    </tr>
                </thead>
                <tbody>
                  <?php
                     include("connection1.php");
                     $qry2="SELECT * FROM `user` ORDER BY `id`";
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
                while($data=mysqli_fetch_assoc($run2))
{
         ?>         <tr>
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['user'];?></td>
                    <td colspan="3"><?php echo $data['email'];?></td>
                    <td>
                     <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                     <a href="DeleteUser.php?uid=<?php echo $data['id']?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                      </td>
                      <td>
         <?php
                      $id = $data['id'];
                  $qry3="SELECT * FROM `user` WHERE id = '$id' AND status = '1'";
                    $run3 = mysqli_query($con,$qry3);
                    $count1=mysqli_num_rows($run3); 
                 if($count1 == 1)
                 {
          ?>
                  <a href="unlock.php?uid=<?php echo $data['id'];?>" class="btn btn-sm btn-danger"><span><i class="fa fa-lock"></i>                                                                          </span></a>
        <?php
                 }
                    else
                 {
          ?>      <a href="lock.php?uid=<?php echo $data['id'];?>" class="btn btn-sm btn-success"><span><i class="fa fa-unlock"></i>                                                                                  </span></a>
         <?php
                 }
          ?>
                
                    
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

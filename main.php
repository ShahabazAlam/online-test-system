           <?php

              session_start();
              if(!isset($_SESSION['$sid']))
              {
                header("location:index.php");
                exit();
              }
                $inactive = 600;
              if( !isset($_SESSION['timeout']) )
                $_SESSION['timeout'] = time() + $inactive; 

              $session_life = time() - $_SESSION['timeout'];

                if($session_life > $inactive)
            {  
               header('Location:logout.php');     
              }
              $_SESSION['timeout']=time();

               include("connection1.php");
             include("AdminPanel/OnlineUser.php");
             ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>DOP-KAT</title>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="601">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
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
        <li><a href="logout.php"><strong>LogOut</strong></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-md-2 col-xs-2 col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class=" col-md-8 col-md-offset-0 col-xs-8 col-xs-offset-0 text-left"> 
     <center><h3>Welcome To Knowledge Ability Test</h3><hr>
      <p>Associates have to answers the following question based on the Knowledge.</p></center>
      <hr>
         <p><center><strong><h3><?php echo $_SESSION['$name']; ?></h3></strong></center></p>
          <center>You Will Be LogOut In <p id="clockdiv"></p></center>
          <center><strong>Please Submit Your Result Within 10 Minutes</strong></center>
      <hr>

<div style="background-color:lightgreen;height:40px;width:100%;"><center><h1>Questions</h1></center></div>



<strong><p style="margin-top:30px;color:red" > @Note.Check the answer to each multiple-coice question, And please choose only the correct answer and click on the "Submit" button to submit the information.</p></strong><hr>

 <?php

       $qry2 = "select * from questions ORDER BY questions.q_id";
                         $run2 = mysqli_query($con,$qry2);
                         $count=mysqli_num_rows($run2);
                          while($data=mysqli_fetch_assoc($run2))
                          {
                             ?>
                              <form method="post" action="result.php">
                               <strong><P>Ques.<?php echo $data['question']?>?</strong><BR>

  <?php
                           $id=$data['id'];
                           $qry2="SELECT * FROM answers WHERE a_id=$id";
                           $query = mysqli_query($con,$qry2);
                            while($data1 = mysqli_fetch_assoc($query) )
                 {

 ?>

                           <p><input type="radio" name="radiobtn[<?php  echo $data1['a_id']; ?>]" value="<?php echo $data1['ans']?>">
                              <?php echo $data1['answer']?></p>
                              <?php
                 }
                              ?>  <hr>
                               </p>
<?php
                }
              
?>
<input type="submit" value="Submit" class="btn btn-success" style="margin-bottom:20px">
<input type="reset" value="Clear Form" class="btn btn-primary" style="margin-bottom:20px">
</form>
</div>
 <div class="col-md-2 col-xs-2 col-sm-2 sidenav">

    </div>
  </div>
</div>

<footer class="container-fluid" style="background-color:black;">
 <center><p style="color:white">Copyright &copy; DIP-KAT-2019</p></center>
</footer>


  <script> 

var time_in_minutes = 10;
var current_time = Date.parse(new Date());
var deadline = new Date(current_time + time_in_minutes*60*1000);


function time_remaining(endtime){
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor( (t/1000) % 60 );
    var minutes = Math.floor( (t/1000/60) % 60 );
    var hours = Math.floor( (t/(1000*60*60)) % 24 );
    var days = Math.floor( t/(1000*60*60*24) );
    return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
}
function run_clock(id,endtime){
    var clock = document.getElementById(id);
    function update_clock(){
        var t = time_remaining(endtime);
        clock.innerHTML = '<strong>' +'minutes: '+t.minutes+' seconds: '+t.seconds+'</strong>';
        if(t.total<=0){ clearInterval(timeinterval); }
    }
    update_clock(); // run function once at first to avoid delay
    var timeinterval = setInterval(update_clock,1000);
}
run_clock('clockdiv',deadline);
</script>

</body>
</html>

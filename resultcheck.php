<?php
     session_start();
       if(!isset($_SESSION['$sid']) && isset($_SESSION['$name']))
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

       $qry2="SELECT * FROM answers WHERE a_id=1 AND ans = 1";
             $query = mysqli_query($con,$qry2);
                 while($data1 = mysqli_fetch_assoc($query))
                           {
                        if($data1['ans'] == $opt_val)
                        {
                        	$point = $point + 1;
                            $marks = $marks + 100; 
                           }
                           else
                           {
                    
                        
                            }
                        }
                }
 }
          $name = $_SESSION['$name'];
 $qry ="INSERT INTO `result` (`id`,`Name`, `Marks`, `TotalCorrectAns`) VALUES (NULL,'$name', '$marks', '$point')";
        $run2 = mysqli_query($con,$qry);
  ?>



  <?php
                include("connection1.php");
                {
                  $uid=$_GET["uid"];
                 
                         $qry = "DELETE FROM `result` WHERE `result`.`id` = '$uid'";
                 $run = mysqli_query($con,$qry);
                 if($run==true)
                 { 
               ?>
                        <Script>
                       alert("Deleted Successfully");
                     window.open("Result.php","_self");
                    </script>
                           <?php
                 }
                     else
                     {
                             ?>
                      <Script>
                        alert("Updation Failed");
                      window.open("Result.php","_self");
                       </script>
             <?php
                     }
                     
                     }
                           
                
                
                ?>
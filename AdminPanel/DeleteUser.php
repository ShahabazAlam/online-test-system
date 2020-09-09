  <?php
                include("connection1.php");
                {
                  $uid=$_GET["uid"];
                 
                         $qry = "DELETE FROM `user` WHERE `user`.`id` = '$uid'";
                 $run = mysqli_query($con,$qry);
                 if($run==true)
                 { 
               ?>
                        <Script>
                       alert("Deleted Successfully");
                     window.open("AllUsers.php","_self");
                    </script>
                           <?php
                 }
                     else
                     {
                             ?>
                      <Script>
                        alert("Updation Failed");
                      window.open("AllUsers.php","_self");
                       </script>
             <?php
                     }
                     
                     }
                           
                
                
                ?>
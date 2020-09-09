  <?php
                include("connection1.php");
                {
                  $uid=$_GET["uid"];
                 
                         $qry = "DELETE FROM `adminuser` WHERE `adminuser`.`id` = '$uid'";
                 $run = mysqli_query($con,$qry);
                 if($run==true)
                 { 
               ?>
                        <Script>
                       alert("Deleted Successfully");
                     window.open("AllAdmins.php","_self");
                    </script>
                           <?php
                 }
                     else
                     {
                             ?>
                      <Script>
                        alert("Updation Failed");
                      window.open("AllAdmins.php","_self");
                       </script>
             <?php
                     }
                     
                     }
              ?>
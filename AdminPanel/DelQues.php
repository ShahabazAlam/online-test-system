 <?php
                include("connection1.php");
                {
                  $uid=$_GET["uid"];
                 
                 $qry1 = "DELETE FROM  questions WHERE q_id = $uid"; 
                 $run1 = mysqli_query($con,$qry1);
                 $qry2 = "DELETE FROM  answers WHERE a_id = $uid"; 
                 $run2 = mysqli_query($con,$qry2);
                 if($run1 ==true AND $run2 ==true )
                 { 
               ?>
                        <Script>
                       alert("Deleted Successfully");
                     window.open("AllQues.php","_self");
                    </script>
                           <?php
                 }
                     else
                     {
                             ?>
                      <Script>
                        alert("Updation Failed");
                      window.open("AllQues.php","_self");
                       </script>
             <?php
                     }
                     
                     }
                           
                
                
                ?>
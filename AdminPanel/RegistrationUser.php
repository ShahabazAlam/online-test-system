       <?php
                   include("connection1.php");
                                 $name = $_POST["username"];
                                 $email = $_POST["email"];
                                 $password = $_POST["password"]; 
    $qry="INSERT INTO user (id, user, email, password) VALUES (NULL,'$name','$email','$password')";								
   $run = mysqli_query($con,$qry);
     if($run==true)
               {
                  ?>
                          <script>
                        window.open("Dashboard.php","_self");
                         </script>
                 <?php
               }
           else
               {
                   ?>
                          <script>
                            alert("Registration Failed");
                            window.open("UserReg.php","_self");
                         </script>
                  <?php
              }

      ?>
       <?php
                   include("connection1.php");
                                 $name = $_POST["username"];
                                 $email = $_POST["email"];
                                 $password = $_POST["password"]; 
    $qry="INSERT INTO adminuser (id, Uname, Uemail, Upassword) VALUES (NULL,'$name','$email','$password')";								

           $run = mysqli_query($con,$qry);
             if($run==true)
               {
                  ?>
                          <script>
                            alert("Registration Success");
                            window.open("Dashboard.php","_self");
                         </script>
                 <?php
               }
           else
               {
                   ?>
                          <script>
                            alert("Registration Failed");
                            window.open("RegAdmin.php","_self");
                         </script>
                  <?php
              }

      ?>
          <?php
                             include("connection1.php");
   if(isset($_POST["submit"]))
   {
                                 $question = $_POST["question"];
                                 $op1 = $_POST["Option1"];
                                 $op2 = $_POST["Option2"];
                                 $op3 = $_POST["Option3"];
                                 $op4 = $_POST["Option4"];
                                 $code1 = $_POST["code1"];
                                 $code2 = $_POST["code2"];
                                 $code3 = $_POST["code3"];
                                 $code4 = $_POST["code4"];
                               
	       $qry1="SELECT * FROM `questions` WHERE `questions`.`question` = '$question'";
             $run1 = mysqli_query($con,$qry1);
					   $count=mysqli_num_rows($run1);
               if($count == 0)
                 {
                    $qry ="INSERT INTO `questions` (`id`,`question`) VALUES (NULL,'$question')";
                    $run = mysqli_query($con,$qry);

                     $qry1="SELECT * FROM `questions` WHERE `question` = '$question'";
                     $run1 = mysqli_query($con,$qry1);
                     $data = mysqli_fetch_assoc($run1);
                     $id= $data['id'];

                     $qry2 = "UPDATE `questions` SET `q_id` = '$id' WHERE `questions`.`question` = '$question'";
                     $run2 = mysqli_query($con,$qry2);

                     $qry3 = "INSERT INTO `answers` (`id`, `answer`, `a_id`, `ans`) VALUES (NULL, '$op1', '$id', '$code1')";						
                     $run3 = mysqli_query($con,$qry3);

                     $qry4 = "INSERT INTO `answers` (`id`, `answer`, `a_id`, `ans`) VALUES (NULL, '$op2', '$id', '$code2')";							
                     $run4 = mysqli_query($con,$qry4);

                     $qry5 = "INSERT INTO `answers` (`id`, `answer`, `a_id`, `ans`) VALUES (NULL, '$op3', '$id', '$code3')";						
                     $run5 = mysqli_query($con,$qry5);

                     $qry6 = "INSERT INTO `answers` (`id`, `answer`, `a_id`, `ans`) VALUES (NULL, '$op4', '$id', '$code4')";						
                    $run6 = mysqli_query($con,$qry6);

                 if($run == true && $run1 == true && $run2 == true && $run3 == true && $run4 == true && $run5 == true)
                   { 
                          ?>
                                 <Script>
                                    alert("Question Add Successfully");
                                    window.open("AddQues.php","_self");
                                 </script>
                         <?php
                   }
               else
                   {
                            ?>
                                  <Script>
                                  alert("Failed");
                                  window.open("AddQues.php","_self");
                                  </script>
                          <?php
                   }
                      
                   }
               else
                   {
                            ?>
                                      <Script>
                                      alert("Question Alredy ");
                                      window.open("AddQues.php","_self");
                                      </script>
                            <?php 
                  

                   }

	                 }	
						                  ?>
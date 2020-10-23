 <?php 
	$host        = "host = ec2-54-160-18-230.compute-1.amazonaws.com";
	$port        = "port = 5432";
	$dbname      = "dbname = d4010as8739gfp";
	$credentials = "user = ajsffvrguhqqex password=1d6d9f52121d06a8867f922b13fe7c6d7c17dc63cecac5f687a96245dee3fcbf";

    $con  = pg_connect( "$host $port $dbname $credentials"  );
 ?>
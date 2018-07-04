<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/instruction.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One|Ubuntu:500" rel="stylesheet">



	<title>Question | BDCoE</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

<?php
	echo "<br>";
    	echo "<br>";
    	echo "<br>";
    	require 'dbconfig/config.php';  
	session_start();
	/*unset($_SESSION[qn])*/;
	$query="select * from test";
	$result = $con->query($query);
	if ($result->num_rows > 0) 
	{	
		$n=1;
    		// output data of each row
    		while($row = $result->fetch_assoc())
    		{
        		echo $n.". ".$row['question'];
        		echo "<br>";
        		$n++;
    		}
    		echo "<br>";
    		echo "<br>";
    		echo "<br>";
    	}
	
?>
<form action="question.php" method="post">
    <button type="submit" class="btn btn-info btn-block" name="but">CONTINUE TEST</button>
    </form>    
</div>
	<?php 
		if(isset($_POST['but']))
		{
			header('location:test.php');
		}	
	
	?>
</body>
</html>

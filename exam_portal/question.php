<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/question.css" class="css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Patua+One|Ubuntu:500" rel="stylesheet">



	<title>Question | BDCoE</title>
	<link rel="icon" type="image/png" href="images/12.png">

	<!--  -->

	<style>

	</style>

</head>

<body>
	<div class="container-fluid">
		<div class="bdcoe">
				<h1><b>BIG DATA</b></h1>

		</div>

<hr>

<div class="questions">
	<p>Question-Paper :</p>
</div>

<div class="question-set">

<?php
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

    	}

?>
<form action="question.php" method="post">
    <button type="submit" class="btn btn-primary" name="but">CONTINUE TEST</button>
	</br>
</br>
    </form>
</div>
	<?php
		if(isset($_POST['but']))
		{
			header('location:test.php');
		}

	?>
</div>
</div>
</body>
</html>

<!-- back disable -->
<script type="text/javascript">

history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});

</script>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css" class="css">
	<link href="https://fonts.googleapis.com/css?family=Arvo:700|Nunito:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">


	<title>Login | BDCoE</title>
	<link rel="icon" type="image/png" href="images/12.png">

	<!--  -->

	<style>
         body{
    background: url("images/Big-Data.jpg")
        no-repeat center center fixed;
    background-size: cover;
}

	</style>

</head>

<body>

	<div class="container-fluid bg">

		      <div class="bdcoe">
		       	<h1><b>BIG DATA</b></h1>

		    	</div>
					<hr>
	    <div class="row">
	        <div class="col-md-4 col-sm-4 col-xs-12"></div>
	        <div class="col-md-4 col-sm-4 col-xs-12">
                <form class="form-container"  method="post">
                     <h1>Login Here</h1>
                      <div class="form-group">
                        <label for="student-no">Student No.</label>
                        <input type="text" class="form-control" id="exampleInputstudent-no" aria-describedby="emailHelp" placeholder="Enter Student No." maxlength="7" autocomplete="off" name="st_no" required>

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" autocomplete="off" required>
                      </div>

                      <button type="submit" class="btn btn-primary btn-block" name="submit" value="valid">Submit</button>
                </form>


	        </div>

	        <div class="col-md-4 col-sm-4 col-xs-12"></div>

	    </div>
<!--            <footer>*Please fill in the details as filled at the time of registration.</footer>-->
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
<?php
	require 'dbconfig/config.php';
	session_start();
?>
<?php
		if(isset($_POST['submit']))
		{
			$st_no=$_POST['st_no'];
			$password=$_POST['password'];

			$query="SELECT * FROM student_data WHERE student_no='$st_no' and password='$password'";
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				//valid
				echo "fuck u";
				$_SESSION['student_no']=$st_no;

				header('location:profile.php');
			}
			else
			{
				//invalid
				echo '<script type="text/javascript"> alert("INVALID Details!!")</script>';
			}

		}

?>

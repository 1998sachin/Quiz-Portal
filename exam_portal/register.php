<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/register.css" class="css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<title>Register | BDCoE</title>
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
        <div class="row">
             <div class="col-md-4 col-sm-4 col-xs-12 "></div>
             <div class="col-md-4 col-sm-4 col-xs-12 ">

                 <form class="form-container" action="" method="post">
                     <h1>Registration Form</h1>
                      <div class="form-group">
<!--                        <label for="name">Name</label>-->
                          <input type="text" name='name' class="form-control" id="exampleInputstudent-no"  placeholder="Name" title="Enter your name" autocomplete="off" pattern="[A-Za-z\s]{1,20}"   oninvalid="this.setCustomValidity('Name cannot be blank, surely you got a name')" required></div>
                       <div class="form-group">
<!--                        <label for="student-no">Branch</label>-->
                           <input type="text" name='branch' class="form-control" id="exampleInputstudent-no"  placeholder="Branch" maxlength="2" pattern="[A-Za-z\s]{2}" autocomplete="off"  required></div>

                      <div class="form-group">
<!--                        <label for="student-no">Student No.</label>-->
                          <input type="text" name='st_no'class="form-control" id="exampleInputstudent-no"  placeholder="Student No." maxlength="7" oninvalid="this.setCustomValidity('Enter your 7 digit Student No.')" autocomplete="off" pattern="[0-9]{7}" required></div>

                      <div class="form-group">
<!--                        <label for="student-no">Mobile No.</label>-->
                          <input type="text" name='mb_no' class="form-control" id="exampleInputstudent-no"  placeholder="Mobile No." maxlength="10" autocomplete="off" pattern="[0-9]{10}" oninvalid="this.setCustomValidity('Enter your 10 digit Mobile No.')" required></div>

                      <div class="form-group">
<!--                        <label for="student-no">Email </label>-->
                          <input type="email" name='email' class="form-control" id="exampleInputstudent-no"  placeholder="Email@address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autocomplete="off" oninvalid="this.setCustomValidity('Enter email@address.com')" required></div>

                      <div class="form-group">
<!--                        <label for="student-no">Password</label>-->
                        <input type="password" name="password" class="form-control" id="exampleInputstudent-no"  placeholder="Password"  name="password"  pattern=".{6,}" autocomplete="off" required>

                      </div>
											<div class="form-group">
<!--                        <label for="student-no">Password</label>-->
                        <input type="password" name="cpassword" class="form-control" id="exampleInputstudent-no"  placeholder="Confrim Password"  name="password"  pattern=".{6,}" autocomplete="off" required>

                      </div>


                      <button type="submit" name="submit_btn" value="REGISTER"  class="btn btn-success ">Submit</button>
                </form>
             </div>
             <div class="col-md-4 col-sm-4 col-xs-12 "></div>

        </div>
        <footer>
                <p>*Please fill in your genuine informations only.</p>
        </footer>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
<?php
	require 'dbconfig/config.php';
?>
<?php
	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("register clicked")</script>';
		$name=$_POST['name'];
		$branch=$_POST['branch'];
		$st_no=$_POST['st_no'];
		$mb_no=$_POST['mb_no'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		if($password==$cpassword)
		{
			$query="SELECT * FROM student_data WHERE student_no ='$st_no' ";
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				echo '<script type="text/javascript"> alert("user already registered...try login ")</script>';
			}
			else
			{
				$query="INSERT into student_data values('$name','$branch','$st_no','$mb_no','$email','$password')";
				$query_run=mysqli_query($con,$query);
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("user registered successfully...You can login ") </script>';
					echo "<script> location.href='login.php'; </script>";
        	exit;


				}
				else
				{
					echo '<script type="text/javascript"> alert("ERROR")</script>';
				}
			}
		}
		else
		{
			echo '<script type="text/javascript"> alert("ERROR password did not match...")</script>';
		}
	}
?>

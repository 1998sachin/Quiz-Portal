<?php
	include "dbconfig/config.php";
	session_start();
	// for login
	if(isset($_POST['submit_2']))		//if submit button is clicked
	{	
		$l_st_no=$_POST['login_st_no'];		//storing student number
		$l_password=$_POST['login_password'];	//storing password
		$query="SELECT * FROM student_data WHERE student_no='$l_st_no' and password='$l_password'";	//data base query
		$query_run= mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)		//if query fetch result
		{
			$_SESSION['student_no']=$l_st_no;
			echo "<script> location.href='profile.php'; </script>";
			
		}	
		else
		{
			echo '<script type="text/javascript"> alert("INVALID Details!!")</script>';		//error 
			echo "<script> location.href='Start.php'; </script>";
		}
	}

	//for register
	if(isset($_POST['submit_1']))
	{
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
				}
				else
				{
					echo '<script type="text/javascript"> alert("ERROR")</script>';
				}
			}
		}
	echo "<script> location.href='Start.php'; </script>";	
	}
	exit();
?>
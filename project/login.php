<?php
    require 'dbconfig/config.php';  
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Test | Login</title>

	<!--  -->

	<style>

	</style>

</head>

<body>
   
   <div class="top">
       <div class="pass">
          <form action="login.php" method="post">
           <ul id="horizontal">
              
               <li> <input type="text" placeholder="Student No." name="st_no" maxlength="7" autocomplete="off" required></li>
             
               <li><input type="password" placeholder="Password" name="password" autocomplete="off" required></li>
             
               <li>  
	                <button type="submit" name="login" value="REGISTER">Login</button>
                     
                     
             </li>
           
           </ul>
             </form>
       </div>
   </div>
<?php
		if(isset($_POST['login']))
		{
			$st_no=$_POST['st_no'];
			$password=$_POST['password'];
			
			$query="select * from student_data where student_no='$st_no' and password='$password'";
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				//valid
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
 
   
   
   
   
   
   
   
   
   
    <div class="container">
        
        <div class="bdcoe">
           <div class="logo"><img id="image" src="images/12.png" alt=""></div>
            <div class="bd">BIG &nbsp;DATA<br></div>
            
            <div class="coe">
                CENTER OF EXCELLENCE
            </div>
            <div class="recruit">
                
                    We Are Recruiting&nbsp;!
                
            </div>
        </div>
    </div>

    
<div class="vr">&nbsp;</div>


	
	
	<div class="login">
	    
	    <div class="right">
	        <div class="formBox">
	           <form class="myform" action="login.php" method="post">
                
	                <input type="text" placeholder="Name" name="name"   title="Enter your name" autocomplete="off" pattern="[A-Za-z\s]{1,20}" required>
                   
	                <input type="text" placeholder="Branch" name="branch"  pattern="[A-Z]{2}" autocomplete="off" required>
                  
	                <input type="text" placeholder="Std No." name="st_no"   maxlength="7" autocomplete="off" pattern="[0-9]{7}" required>
                  
	                <input type="text" placeholder="Mobile No."name="mb_no" maxlength="10" autocomplete="off" pattern="[0-9]{10}" required>
                       
	                <input type="email" placeholder="Email@address.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autocomplete="off" required>
                      
	                <input type="password" placeholder="Password" name="password"  pattern=".{6,}" autocomplete="off" required>
                    
	                <input type="password" placeholder="Confirm Password" name="cpassword" pattern=".{6,}" autocomplete="off" required><br>
	                
	           
	                <button type="submit" name="submit_btn" value="REGISTER" >REGISTER
                         
                         </button>
                   
	            </form>
	            
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
			$query="select * from student_data where student_no ='$st_no' ";
			$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				echo '<script type="text/javascript"> alert("user already registered...try login ")</script>';
			}
			else
			{
				$query="insert into student_data values('$name','$branch','$st_no','$mb_no','$email','$password')";
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
		else
		{
			echo '<script type="text/javascript"> alert("ERROR password did not match...")</script>';	
		}
            }
        ?>
	            
	        </div>
	    </div>
	</div>
 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jque1510011ry/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>

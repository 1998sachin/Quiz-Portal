






<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>PROFILE | BDCoE</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
     <link rel="stylesheet" href="pro.css">
	<!--  -->

	<style>
        
  </style>

</head>

<body>

	<div class="container">
        
        <div class="bdcoe">
       <h1><b>BIG DATA</b></h1>
   
    </div>
    
    <hr>

	
	<div class="total">
    <?php
    			require 'dbconfig/config.php';
				session_start();
				$stno=$_SESSION['student_no'];
				$sql = "SELECT * FROM student_data WHERE student_no = '$stno'";
				$result = $con->query($sql);  
			
			if($result->num_rows > 0) 
			{
				   $row = $result->fetch_assoc();
			}
			else
				echo "error";
?>
	    
           
           <div class="head">
        <img src="face.svg" width="50" height="50" alt="You Are In"> 
             &nbsp;
             <b class="pro"> Your Profile&nbsp;:&nbsp;<?php	echo $row['name']?> </b>
            
            </div>
         
            
          
          <div class="instruction">
                <table style="width:90%">
				
				
  <tr>
    <td class="text">Student&nbsp;Number&nbsp;:</td>
    <td class="stdno"><?php	echo $row['student_no']?></td> 
    <td class="text">Branch&nbsp;:</td>
    <td class="branch"><?php	echo $row['branch']?></td>
  </tr>
  <tr>
    <td class="text">Contact&nbsp;Number&nbsp;:</td>
    <td class="mobile"><?php	echo $row['mb_no']?></td>
    <td class="text">Email&nbsp;Address&nbsp;:</td>
    <td class="email"><?php	echo $row['email']?></td>
  </tr>
 
</table>
        </div>

<div>
    <a class="link" href="instructions.php">
    <button type="button" class="btn btn-info btn-block">Instructions</button></a>
    
</div>
	
</div>
    </div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>

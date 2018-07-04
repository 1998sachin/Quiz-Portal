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
	<link rel="stylesheet" href="css/instruction.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One|Ubuntu:500" rel="stylesheet">



	<title>Test | BDCoE</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

   <div class="bdcoe">
       <h1><b>BIG DATA</b></h1>
   
    </div>
    
    <hr>

	
	<div class="total">
    
	    
           
           <div class="head">
        <img src="images/boy-smiling-head-edb77329dc02c6b2bb6d3d8ad2e4279fc5022503878a868835a3c23aaefe3bab.svg" width="50" height="50"> 
             &nbsp;
             <b> Instructions for the test</b>
            
            </div>
         
            
          
          <div class="instruction">
<ol start="1" type="1"> 
<li>Total duration of this test is <b>60 minutes</b>.</li>
<li>There will be <b>40 Single Option Correct MCQ questions.</b></li>
<li>There is <b>4 section</b> in the question paper consisting of <b>10 questions in each section</b>.</li>
<li>There are <b>2 alogorithm questions</b> at the end of the paper</li>
<li>Each question is allotted <b>4 (Four)</b> marks for correct response.</li>
<li>Candidates will be awarded marks as stated above in instruction <b>No.5 </b>forcorrect response of each question. <b>1 (one) mark will be deducted</b> for indicating incorrect response for each question. </li>
<li><b>No deduction</b> from the total score will be made if no response is indicated.</li>
</ol>
</div>

<div>
    <form action="instructions.php" method="post">
    <button type="submit" class="btn btn-info btn-block" name="but">CONTINUE TEST</button>
    </form>    
</div>
	<?php 
		
		if(isset($_POST['but']))
		{
			header('location:test.php');
		}	
	
	?>

	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>
</div>
	
</body>

</html>

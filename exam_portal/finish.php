<script>
	//alert("");
</script>
<?php
	require 'dbconfig/config.php';
  session_start();
?>
<?php
	$_SESSION['min']=-1;
?>

<?php
	$stno=$_SESSION['student_no'];
	$query1="select * from response where student_no ='$stno' and choice = 0 ";
	$rs1=mysqli_query($con,$query1);
	$unattempted= mysqli_num_rows($rs1);
	$query2="select * from response where student_no ='$stno'and mark = 1 ";
	$rs2=mysqli_query($con,$query2);
	$marked= mysqli_num_rows($rs2);
	$query3="select * from response where student_no ='$stno'" ;
	$rs3=mysqli_query($con,$query3);
	$total= mysqli_num_rows($rs3);
	$attempted=$total-$unattempted;


?>
<?php
	$stno=$_SESSION['student_no'];
	$query="select * from student_data where student_no ='$stno'";
	$rs=mysqli_query($con,$query);
	if($rs->num_rows > 0)
			{
				   $row = $rs->fetch_assoc();
			}
	else
	echo "error";



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/finish.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

	<title>Finished | BDCoE</title>
	<link rel="icon" type="image/png" href="images/12.png">

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
       <div class="time">
           <b>Test  &nbsp;Finished &nbsp;!</b>
       </div>

           <div class="head">
        <img src="face.svg" width="50" height="50" alt="You Are In">
             &nbsp; &nbsp; &nbsp; &nbsp;
             <b class="pro"> Have a Nice Day &nbsp;: &nbsp;<?php	echo $row['name']?> </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Student Number &nbsp;: <?php	echo " ". $row['student_no']?>&nbsp;</b>

            </div>

         <table style="width:90%">
			<col width="25%">
			<col width="25%">

  <tr>
    <th class=""></th>
    <th class="quest">Number of Questions</th>



  </tr>
  <tr>
    <td class="text">Attempted</td>
    <td class="num"><?php echo $attempted ?></td>

  </tr>
   <tr>
    <td class="text">Not Attempted</td>
    <td class="num"> <?php echo $unattempted?></td>

  </tr>
   <tr>
    <td class="text">Marked For Review </td>
    <td class="num"><?php echo $marked ?></td>


  </tr>
   <tr>
    <td class="text">Total </td>
    <td class="num"><?php echo $total?></td>

  </tr>
	<?php session_destroy();?>

</table>

        <div class="button">
        <form method="post" action="finish.php">
         <button type="submit" class="btn btn-info btn-block" id="letsee" name='close'>Close</button>
         </div>
        </form>
        <?php
        	if(isset($_POST['close']))
        	{
        		//header('location:start_page.html');
						echo "<script> window.close();</script>";
        	}
        ?>



	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>


</body>

</html>
<!-- back disable -->
<script type="text/javascript">

history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});

//right click disable
$(function() {
			$(this).bind("contextmenu", function(e) {
					e.preventDefault();
			});
	});

</script>

<?php  error_reporting(0);
	require 'dbconfig/config.php';
  session_start();
  extract($_POST);
	extract($_GET);
	extract($_SESSION);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/test.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <title>TEST | BDCoE</title>

    <!--  -->

    <style>
    </style>
    <script type="text/javascript">
        function timeout()
        {
            https://www.startpahttps://www.startpage.com/row/ge.com/row/

            var hours = Math.floor(timeLeft / 3600);
            var minute = Math.floor((timeLeft - (hours * 60 * 60) - 30) / 60);
            var second = timeLeft % 60;
            var hrs = checktime(hours);
            var mint = checktime(minute);
            var sec = checktime(second);
            if (timeLeft <= 0) {
                clearTimeout(tm);
                document.getElementById("");
            } else {
                document.getElementById("right").innerHTML = hrs + ":" + mint + ":" + sec;
            }
            timeLeft--;
            var tm = setTimeout(function() {
                timeout()
            }, 1000);
        }

        function checktime(msg)
        {
            if (msg < 10)
            {
                msg = "0" + msg;
            }
            return msg;
        }
    </script>



</head>

<body onload="timeout()">



    <div class="container">
        <div class="head">

            <div class="bigdata"><b>
	        BIG DATA
            </b>
            </div>


            <div id="right" class="clock">01:57:24</div>
            <script type="text/javascript">
                var timeLeft = 2 * 60 * 60;
            </script>

            <div class="leeft"><p>Time Left :</p></div>



        </div>

        <hr>

        <div class="row">
            <div class=" question col-sm-8 col-md-8 col-lg-8">

               <hr style="color:red">

				<div class="display">

		<?php
	  		/*unset($_SESSION[qn])*/;
	  		$query="select * from test";
	  		$rs=mysqli_query($con,$query);

    	if(!isset($_SESSION[qn]))
			{
        		//echo "hello world";

				$_SESSION[qn]=0;
				$stno=$_SESSION['student_no'];
				$query1 = "DELETE FROM response WHERE student_no=$stno";
				mysqli_query($con,$query1);

				while($row= mysqli_fetch_row($rs))
				{
					// echo $row[0];
					$quest=$row[1];
					$query2 = "INSERT INTO response VALUES ($stno, '$quest', 0, $row[6], 0)";
					if(mysqli_query($con,$query2))
						{
							//echo "done";
						}

					else
						echo "error1";
				}
			}

      	else
			{
				if($submit=='Next Question' && isset($_POST['ans']) && $_SESSION[qn]<mysqli_num_rows($rs))
				{
					mysqli_data_seek($rs,$_SESSION[qn]);
					$row1= mysqli_fetch_row($rs);
					$quest=$row1[1];
					$stno=$_SESSION['student_no'];
					$query="SELECT * FROM response WHERE question ='$quest' AND student_no=$stno";
					$rslt=mysqli_query($con,$query);
					if(mysqli_num_rows($rslt)>0)
					{

						$query3="DELETE  FROM response WHERE question ='$quest' AND student_no=$stno";
						if ($con->query($query3) === TRUE)
						{
    						//echo "Record deleted successfully";
						}
						else
						{
							echo "Error deleting record: " . $conn->error;
						}
						//echo $row1[6].$row1[1];
						$query1 = "INSERT INTO response VALUES ($stno, '$quest', $ans, $row1[6],0)";
						if(mysqli_query($con,$query1))
						{
							//echo " me";

						}
						else
						echo "error2";
					}
					else
					{
						$stno=$_SESSION['student_no'];
						//echo $row1[6].$row1[1];
						$quest=$row1[1];
						$query1 = "INSERT INTO response VALUES ($stno, '$quest', $ans, $row1[6], 0)";
						if(mysqli_query($con,$query1))
						{
						//	echo " me";

						}
						else
						echo "error3";
					}
					echo $_SESSION['student_no'];
					$_SESSION[qn]=$_SESSION[qn]+1;

				}
				else if($submit=='Next Question' && !isset($_POST['ans'])  && $_SESSION[qn]<mysqli_num_rows($rs))
				{
					mysqli_data_seek($rs,$_SESSION[qn]);
					$row1= mysqli_fetch_row($rs);
					$quest=$row1[1];
					$stno=$_SESSION['student_no'];
					$query="SELECT * FROM response WHERE question ='$quest' AND student_no=$stno";
					$rslt=mysqli_query($con,$query);
					if(mysqli_num_rows($rslt)>0)
					{

						$query3="DELETE  FROM response WHERE question ='$quest' AND student_no=$stno";
						if ($con->query($query3) === TRUE)
						{
    					//	echo "Record deleted successfully";
						}
						else
						{
							echo "Error deleting record: " . $conn->error;
						}
						//echo $row1[6].$row1[1];
						$query1 = "INSERT INTO response VALUES ($stno, '$quest', 0, $row1[6],0)";
						if(mysqli_query($con,$query1))
						{
						//	echo " me";

						}
						else
						echo "error4";
					}
					else
					{
						$query1 = "INSERT INTO response VALUES ($stno, '$quest', 0, $row1[6],0)";
						if(mysqli_query($con,$query1))
						{
						//	echo " me";
						}
						else
						echo "error5";
					}
					echo $_SESSION['student_no'];
					$_SESSION[qn]=$_SESSION[qn]+1;

				}
				else if(isset($mark) && isset($_POST['ans'])  && $_SESSION[qn]<mysqli_num_rows($rs))
				{
					mysqli_data_seek($rs,$_SESSION[qn]);
					$row1= mysqli_fetch_row($rs);
					$quest=$row1[1];
					$stno=$_SESSION['student_no'];
					$query="SELECT * FROM response WHERE question ='$quest' AND student_no=$stno";
					$rslt=mysqli_query($con,$query);
					if(mysqli_num_rows($rslt)>0)
					{
						$query3="DELETE  FROM response WHERE question ='$quest' AND student_no=$stno";
						if ($con->query($query3) === TRUE)
						{
    						//echo "Record deleted successfully";
						}
						else
						{
							echo "Error deleting record: " . $conn->error;
						}
						//echo $row1[6].$row1[1];
						$query1 = "INSERT INTO response VALUES ($stno, '$quest', $ans, $row1[6],1)";
						if(mysqli_query($con,$query1))
						{
							//echo " me";
						}
						else
						echo "error6";
					}
					else
					{
						$stno=$_SESSION['student_no'];
						//echo $row1[6].$row1[1];
						$quest=$row1[1];
						$query1 = "INSERT INTO response VALUES ($stno, '$quest', $ans, $row1[6], 1)";
						if(mysqli_query($con,$query1))
						{
						//	echo " me";
						}
						else
						echo "error7";
					}
					echo $_SESSION['student_no'];
					$_SESSION[qn]=$_SESSION[qn]+1;

				}

				else if((isset($mark)) && !isset($_POST['ans'])  && $_SESSION[qn]<mysqli_num_rows($rs))
				{
					mysqli_data_seek($rs,$_SESSION[qn]);
					$row1= mysqli_fetch_row($rs);
					$quest=$row1[1];
					$stno=$_SESSION['student_no'];
					$query="SELECT * FROM response WHERE question ='$quest' AND student_no=$stno";
					$rslt=mysqli_query($con,$query);
					if(mysqli_num_rows($rslt)>0)
					{

						$query3="DELETE  FROM response WHERE question ='$quest' AND student_no=$stno";
						if ($con->query($query3) === TRUE)
						{
    						//echo "Record deleted successfully";
						}
						else
						{
							echo "Error deleting record: " . $conn->error;
						}
						//echo $row1[6].$row1[1];
						$query1 = "INSERT INTO response VALUES ($stno, '$quest', 0, $row1[6], 1)";
						if(mysqli_query($con,$query1))
						{
							//echo " me";

						}
						else
						echo "error8";
					}
					else
					{
						$stno=$_SESSION['student_no'];
						//echo $row1[6].$row1[1];
						$quest=$row1[1];
						$query1 = "INSERT INTO response VALUES ($stno, '$quest', $ans, $row1[6], 0)";
						if(mysqli_query($con,$query1))
						{
						//	echo " me";

						}
						else
						echo "error9";
					}
					echo $_SESSION['student_no'];
					$_SESSION[qn]=$_SESSION[qn]+1;

				}

  		}

			if($_SESSION[qn]<mysqli_num_rows($rs))
	    	{
	    		mysqli_data_seek($rs,$_SESSION[qn]);
					$row= mysqli_fetch_row($rs);
					$n=$_SESSION[qn]+1;
					$stno=$_SESSION['student_no'];
					$qu="SELECT choice FROM response WHERE student_no=$stno AND question='$row[1]'";
					if($result=mysqli_query($con,$qu))
					{
						//echo "all ok";
					}
					else
					{
						echo "error11";
					}
					$rowr= mysqli_fetch_row($result);
					$ans1=$rowr[0];

//unset functionality
					if(isset($clear))
					{
						unset($ans);
						$ans1=0;
					}

//Displaying option
					echo "<form action='test.php' method='post'> ";
					echo "<table>";
					echo"<tr>";
		   		echo "	<td class=style2>".$n.'. '.$row[1]."</td>";
	  			echo "</tr>";
	  			echo "<br>";
	  			echo "</table>";
	  			echo "<table class=options>";
	  			echo"<tr>";
					if($ans1==1)
					echo "	<td class=opt><input type=radio name='ans' value=1 checked> $row[2]</td>";
					else
					echo "	<td class=opt><input type=radio name='ans' value=1> $row[2]</td>";

					echo "</tr>";
	  			echo"<tr>";
					if($ans1==2)
	   			echo "	<td class=opt><input type=radio name='ans' value=2 checked>  $row[3] </td>";
					else
					echo "	<td class=opt><input type=radio name='ans' value=2>  $row[3] </td>";

					echo "</tr>";
	  			echo"<tr>";
					if($ans1==3)
	   			echo "	<td class=opt><input type=radio name='ans' value=3 checked>  $row[4] </td>";
					else
					echo "	<td class=opt><input type=radio name='ans' value=3>  $row[4] </td>";

					echo "</tr>";
	  			echo"<tr>";
					if($ans1==4)
	   			echo "	<td class=opt><input type=radio name='ans' value=4 checked>$row[5]</td>";
					else
					echo "	<td class=opt><input type=radio name='ans' value=4>$row[5]</td>";

					echo "</tr>";
					echo "</table>";
				//echo "</form>";
			}
			else if($_SESSION[qn]>mysqli_num_rows($rs)-1)
			{
				echo '<br>';
				echo "\nNo more question";
				echo '<script type="text/javascript"> alert("This was last question click Finish Test!")</script>';
				$_SESSION[qn]--;

			}

		?>

             <div id="button">
                 <button class="save" type="submit" name=submit value="Next Question">Save & Next</button>
                  <button class="mark" type='submit' name=mark >Mark & Next</button>
                    <button class="clear" type="submit" name=clear>Clear Section</button>
             </div>
                </div>



             </div>









            <div class="grid col-sm-4 col-md-4 col-lg-4">
                <div id="question">
                    <p>Question Overview:</p>
                </div>
 <script type="text/javascript" language="JavaScript">
      function myAjax(a)
      {
      	//alert("hi");
              $.ajax({
                type: "POST",
                url: 'test.php',
                data:{action:a},
                success:function(html)
                {
                    alert(html);
                }

            });
      }
     </script>
    <?php
      if(isset($_POST['action']) )
      {
          $_SESSION[qn]=$_POST['action'];

      }

      else
      {
        $_SESSION[qn]=$_SESSION[qn];
      }
    ?>





    		<?php
               	echo'<div id="squares">';
                echo'<form method = "post" action="test.php">';

                $qry="select * from test";
	  			$r=mysqli_query($con,$qry);
	  			$i=0;
	  			while(mysqli_fetch_assoc($r))
	  			{
	  				echo'<div class="numbers">';
	  		?>
                    <a href="test.php" onclick="myAjax(<?php echo $i ;?>)" class=""> <p> <?php echo $i+1 ;?></p></a>
	  		<?php
	  				$i++;
	  			 	echo'</div>';
	  			}



                echo '</form>';

                echo'</div>';
            ?>

                    <div id="key">
                         <table >
                             <tr>
                                <td><div style="background: red"></div><p>Current</p></td>
                                <td><div style="background: #1abc9c"></div><p>Attempted</p></td>
                             </tr>

                             <tr>
                                <td><div style="padding-top: 5px"></div><p>Not Attempted</p></td>
                                <td><div style="background: #8e44ad"></div><p>To Be Reviewed</p></td>
                             </tr>
                          </table>


                    </div>




                <div id="link">

                    <a href="bt_test.php">
                        <button class="instruct">Instructions</button>
                    </a>



                    <a href="question.php"> <button class="quest">Questions</button></a>

                    <button class="finish" type="submit" name="finish"  onClick="clickedButton()">Finish</button>

                </div>

            </div>

        </div>

     </div>

    <script type="text/javascript" language="JavaScript">
    function clickedButton()
 {
      var r=confirm("Do You Really want to Finish Test! Press ok to Continue ");
      if (r==true)
        {
        window.location.href="finish.php";
        return true;
        }

 }
 </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
    </script>




</body>
</html>

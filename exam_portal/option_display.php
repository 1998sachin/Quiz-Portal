<?php
require 'dbconfig/config.php';
session_start();
$query="select * from test";
$rs=mysqli_query($con,$query);

if(!isset($_SESSION[qn]))
{
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
        echo "Error deleting record: " . $con->error;
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
    //echo $_SESSION['student_no'];
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
    //  echo $_SESSION['student_no'];
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
   // echo $_SESSION['student_no'];
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
    echo "	<td class=opt1><input type=radio name='ans' value=1 id='option1' checked><label for='option1'> $row[2] </label></td>";
    else
    echo "	<td class=opt1><input type=radio name='ans' id='option1' value=1><label for='option1'> $row[2] </label></td>";

    echo "</tr>";
    echo"<tr>";
    if($ans1==2)
    echo "	<td class=opt2><input type=radio name='ans' value=2 id='option2' checked><label for='option2'>  $row[3] </label></td>";
    else
    echo "	<td class=opt2><input type=radio name='ans' id='option2' value=2><label for='option2'>  $row[3] </label></td>";

    echo "</tr>";
    echo"<tr>";
    if($ans1==3)
    echo "	<td class=opt3><input type=radio name='ans' value=3 id='option3' checked><label for='option3'>  $row[4] </label></td>";
    else
    echo "	<td class=opt3><input type=radio name='ans' id='option3'  value=3><label for='option3'>  $row[4] </label></td>";

    echo "</tr>";
    echo"<tr>";
    if($ans1==4)
    echo "	<td class=opt4><input type=radio name='ans' value=4 id='option4' checked><label for='option4'> $row[5] </label></td>";
    else
    echo "	<td class=opt4><input type=radio name='ans' id='option4' value=4><label for='option4'> $row[5] </label></td>";

    echo "</tr>";
    echo "</table>";
  //echo "</form>";
}
else if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
  echo '<br>';
  echo "\nNo more question";
  echo '<script type="text/javascript"> alert("This was the last question click Finish Test!")</script>';
  $_SESSION[qn]--;

}

?>

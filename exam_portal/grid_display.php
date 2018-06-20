<?php
require 'dbconfig/config.php';
session_start();
?>
<script type="text/javascript" language="JavaScript">
  function myAjax(a)
  {
            $.ajax({
            type: "POST",
            url: 'test.php',
            data:{action:a},
            success:function(html)
            {
                //alert(html);
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
echo'<form method = "post" action="test.php">';
$qry="select * from test";
$r=mysqli_query($con,$qry);
$i=0;
while(mysqli_fetch_assoc($r))
{


?>
  <a href="test.php" onclick="myAjax(<?php echo $i ;?>)" class=""> <p>
<?php
  $stno=$_SESSION['student_no'];
  $qu1="SELECT * FROM test";
  if($r1=mysqli_query($con,$qu1))
  {
    //
  }
  else
  {
    echo 'error12';
  }
  mysqli_data_seek($r1,$i);
  $row2= mysqli_fetch_row($r1);
  $qu2="SELECT * FROM response WHERE student_no=$stno and question='$row2[1]'";
  if($r2=mysqli_query($con,$qu2))
  {
  	//echo "all ok!";
  }
  else
  {
    echo 'error12';
  }
  $row3=mysqli_fetch_row($r2);

  if($i==$_SESSION[qn])
  {
    echo '<button class="grid1" type="button">';
    if($i+1<10)
    {
      echo "0";
      echo $i+1;
    }
    else
    echo $i+1;
    echo '</button>';

  }
  elseif($row3[4]==1)
  {
    echo '<button class="grid2" type="button">';
    if($i+1<10)
    {
      echo "0";
      echo $i+1;
    }
    else
    echo $i+1;
    echo '</button>';
  }
  elseif($row3[2]!=0)
  {
    echo '<button class="grid3" type="button">';
    if($i+1<10)
    {
      echo "0";
      echo $i+1;
    }
    else
    echo $i+1;
    echo '</button>';
  }
  else
  {
    echo '<button class="grid4" type="button">';
    if($i+1<10)
    {
      echo "0";
      echo $i+1;
    }
    else
    echo $i+1;
    echo '</button>';
  }


  $i=$i+1;
}

echo '</form>';
?>

<?php
	error_reporting(0);
	require 'dbconfig/config.php';
  session_start();
  extract($_POST);
	extract($_GET);
	extract($_SESSION);
?>
<?php
if(!isset($_SESSION['min'] )&& !isset($_SESSION['sec']))
{
  $_SESSION['min']=10;
  $_SESSION['sec']=30;
}
echo'<form method = "post" action="test.php" class="timer-time">';
echo 'Time Left&nbsp;:&nbsp;<p id ="tm" class="time-left">  </p>';
echo'</form>';
?>
<script type="text/javascript">
  document.getElementById('tm').innerHTML =
    '<?php echo $_SESSION['min'].":".$_SESSION['sec'];?>';

  startTimer();

  function startTimer() {
    var presentTime = document.getElementById('tm').innerHTML;
    var timeArray = presentTime.split(':');
    var m =parseInt(timeArray[0]);

    var s = (checkSecond(parseInt(timeArray[1])));

    if(s==59 )
    {
      m=m-1;
			if(m==-1)
			{
				m=0;
				finishTest();
				return;
			}
    }
    //if(m<0){alert('timer completed')}
    if(m<0)
    {finishTest();}
    document.getElementById('tm').innerHTML =
      m + ":" + s;
      var minutes=parseInt(m);
      var seconds=parseInt(s);
      $.ajax({
      type: "POST",
      url: 'test.php',
      data:{m1:minutes,s1:seconds},
      success:function(html)
      {
				if(m>-1)
				{
        setTimeout(startTimer, 1000);
				}
				  //alert(html);
      }

  });
    //setTimeout(startTimer, 1000);
  }

  function checkSecond(sec) {
    sec=sec-1;
    if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
    if (sec < 0) {sec = "59"};
    return sec;
  }

  function finishTest()
  {
    window.location.href="finish.php";
			//return true;

  }
</script>
<?php
  if(isset($_POST['m1']) )
  {
      $_SESSION['min']=$_POST['m1'];
  }
  else
  {
    $_SESSION['min']=$_SESSION['min'];
  }
  if(isset($_POST['s1']) )
  {
      $_SESSION['sec']=$_POST['s1'];
  }
  else
  {
    $_SESSION['sec']=$_SESSION['sec'];
  }

?>

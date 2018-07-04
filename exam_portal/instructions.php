
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



	<title>Instructions | BDCoE</title>
	<link rel="icon" type="image/png" href="images/12.png">

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
             <b> You are about to start the test</b>

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
    <button type="submit" class="btn btn-info btn-block" onclick="take2test()" id="start/resume" name="but">START THE TEST</button>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

</div>

</body>

</html>
<!-- server protect -->
<?php
  if(isset($_SESSION['student_no']))
  {
    //echo $_SESSION['student_no'];
  }
  else
  {
    header("location: start_page.html");
  }
?>

<script type="text/javascript">
  var child=1;
  function take2test()
  {
    child=window.open("test.php", "myPopup","width="+screen.availWidth+",height="+screen.availHeight, 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,titlebar=0,addressbar=no');
    document.getElementById('start/resume').innerHTML ="RESUME TEST";
    setTimeout(function(){window.location.href="start_page.html";},30000);
  }
  var timer, child;
  function polling(){
  if (child && child.closed) {
    clearInterval(timer);
    window.location.href="start_page.html";

  }
  }
  timer = setInterval('polling()',100);

</script>

<!-- back disable -->
<script type="text/javascript">

history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
// right click disable
$(function() {
     $(this).bind("contextmenu", function(e) {
         e.preventDefault();
     });
 });

</script>

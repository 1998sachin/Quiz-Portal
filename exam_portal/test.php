<?php
	error_reporting(0);
	require 'dbconfig/config.php';
  session_start();
  extract($_POST);
	extract($_GET);
	extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" class="css">
		<link rel="stylesheet" href="css/grid_display.css" class="css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Orbitron:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Test | BDCoE</title>
	<link rel="icon" type="image/png" href="images/12.png">

	<!--  -->

	<style>

	</style>

</head>

<body>

	<div class="container-fluid bg">
        <div class="timer">
<!--            code for the timer-->
           <div class="time">
               <p>
                   <?php
									 		require "timer.php";
											//echo '<iframe src="timer.php"></iframe>';
									?>
<!--                   enter the codeeeee for timer here-->
               </p>
           </div>

        </div>



           <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 test-panel">
<!--                question are to be displayed here-->
							<div class="display_ques">
								<div class="question-dis">
									<p>Question-Display&nbsp;:</p>
								</div>
								<?php
									require 'option_display.php';
								?>
							</div>

                <div class="save-buttons">
                    <button type="submit" name=submit class="btn btn-success" value="Next Question">Save & Next</button>
                    <button type="submit"  name=mark class="btn btn-warning">Mark & Next</button>
                    <button type="submit" name=clear class="btn btn-danger">Clear Section</button>

                </div>


            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 select-q">
<!--                buttons for varous questions-->
               <div class="text">
                   <p>Question Overview:</p>
               </div>



                 <div class="question-jump">
<!--                     question jump buttons are to be displayed here-->

									<?php
										require 'grid_display.php';
									?>
                 </div>


                  <div class="keys">
                       <table style="width:100%">

                              <tr>
                                <td><div id="circle" class="col-sm-3 current"></div><div class="col-sm-9"><p>Current</p></div></td>
                                <td><div id="circle" class="col-sm-3 attempted"></div><div class="col-sm-9"><p>Attempted</p></div></td>

                              </tr>
                              <tr>
                                  <td><div id="circle" class="col-sm-3 not-attempted"></div><div class="col-sm-9"><p>Not Attempted</p></div></td>
                                  <td><div id="circle" class="col-sm-3 to-be-r"></div><div class="col-sm-9"><p>To Be Reviewed</p></div></td>

                              </tr>

                        </table>
                   </div>




                 <div class="buttons">

                    <a class="btn btn-primary question" href="question.php" role="button">Questions</a>
                    <a class="btn btn-primary instruction" href="bt_test.php" role="button">Instructions</a>
                    <button class="btn btn-primary finish" type="submit" name="finish"  onClick="clickedButton()" role="button">Finish</button>
                </div>

            </div>
        </div>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>



</body>

</html>
<script type="text/javascript">

	function viewPage()
	{
		var el=document.body;
		console.log("suck u");
		toggleFullscreen(el);

	}
	function toggleFullscreen(el){
		console.log("suck u2");
		if(document.fullscreenElement ||document.mozFullScreenElement||document.webkitFullscreenElement||document.msFullscreenElement )
		{
			console.log("suck u4");
			if(document.exitFullscreen)
			{
				document.exitFullscreen();
			}
			else if(document.mozCancelFullScreen)
			{
				console.log("suck u78");
				document.mozCancelFullScreen();
			}
			else if(document.webkitExitFullscreen)
			{
				document.webkitExitFullscreen();
			}
			else if(document.msExitFullscreen)
			{
				document.msExitFullscreen();
			}
		}
		else
		{
			console.log("suck u3");
			if(document.documentElement.requestFullscreen)
			{
				console.log("suck u5");
				el.requestFullscreen();
			}
			else if(document.documentElement.mozRequestFullScreen)
			{
				console.log("suck u6");
				el.mozRequestFullScreen();
			}
			else if(document.documentElement.webkitRequestFullscreen)
			{
				console.log("suck u7");
				el.webkitRequestFullscreen();
			}
			else if(document.documentElement.msRequestFullscreen)
			{
				console.log("suck u8");
				el.msRequestFullscreen();
			}
		}
	};

	// viewPage();

</script>

<script type="text/javascript" language="JavaScript">
	function clickedButton()
	{
    var r=confirm("Do You Really want to Finish Test! Press ok to Continue ");
    if (r==true)
    {
      window.location.href="finish.php";
			//exit;
			return true;
    }
	}
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

// disable f5,f11,f4 keys
function disable_fkeys(e)
{
  if (((e.which || e.keyCode) == 116)||((e.which || e.keyCode) == 116)||((e.which || e.keyCode) == 115)||((e.which || e.keyCode) == 0))
  {
      e.preventDefault();
  }
}
$(document).ready(function(){
    $(document).bind("keydown", disable_fkeys);
});
$(document).keypress(function(e) {
    return false;
});


 </script>

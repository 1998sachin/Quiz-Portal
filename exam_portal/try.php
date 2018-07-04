<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body >
    <style>
      body :-webkit-full-screen, :fullscreen, :-ms-fullscreen, :-moz-full-screen{
        position: fixed;
width: 100%;
height: 100%;
top: 0;
background: none;

      }
      #wrap {
        width: 100;
        background:#FFF;
        padding:40px;
      }
    </style>
    <script type="text/javascript">

    	function toggleFullscreen(){
        el=document.body;
    		console.log("suck u2");
        isfullscreen=false;
    		if(isfullscreen==true)
    		{
    			console.log("suck u4");
    			if(document.cancelFullscreen)
    			{
    				document.cancelFullScreen();
    			}
          else if(document.exitFullScreen)
    			{
    				document.exitFullScreen();
    			}
    			else if(document.mozCancelFullScreen)
    			{
            console.log("dick");
    				document.mozCancelFullScreen();
    			}
    			else if(document.webkitCancelFullScreen)
    			{
    				document.webkitCancelFullScreen();
    			}
    			else if(document.msExitFullscreen)
    			{
    				document.msExitFullscreen();
    			}
          isfullscreen=false;
        //   document.getElementById(el).style.width="100%";
        //   document.getElementById(el).style.height="auto";
    		 }
    		else
    		{
    			console.log("suck u3");
    			if(el.requestFullScreen)
    			{
    				console.log("suck u5");
    				el.requestFullScreen();
    			}
    			else if(el.mozRequestFullScreen)
    			{
    				console.log("suck u6");
    				el.mozRequestFullScreen();
    			}
    			else if(el.webkitRequestFullscreen)
    			{
    				console.log("suck u7");
    				el.webkitRequestFullscreen();
    			}
    			else if(el.msRequestFullscreen)
    			{
    				console.log("suck u8");
    				el.msRequestFullscreen();
    			}
          isfullscreen=true;
          // document.getElementById(el).style.width=window.screen.width+"px";
          // document.getElementById(el).style.height=window.screen.height+"px";
        }
    	};

    	// viewPage();
      toggleFullscreen();
    </script>

    <button class="btn btn-danger" onclick="toggleFullscreen();">fullscreen</button>
    <p >Fuck U</p>
    <?php echo"suck my cock" ;?>
  </body>
</html>

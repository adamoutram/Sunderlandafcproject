<?php
			session_start();
			session_destroy();
			?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sunderland AFC</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="./main.css" />
		<link rel="shortcut icon" href="images/favicon.ico">
		<!---stylesheets for dropwdown menu -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
		
		<!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="bjqs.css">
        <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="demo.css">
	<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
			
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
	
	<!-- load jQuery and the plugin for slider-->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
	
	
	<form method="POST" action="loginaction.php" name="login Form" id="loginform" enctype="multipart/form-data">
				<p align="right">
					You are now LOGGED OUT
				
				 <input name="username" type="text" placeholder="username" id="username" required="required">
								
				 <input name="password" type="password" placeholder="password" id="password" required="required">
								
					<input type="submit" value="Login" />
				<a href="registeruser.php"><button type="button">Register</button></a>
			</p>	
		</form>

	</head>
<body>


<div id="header">
<h1 style="margin-bottom:0;" align="center"><img src="images/sunderlandafc-logo.png" align="left"> Sunderland AFC Fan Site <img src="images/sunderlandafc-logo.png" align="right"></h1></br>

<div id="page-wrap">
	        <ul class="dropdown">
        	<li><a href="index.php">Home</a></li>
        	
        	<li><a href="rssnewsfeed.php">News</a></li>
        			
        	<li><a href="players.php">Players</a></li>
        	
        	<li><a href="fixtures.php">Fixtures</a>
        		
        	</li>
        	<li><a href="http://www.safcstore.com/stores/sunderland/default.aspx" target="_blank">Store</a>
        		
        	</li>
        	<li><a href="http://www.safc.com/tickets" target="_blank">Membership</a>
        		
        	</li>
        	<li><a href="http://www.safc.com/hospitality-and-events" target="_blank">Events</a>
        		
        	</li>
        </ul>
		
	</div>
	<br />
	<br />
</div

<div id="content">
	<br />
<div id="container">
  
      

      <!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="images/stadium.png" title="The Stadium of Light"></li>
          <li><img src="images/africa.png" title="Sunderland AFC supporting youth football in Africa"></li>
          <li><img src="images/foundation.png" title="Foundation of Light"></li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->

      <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 520,
            width       : 1425,
            responsive  : true
          });

        });
      </script>


</div>
	



</div>
</body>
<div id="footer">
</div>

</div>


</html>
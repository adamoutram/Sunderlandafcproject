<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sunderland AFC</title>
		<meta charset="UTF-8"/>
		
		<!--loading api scripts for google maps API -->
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?v=3key={AIzaSyAKp8Ji1wZJme-warUtC_T9nj4ZpTy_BAs}&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(54.914539, -1.388379),
          zoom: 17
          
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
      
		<link rel="stylesheet" type="text/css" href="./main.css" />
		<link rel="shortcut icon" href="images/favicon.ico">
		<!---stylesheets for dropwdown menu -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
	<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
			
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
	
<?php

if (isset($_SESSION["authenticatedUser"]))
{
echo '<p align="right">You are logged on as ' . $_SESSION["authenticatedUser"] ."&nbsp;",  '<a href="useraccount.php"><button type="button">Account</button></a><a href="logout.php"><button type="button">Logout</button></a></p>';
}
else if (isset($_SESSION["authenticatedAdminUser"]))
{ 
echo '<p align="right">You are logged on as ' . $_SESSION["authenticatedAdminUser"] ."&nbsp;". ' <a href="adminuseraccount.php"><button type="button">Account</button></a><a href="logout.php"><button type="button">Logout</button></a></p></a>';
}
else{
?>	
	<form method="POST" action="loginaction.php" name="login Form" id="loginform" enctype="multipart/form-data">
				<p align="right">
				
				USERNAME: <input name="username" type="text"  id="username" required="required">
								
				PASSWORD: <input name="password" type="password" id="password" required="required">
								
					<input type="submit" value="Login" />
				<a href="registeruser.php"><button type="button">Register</button></a>
			</p>	
		</form>
<?php
}
?>
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
	

<div id="map-canvas"/>
	



</div>
</body>
<div id="footer">
</div>

</div>


</html>
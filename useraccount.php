<?php
session_start();

// Check if authenticated user
//if not re-direct to login page
if (!isset($_SESSION["authenticatedAdminUser"]))
{
$_SESSION["nologin"] = "Please Login";
	header("Location: admin_login.php");
}
else
{ 
//If authenticated then display page contents
?>
<?php //// Create connection
			$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");
			
			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$username = $_SESSION["authenticatedUser"];
			$query = "SELECT userimage FROM SAFCusers WHERE username='$username'" or die(mysqli_error());
			
			$result = mysqli_query($con, $query);
		
			while($rows=mysqli_fetch_array($result)){
	?>
			
<!DOCTYPE html>
<html>
	<head>
		<title>Sunderland AFC</title>
		 <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="./main.css" />
		<link rel="shortcut icon" href="images/favicon.ico">
		<!---stylesheets for dropwdown menu -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
	<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
			
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
	
	<script src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load('search', '1');
        google.setOnLoadCallback(function(){
          new google.search.CustomSearchControl().draw('cse');
        }, true);
    </script>
	
	
	<p align="right">You are logged on as <?php echo $_SESSION["authenticatedUser"]; ?> <a href="useraccount.php"><button type="button">Account</button></a><a href="logout.php"><button type="button">Logout</button></a></p>

	</head>
<body>


<div id="header">
<h1 style="margin-bottom:0;" align="center"><img src="images/sunderlandafc-logo.png" align="left"> Sunderland AFC Fan Site <img src="images/sunderlandafc-logo.png" align="right"></h1></br>
<nav>
<div id="page-wrap">
	        <ul class="dropdown">
        	<li><a href="index.php">Home</a>
        		
        	</li>
        	<li><a id="menulink" href="rssnewsfeed.php">News</a>
        		<ul class="sub_menu">
        			<li><a id="menulink" href="rssnewsfeed.php">Club News</a></li>
        			<li><a id="menulink" href="rssnewsfeed.php">News Feed</a></li>
        			 <li>
        				<a href="rssnewsfeed.php.php">Team News</a>
        				<ul>
        					<li><a href="rssnewsfeed.php">Men's Squad</a></li>
        					<li><a href="#">Woman's Squad</a></li>
        					<li><a href="#">Development Squad</a></li>
        				</ul>
        				</ul></li>
        			 </li>
        			
        	<li><a href="players.php">Players</a>
        		<ul class="sub_menu">
        			 <li>
        				<a href="firstteam.php">Men's First Team</a>
        				<ul>
        					<li><a href="firstteam.php">Goalkeepers</a></li>
        					<li><a href="firstteam.php">Defenders</a></li>
        					<li><a href="firstteam.php">Midfielders</a></li>
        					<li><a href="firstteam.php">Attackers</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="youthteam.php">U-21s First Team</a>
        				<ul>
        					<li><a href="youthteam.php">Goalkeepers</a></li>
        					<li><a href="youthteam.php">Defenders</a></li>
        					<li><a href="youthteam.php">Midfielders</a></li>
        					<li><a href="youthteam.php">Attackers</a></li>
        				</ul>
        			 </li>
        			 <li>
        				<a href="#">Women's First Team</a>
        				<ul>
        					<li><a href="#">Goalkeepers</a></li>
        					<li><a href="#">Defenders</a></li>
        					<li><a href="#">Midfielders</a></li>
        					<li><a href="#">Attackers</a></li>
        				</ul>
        			 </li>
        			 
        			 <li>
        				<a href="#">Backroom Staff &amp; Board</a>
        				<ul>
        					<li><a href="#">Coaches</a></li>
        					<li><a href="#">Backroom Staff</a></li>
        					<li><a href="#">Board Members</a></li>
        				</ul>
        			 </li>
        			 
        		</ul>
        	</li>
        	<li><a href="fixtures.php">Fixtures</a>
        		<ul class="sub_menu">
        			 <li><a href="fixtures.php">Fixture List</a></li>
        			 <li><a href="fixtures.php">Results</a></li>
        			 <li><a href="http://www.safc.com/tickets/tickets" target="_blank">Buy Tickets</a></li>
        			 <li><a href="https://www.safc.com/hospitality-and-events/matchday/rewards/travel" target="_blank">Match Travel</a></li>
        			 
        		</ul>
        	</li>
        	<li><a href="http://www.safcstore.com/stores/sunderland/default.aspx" target="_blank">Store</a>
        		<ul class="sub_menu">
        			 <li><a href="http://www.safcstore.com/stores/sunderland/products/product_browse.aspx?category%7ccategory_root%7c31399=Football%20Kits" target="_blank">Club Kits</a></li>
        			 <li><a href="http://www.safcstore.com/stores/sunderland/products/product_browse.aspx?category%7ccategory_root%7c32518=Training%20%26%20Leisurewear" target="_blank">Training Wear</a></li>
        			 <li><a href="http://www.safcstore.com/stores/sunderland/products/product_browse.aspx?category%7ccategory_root%7c31265=Fashion" target="_blank">Fashion</a></li>
        			 
        		</ul>
        	</li>
        	<li><a href="http://www.safc.com/tickets" target="_blank">Membership</a>
        		<ul class="sub_menu">
        			 <li><a href="http://www.safc.com/tickets/rewards" target="_blank">Benifits</a></li>
        			 <li><a href="http://www.safc.com/tickets/10-game-season-card" target="_blank">Promotions</a></li>
        			 <li><a href="http://www.safc.com/tickets/10-game-season-card/how-to-buy" target="_blank">Apply</a></li>
        		</ul>
        	</li>
        	<li><a href="http://www.safc.com/hospitality-and-events" target="_blank">Events</a>
        		<ul class="sub_menu">
        			 <li><a href="http://www.safc.com/hospitality-and-events/whats-on" target="_blank">SoL Events</a></li>
        			 <li><a href="googlemaps.php">Find Us</a></li>
        			 <li><a href="twitter.php">Contact Us</a></li>
        			 <li><a href="http://www.safc.com/hospitality-and-events/weddings/room-hire-rates" target="_blank">Hire the SoL</a></li>
        		</ul>
        	</li>
        </ul>
		
	</div>

<br />
<br />
</div>
<div id="content">
	
<br />
<div id="cse" style="width:100%;">Loading...</div>

<fieldset>
<br />
<br />
<?php
				$HourOfDay = date("G");
				if ($HourOfDay < 12) {
					echo 'Good Morning!';
				} else {
					echo 'Good Afternoon';
				}
				echo "&nbsp;";
				echo $_SESSION["authenticatedUser"];
        ?>
        <br />
 <h6>Welcome to your Sunderland AFC Fan Site user account:</h6>
 <br />
<?php echo $_SESSION["adminnamechange"]; ?>
<?php echo $_SESSION["userUpdate"]; ?>
<br />
<br />
<div id="userimage">
<img src="uploads/<?php echo $rows['userimage'];  ?>" height="100" width="150" border="1">
<p>Add / Change Profile Picture <a href="fileupload.php"><button type="button"> Add Picture</button></a></p><br /></div> 
<ul>
  <li>Change your account Username <a href="changeusername.php"><button type="button">Change Username</button></a></li></br>
  <li>Change your account Password <a href="changeuserpassword.php"><button type="button">Change Password</button></a></li><br />
  <li>Change your account Email Address <a href="changeuseremail.php"><button type="button"> Change Email</button></a></li><br />
  <li>Change your contact information <a href="changeusercontact.php"><button type="button"> Change Contact</button></a></li><br />
  
</ul>

<br />
<p>View and Download Personal Information Kept About You <a href="dynamicPDF.php"><button type="button"> PDF Download</button></a></p>
<br />
</fieldset>


</div>
</body>
<div id="footer">
</div>

</div>


</html>
<?php
}}
?>
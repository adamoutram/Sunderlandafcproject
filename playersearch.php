<?php
session_start();
// Create connection
			$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");
			
			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			

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
	<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
			
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/jquery.dropdownPlain.js"></script>
	
	<!--jQuery/ajax google APIs -->
	<script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
 
	
	<!--Autocomplete JS function -->
        <script type="text/javascript">
                $(document).ready(function(){
                    $("#name").autocomplete({
                        source:'getautocomplete.php',
                        minLength:1
                    });
                });
        </script>
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
				
				 <input name="username" type="text" placeholder="username" id="username" required="required">
								
				 <input name="password" type="password" placeholder="password" id="password" required="required">
								
					<button type="submit" value="Login">Login</button>
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
</div

<div id="content">
	
<br />

<div id="playersearch">
<form method="post" action="">
<p>Search for players:</p><input name="name" id="name" type="text" size="60" maxlength="88" autocomplete="off" /> <input type="submit" value=" Search " />
</form>
<br />
</div>
</div>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$q=$_POST['name'];
$q=mysqli_escape_string($con, $q) or die(mysqli_error());
$q_fix=str_replace(" ","%",$q); // Space replacing with %
$query = "SELECT * FROM firstteamsquad WHERE surname LIKE N'%$q_fix%' OR forename LIKE N'%$q_fix%'";
$sql=mysqli_query($con, $query)or die(mysqli_error()); 

echo "<table border='1', width = '1000px' id='playerstable', border-color:'#D80000';>

<tr>
<th width ='600px'><h6>Player</h6></th>
<th width ='600px'><h6>Bio</h6></th>

</tr>";


while($row=mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
"<br />
				<br />";
				echo "<tr>";

				echo "<td>" . $row["image"] ."</td>";

				echo "<td>" . $row["forename"] ."\n". $row["surname"] . "
				<br />
				<br />
				DOB:" . $row["DOB"] . "
				<br />
				<br />
				Nationality:" . $row["nationality"] . "
				<br />
				<br />
				Position:" . $row["position"] . "
				<br />
				<br />
				Height (cm):" . $row["height"] . "
				<br />
				<br />
				Weight (kg):" . $row["weight"] . 
				"<br />
				<br />";
				echo "<form name='input' action='playerbios.php' method='get'>
<input type='hidden' name='Player_ID' value=" . $row["Player_ID"] . ">
<input type='submit' value='Player Bio'>
</form>";
		"<br />";	

				 "</td>";

				"</tr>";
			}

			echo "</table>";
}
else {
	echo 'there were no results';
}


?>

</div>
</body>
<footer>
	
</footer>

</div>


</html>	
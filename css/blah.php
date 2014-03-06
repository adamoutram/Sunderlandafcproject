<?php
session_start();

// Check if authenticated user
//if not re-direct to login page
if (!isset($_SESSION["authenticatedUser"]))
{
$_SESSION["message"] = "Please Login";
	header("Location: index.php");
}
else
{ 
//If authenticated then display page contents
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sunderland AFC</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="./main.css" />
		<link rel="shortcut icon" href="images/favicon.ico">
		
		<p align="right">You are logged on as <?php echo $_SESSION["authenticatedUser"]; ?> <a href="useraccount.php"><button type="button">Account</button></a><a href="logout.php"><button type="button">Logout</button></a></p>

	
<div id="container" style="width:100%">

<div id="header">
<h1 style="margin-bottom:0;" align="center"><img src="images/sunderlandafc-logo.png" align="left"> Sunderland AFC Fan Site <img src="images/sunderlandafc-logo.png" align="right"></h1></br>

<div id="menu">
<a href="index.php">Home | </a>
<a href="news.php"> News | </a>
<a href="players.php"> Players |</a>
<a href="fixtures.php"> Fixtures |</a>
<a href="store.php"> Store |</a>
<a href="memebership.php"> Memebership |</a>
<a href="events.php"> Events </a>
<br />
<br />
<br /></div>
</div
</head>
<body>
 


<div id="content">
	<fieldset>
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
        
 <h6>The User account page is currently under construction</h6>
<?php echo $_SESSION["adminnamechange"]; ?>
<br />
<br />

<ul>
  <li>Change your account Username <a href="changeusername.php"><button type="button">Change Uername</button></a></li></br>
  <li>Change your account Password <a href="changeuserpassword.php"><button type="button">Change Password</button></a></li><br />
  <li>Change your account Email Address <a href="changeuseremail.php"><button type="button"> Change Email</button></a></li><br />
</ul>
</fieldset>
</div>
</body>

<div id="footer">
</div>

</div>


</html>			

<?php
}
?>
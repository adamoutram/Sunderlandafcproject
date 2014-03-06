<?php
session_start();
// Create connection
			$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");

			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			
/* store the values submitted by form in variable */
//store the data in variables came from form input //
$date = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['date']));

$competition = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['competition']));

$home = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['hometeam']));

$away = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['awayteam']));

$venue = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['venue']));

$result = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['timeresult']));

$attendance = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['attendance']));


$matchreport = $_POST['matchreport'];

$fixture_ID = $_POST['fixture_ID'];



$SQLupdate = mysqli_query($con, "UPDATE SAFCfixtures SET date='$date', competition='$competition', hometeam='$home', awayteam='$away', venue='$venue', timeresult='$result', attendance='$attendance', matchreport='$matchreport' WHERE fixture_ID='$fixture_ID'") or die(mysqli_error());

if (mysqli_query == TRUE){
	$_SESSION["fixtureUpdate"] = 'Player data successfully updated';

	header("location: admineditfixtures.php");
}
else{
	$_SESSION["fixtureUpdate"] = 'Player data could NOT be updated';

	header("location: admineditfixtures.php");
	
}
?>

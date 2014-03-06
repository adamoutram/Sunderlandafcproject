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
$forename = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['forename']));

$surname = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['surname']));

$DOB = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['DOB']));

$nationality = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['nationality']));

$position = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['position']));

$weight = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['weight']));

$height = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['height']));

$joined = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['joined']));


$bio = $_POST['bio'];

$Player_ID = $_POST['Player_ID'];



$SQLupdate = mysqli_query($con, "UPDATE firstteamsquad SET forename='$forename', surname='$surname', DOB='$DOB', nationality='$nationality', position='$position', weight='$weight', height='$height', joined='$joined', bio='$bio' WHERE Player_ID='$Player_ID'") or die(mysqli_error());

if (mysqli_query == TRUE){
	$_SESSION["playerUpdate"] = 'Player data successfully updated';

	header("location: admineditplayers.php");
}
else{
	$_SESSION["playerUpdate"] = 'Player data could NOT be updated';

	header("location: admineditplayers.php");
	
}
?>

<?php
echo $SQLcommand;
?>
// 

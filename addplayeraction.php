<?php
session_start();
		// Create connection
			$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");

			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
$forename = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['forename']));

$surname = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['surname']));

$DOB = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['DOB']));

$nationality = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['nationality']));

$position = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['position']));

$weight = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['weight']));

$height = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['height']));

$joined = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['joined']));


$bio = $_POST['bio'];

$SQLquery = mysqli_query($con, "INSERT INTO firstteamsquad (forename, surname, DOB, nationality, position, weight, height, joined, bio) VALUES ('$forename', '$surname', '$DOB', '$nationality', '$position', '$weight', '$height', '$joined', '$bio')") or die(mysqli_error());

if (mysqli_query == TRUE){
	$_SESSION["playerAdd"] = 'Player data successfully added to database';

	header("location: admineditplayers.php");
}
else{
	$_SESSION["playerAdd"] = 'Player data could not be added to database';

	header("location: admineditplayers.php");
}
?>
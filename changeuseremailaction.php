<?php

session_start();

$username = $_SESSION["authenticatedUser"];
$newemail =$_POST['newuseremail'];

/// Create connection
						$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");


			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}


$queryget = mysqli_query($con, "SELECT email FROM SAFCusers WHERE username='$username'") or die(mysqli_error());


$updatequery = mysqli_query($con, "UPDATE SAFCusers SET email='$newemail' WHERE username='$username'") or die(mysqli_error());	


if ($updatequery = TRUE ){
	
	$_SESSION["adminemailchange"] = "Your email has been changed to $newemail";
	header("location: useraccount.php");
}

else {
	$_SESSION["noadminemailchange"] = "Your email could not be changed, Please try again";
	header("location: changeadminemail.php");
}


mysqli_close($con);
?>
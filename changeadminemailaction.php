<?php

session_start();

$username = $_SESSION["authenticatedAdminUser"];
$newemail =$_POST['newadminemail'];

/// Create connection
						$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");


			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}


$queryget = mysqli_query($con, "SELECT email FROM admins WHERE username='$username'") or die(mysqli_error());


$updatequery = mysqli_query($con, "UPDATE admins SET email='$newemail' WHERE username='$username'") or die(mysqli_error());	


if ($updatequery = TRUE ){
	
	$_SESSION["adminnamechange"] = "Your email has been changed to $newemail";
	header("location: adminuseraccount.php");
}

else {
	$_SESSION["noadminemailchange"] = "Your email could not be changed, Please try again";
	header("location: changeuseremail.php");
}


mysqli_close($con);
?>
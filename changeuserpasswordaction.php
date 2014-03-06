<?php

session_start();

// Create connection
			$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");
			
			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
$username = $_SESSION["authenticatedUser"];
$currentpassword = mysqli_real_escape_string($con, preg_replace('#[^A-Za-z0-9]#i', '',  sha1($_POST['currentpassword'])));
$newpassword = mysqli_real_escape_string($con, preg_replace('#[^A-Za-z0-9]#i', '', sha1($_POST['newpassword'])));
$confirmnewpassword = mysqli_real_escape_string($con, preg_replace('#[^A-Za-z0-9]#i', '', sha1($_POST['confirmnewpassword'])));

$queryget = mysqli_query($con, "SELECT password FROM SAFCusers WHERE username='$username'") or die(mysqli_error());
$row = mysqli_fetch_assoc($queryget);

$currentpasswordDB = $row['password'];

//check passwords


if ($newpassword !== $confirmnewpassword) {
	$_SESSION["nopasswordchange"] = "Your passwords did not match, Please try again";
	header("location: changeuserpassword.php");
}

if ($currentpassword === $currentpasswordDB)
//success, change password in DB
{
	$updatequery = mysqli_query($con, "UPDATE SAFCusers SET password='$newpassword' WHERE username='$username'") or die(mysqli_error());	
}

else {
	$_SESSION["nopasswordchange"] = "Your passwords did not match, Please try again";
	header("location: changeuserpassword.php");
}

if ($updatequery = TRUE ){
	session_destroy();
	session_start();
	$_SESSION["passchange"] = "Your password has been changed please login";
	header("location: index.php");
}

else {
	$_SESSION["nopasswordchange"] = "Your password could not be changed, Please try again";
	header("location: changeuserpassword.php");
}


mysqli_close($con);
?>
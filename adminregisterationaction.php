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
// sanitize data using preg_replace and mysql_real_escape_string to avoid sql injection //
$username = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['username']));
$pass = mysqli_real_escape_string($con, preg_replace('#[^A-Za-z0-9]#i', '', $_POST['password']));
$email = ($_POST['email']);
$firstname = mysqli_real_escape_string($con, preg_replace('#[^A-Za-z0-9]#i', '', $_POST['firstname']));
$surname = mysqli_real_escape_string($con, preg_replace('#[^A-Za-z0-9]#i', '', $_POST['surname']));
$DOB = ($_POST['DOB']);
/* encrypting password while using md5() function */
$password = sha1($pass);
$confirm_password = mysqli_real_escape_string($con, preg_replace('#[^A-Za-z0-9]#i', '', $_POST['passwordconf']));

/* check if password and confirm password matched */
if ($pass != $confirm_password) {
	$_SESSION['passwordmismatch'] = "Passwords did not match, try again";
	header("location: registeradminuser.php");
}
 
/* check if username is already in use or not */
$queryuser = mysqli_query($con, "SELECT username FROM users WHERE username='$username' ") or die(mysqli_error());
$checkuser = mysqli_num_rows($queryuser);
if ($checkuser != 0) { header('Location: registeradminuser.php');
} else {

	/* write a query to insert user details into database */
	$insert_user = mysqli_query($con, "INSERT INTO admins (username, password, email, forename, surname) VALUES ('$username', '$password', '$email', '$firstname', '$surname')") or die(mysqli_error());

}
if (mysqli_query == TRUE) {
	$_SESSION["registeredAdminUser"] = $username;

	header("location: adminregistersuccess.php");
} else {
	$_SESSION["messagereg"] = "Please register an admin account";
	header("Location: registeradminuser.php");
}
?>
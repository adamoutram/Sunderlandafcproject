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

$username = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['username']));

$AddressL1 = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['addressL1']));

$AddressL2 = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['addressL2']));

$city = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['city']));

$postcode = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['postcode']));

$telephone = mysqli_real_escape_string($con ,preg_replace('#[^A-Za-z0-9]#i', '', $_POST['telephone']));

$email = $_POST['email'];

$username = $_SESSION["authenticatedUser"];



$SQLupdate = mysqli_query($con, "UPDATE SAFCusers SET firstname='$forename', surname='$surname', DOB='$DOB', username='$username', email='$email', addressL1='$AddressL1', addressL2='$AddressL2', city='$city', postcode='$postcode', telephone='$telephone' WHERE username='$username'") or die(mysqli_error());

if (mysqli_query == TRUE){
	$_SESSION["userUpdate"] = 'User data successfully updated';

	header("location: useraccount.php");
}
else{
	$_SESSION["userNoUpdate"] = 'User data could NOT be updated';

	header("location: changeusercontact.php");
	
}
?>

<?php
echo $SQLcommand;
?>
// 

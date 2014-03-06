<?php
session_start();
// Create connection
			$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");

			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
$itemtitle = $_POST['itemtitle'];
$itemdescr = $_POST['itemdescr'];
$itemlink = $_POST['itemlink'];



if ($insert_rssitem = mysqli_query($con, "INSERT INTO rssnewsfeed (item, description, link) VALUES ('$itemtitle', '$itemdescr', '$itemlink')")or die(mysqli_error()) === TRUE ) {
	$_SESSION["rssItemadded"] = "RSS news Item added";

	header("location: rssnewsfeed.php");
} else {
	$_SESSION["rssItemNotadded"] = "The item could not be added, please try again";
	header("Location: addrssitem.php");
}
?>

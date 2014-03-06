<?php
session_start();
// Create connection
			$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");

			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
$output_dir = "/customers/a/1/7/adamoutramleedsmet.co.uk//httpd.www/uploads/";

$username =  $_SESSION["authenticatedUser"];


if(isset($_FILES["myfile"]))
{
	
	//Filter the file types , if you want.
	if ($_FILES["myfile"]["error"] > 0)
	{
	allowedTypes:"png,gif,jpg,jpeg";
	  echo "Error: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		//move the uploaded file to uploads folder;
    	move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $_FILES["myfile"]["name"]);
    
   	 echo "Uploaded File :".$_FILES["myfile"]["name"];
	 
	 
	 
	 $filename = $_FILES["myfile"]["name"];
	 $username =  $_SESSION["authenticatedUser"];
	
	 
	 $sqlcommand= mysqli_query($con, "UPDATE SAFCusers SET userimage= '$filename' WHERE username='$username'") or die(mysqli_error());
	}

}
?>
<?php

// Create connection
			$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");
			
			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			

?>
<html>
<body>
<form method="post" action="">
<input type="text" name="q" /> <input type="submit" value=" Search " />
</form>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$q=$_POST['q'];
$q=mysqli_escape_string($con, $q) or die(mysqli_error());
$q_fix=str_replace(" ","%",$q); // Space replacing with %
$query = "SELECT * FROM firstteamsquad WHERE surname LIKE N'%$q_fix%' OR forename LIKE N'%$q_fix%'";
$sql=mysqli_query($con, $query)or die(mysqli_error()); 


while($row=mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
$surname=$row['surname'];
$forename=$row['forename'];
$position=$row['position'];
$player_ID=$row['Player_ID'];
$search_output .= "$forename, $surname, $position";
$search_output .= "<form name='input' action='playerbios.php' method='get'>
<input type='hidden' name='Player_ID' value=" . $row["Player_ID"] . ">
<input type='submit' value='Player Bio'>
</form>";

echo $search_output;
}}
else {
	echo 'there were no results';
}


?>
</body>
</html>
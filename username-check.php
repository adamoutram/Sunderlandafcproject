<?php
session_start();

// Create connection
			$con = mysqli_connect("localhost", "root", "", "test");

			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
if(isset($_POST['username']) && !empty($_POST['username'])){
      $username=strtolower(mysqli_real_escape_string($con, $_POST['username']));
      $query="select * from bookings where the_date='$username'";
      $res=mysqli_query($con, $query);
      $count=mysqli_num_rows($res);
      $HTML='';
      if($count > 0){
        $HTML='user exists';
      }else{
        $HTML='';
      }
      echo $HTML;
}
?>
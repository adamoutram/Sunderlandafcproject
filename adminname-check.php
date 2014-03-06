<?php
session_start();

include "connect_to_mysql.php";
			
if(isset($_POST['username']) && !empty($_POST['username'])){
      $username=strtolower(mysqli_real_escape_string($con, $_POST['username']));
      $query="select * from adminisrators where username='$username'";
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
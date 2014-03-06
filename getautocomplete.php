<?php
	//create connection
	$con = mysqli_connect("adamoutramleedsmet.co.uk.mysql", "adamoutramleeds", "1Rebeccaleeks", "adamoutramleeds");

			// Check connection
			if (mysqli_connect_errno($con)) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
 
 $term=$_GET["term"];
 
 $query=mysqli_query($con, "SELECT * FROM firstteamsquad WHERE surname LIKE '%".$term."%' ORDER BY surname ") or die(mysqli_error());
 $json=array();
 
    while($name=mysqli_fetch_array($query)){
         $json[]=array(
                    'value'=> $name["surname"],
                    'label'=>$name["surname"]." - ".$name["Player_ID"]
                        );
    }
 
 echo json_encode($json);
 
?>
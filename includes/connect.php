<?php
	
	// $connection = mysqli_connect localhost, user, password, database
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');

	//if database connection doesnt work 
	//$mysqli->connect_error then we want it to die and have this message 
	if($mysqli->connect_error){
		die('connect error (' . $mysqli->connect_errno . ')'
		.	$mysqli->connect_error );
	}
	//allow you to know if it works
	else{
		//echo "connection made";
	}
	//closing
	$mysqli->close();

?>
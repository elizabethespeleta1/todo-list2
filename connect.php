<?php
	//why is this important? Why does localhost have to be first
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');

	if($mysqli->connect_error){
		die('connect error (' . $mysqli->connect_errno . ')'
		.	$mysqli->connect_error );
	}
	else{
		echo "connection made";
	}
	$mysqli->close();

?>
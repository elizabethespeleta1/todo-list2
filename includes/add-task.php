<?php 
	//making new variables
	$task = strip_tags($_POST['task']);
	$date = $date('Y-m-d');
	$time = date('H:i:s');

	//connecting to database
	include('connect.php');

	//putting info in mysqli
	//then mysqli to put things into the database
	$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
	$mysqli ->query("INSERT INTO tasks VALUES('','$task','$date','$time')");

	//actually querying the tasks
	$query = "SELECT = FROM tasks WHERE task='$task' and date='$date' and time='$time'";
?>
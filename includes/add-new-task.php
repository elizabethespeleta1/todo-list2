<?php 
	//making new variables
	$task = strip_tags($_POST['task']);
	$date = date('Y-m-d');
	$time = date('H:i:s');

	//connecting to database
	include('connect.php');

	//putting info in mysqli
	//then mysqli to put things into the database
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
	$mysqli ->query("INSERT INTO tasks VALUES('','$task','$date','$time')");

	//actually querying the tasks
	$query = "SELECT = FROM tasks WHERE task='$task' and date='$date' and time='$time'";

	//if the result is equal to the query
	if($result = $mysqli->query($query)){
		while ($row = $result->fetch_assoc()){
			$task_id = $row['id'];
			$task_name = $row['task'];
		}
	}

	$mysqli->close();

	echo '<li><span>' . $task_name . '</span><img id="' . $task_id . '"class="delete-button" width="10px" src="images/close.svg"/></li>'; 
?>
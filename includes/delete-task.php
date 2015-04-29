<?php 
	$task_id = strip_tags($_POST['id']);
	//getting connect file
	require('connect.php');
	//logging into localhost
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');

	//if the result = the database delete the task
	if($result = $mysqli->query("DELETE FROM tasks WHERE id='task_id'")){

	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Simple To-Do List</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<!-- how to add items for to-do list -->
	<div class="wrap">
		<!-- unordered list -->
		<div class="task-list">
			<ul>
				<!-- getting this file because it needs to connect first -->
				<?php require("includes/connect.php");?>
			</ul>
		</div>
	<!-- form  -->
	<form class="add-new-task" autocomplete="off">

		<input type="text" name="new-task" placeholder="add new iten..."/>
	</form>
	</div>

</body>
</html>
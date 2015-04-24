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
<script src="http://code.jquery.com/jquery-latest.min.js"> </script>
<script>
	add_task();

	function add_task(){
		$('.add-new-task').submit(function() {
			var new_task = $('.add-new-task input[name=new-task]').val();

			if(new_task != ''){
				$.post('includes/add-new-task.php', { task: new_task}, function(data) {
					$(('add-new-task input[name=new-task]').val();
					$(data).appendTo('task-list ul').hide().fadeIn();
				});
			}
			return false;
		});
	}
</script>
</html>
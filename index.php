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
	//calling the add task function

	function add_task(){
		$('.add-new-task').submit(function() {

			var new_task = $('.add-new-task input[name=new-task]').val();

			//getting form submitted
			if(new_task != ''){
				$.post('includes/add-new-task.php', {task: new_task}, function(data) {
					//sending to add-new-task.php file
					$('add-new-task input[name=new-task]').val();
					// then its gonna confirm if you added it through jquery
					$(data).appendTo('task-list ul').hide().fadeIn();
				});
			}
			return false;
		});
	}

	//
	$('.delete-button').click(function(){
		//making variables
		var current_element = $(this);
		var task_id = $(this).attr('id');

		//getting in post, the id comes from delete-task
		$.post('includes/delete-task.php', {id: task_id}, function(){
			//calling the variable ^
			current_element.parent().fadeOut("fast", function(){
				$(this).remove();
			});
		});
	});

</script>
</html>
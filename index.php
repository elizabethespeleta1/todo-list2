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
				<?php require("includes/connect.php");
				//selecting everything from table task from date and time
				$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
				$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";

				//if result = the query
				//it makes a new variable
				if($result = $mysqli->query($query)){
					// info go to this variable
					$numrows = $result->num_rows;
					if($numrows>0){
						while($row= $result->fetch_assoc()){
							//variable for certain rows
							$task_id = $row['id'];
							$task_name = $row["task"];

							echo "<li>
								<span>'.$task_name'
							";
						}
					}
				}

				?>

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
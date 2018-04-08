<?php
	if(isset($_GET['id']) && isset($_GET['completed']) ){
	$id=$_GET['id'];	
	$completed = $_GET['completed'];
	include('connectDB.php');
	
	$sql = "UPDATE tasks SET completed=".$completed." WHERE id=".$id;  
	
	if($result = $dbhandle->query($sql)){
		echo 'Task  with ID '. $id .' updated!';
	}
	else{
		echo 'Unable to update task!';
	}
		
		
	}
	
	?>
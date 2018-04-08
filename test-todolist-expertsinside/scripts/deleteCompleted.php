<?php
	include('connectDB.php');
	
	$sql = "DELETE FROM tasks WHERE completed = 1"; 
	
	if($result = $dbhandle->query($sql)){
		if($dbhandle->affected_rows == 0){
			echo 'there is no completed tasks to remove!';	
		}
		else{
			echo $dbhandle->affected_rows.' completed tasks removed!';
		}
	}
	else{
		echo 'Unable to delete Completed Tasks';
	}
	?>
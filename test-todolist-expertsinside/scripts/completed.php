<?php
	include('connectDB.php');
	
	$sql = "SELECT * FROM tasks WHERE completed=1";
	$result = $dbhandle->query($sql);
	$data = [];
	while($row = $result->fetch_assoc()){
		array_push($data,$row); 
	}
	echo json_encode($data);
	
	?>
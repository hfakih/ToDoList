<?php
	if(isset($_GET['id'])){
	$id=$_GET['id'];	
	
	include('connectDB.php');
	
	$sql = "SELECT * FROM tasks WHERE id=".$id;
	$result = $dbhandle->query($sql);
	$data = [];
	while($row = $result->fetch_assoc()){
		array_push($data,$row); 
	}
	echo json_encode($data);
		
		
	}
	
	?>
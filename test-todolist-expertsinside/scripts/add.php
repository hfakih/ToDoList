<?php
	include('connectDB.php');
	
	$data = json_decode(file_get_contents("php://input"));
	
	$title = $dbhandle->real_escape_string($data->title);
    $category = $dbhandle->real_escape_string($data->category);
	
	$sql = "INSERT INTO tasks(title,category) VALUES('".$title."','".$category."')";
	
	$dbhandle->query($sql);
	?>
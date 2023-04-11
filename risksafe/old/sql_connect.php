<?php
	// CHANGE THIS TO YOUR OWN SQL INFO!!!
	$sql_host = "localhost";
	$sql_user = "root";
	$sql_password = "";
	$sql_database = "risksafe";
	
	$link = mysqli_connect($sql_host,$sql_user,$sql_password,$sql_database) or die("Mysqli connection error: " . mysqli_error($link));	
?>
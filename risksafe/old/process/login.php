<?php
	include("../sql_connect.php");
	$res = $link->query("SELECT * FROM `users` WHERE `wemail` = '".$link->real_escape_string($_POST['l_email'])."' AND `password` = '".hash("Whirlpool",$_POST['l_password'])."'");
	
	if($res->num_rows) {
		session_start();
		while($row = $res->fetch_assoc()) {
			$_SESSION['uid'] = $row['uid'];
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['wemail'] = $row['wemail'];
			$_SESSION['phone'] = $row['phone'];
			$_SESSION['location'] = $row['location'];
			$_SESSION['bname'] = $row['bname'];
			$_SESSION['steps'] = $row['steps'];
		}
		echo "1";
	}
	else echo "Wrong username/password";
?>
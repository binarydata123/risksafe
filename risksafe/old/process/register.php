<?php
	include("../sql_connect.php");
	session_start();
	if(strlen($_POST['fname']) > 2 && strlen($_POST['wemail']) > 2 && strlen($_POST['password']) > 2 && strlen($_POST['phone']) > 2 && strlen($_POST['location']) > 2 && strlen($_POST['bname']) > 2) {
		if($_POST['password'] == $_POST['cpassword']) {
			$res = $link->query("SELECT `uid` FROM `users` WHERE `wemail` = '".$link->real_escape_string($_POST['wemail'])."'");
			if($res->num_rows) {
				echo "This e-mail is taken.";
			}
			else {
				$link->query("
					INSERT INTO `users` (`fname`,`wemail`,`password`, `phone`,`location`,`bname`) 
					VALUES (
					'".$link->real_escape_string($_POST['fname'])."',
					'".$link->real_escape_string($_POST['wemail'])."',
					'".hash("Whirlpool",$_POST['password'])."', 
					'".$link->real_escape_string($_POST['phone'])."', 
					'".$link->real_escape_string($_POST['location'])."',
					'".$link->real_escape_string($_POST['bname'])."'
					)
				");
				
				$res = $link->query("SELECT * FROM `users` WHERE `wemail` = '".$link->real_escape_string($_POST['wemail'])."'");
				while($row = $res->fetch_assoc()) {
					$_SESSION['uid'] = $row['uid'];
					$_SESSION['fname'] = $row['fname'];
					$_SESSION['wemail'] = $row['wemail'];
					$_SESSION['phone'] = $row['phone'];
					$_SESSION['location'] = $row['location'];
					$_SESSION['bname'] = $row['bname'];
				}
				$_SESSION['steps'] = 0;
				echo "1";
				
			}
		}
		else echo "Passwords do not match.";
	}
	else echo "Fill in all of the fields.";

?>
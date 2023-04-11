<?php
	include("../sql_connect.php");
	session_start();
	
	if(strlen($_POST['cardnum']) > 6 && strlen($_POST['expiry']) > 3 && strlen($_POST['cvc']) > 2) {
		$link->query("UPDATE `users` SET `cardnum` = '".$_POST['cardnum']."', `cardexp` = '".$_POST['expiry']."', `cardcvc` = '".$_POST['cvc']."',`steps`='1' WHERE `wemail` = '".$_SESSION['wemail']."'");
		
		$_SESSION['steps'] = 1;
		echo "1";
	}
	else echo "Fill in all of the fields.";
?>
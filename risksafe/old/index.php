<?php session_start(); ?>
<?php include_once("header.php"); ?>
<?php
	if(!isset($_SESSION['uid'])) {
		include("home_loggedout.php");
	}
	else {
		include("home_loggedin.php");
	}
?>
<?php include_once("footer.php"); ?>
<?php 

include_once("../config.php");
include_once('../model/users.php');

$user=new users;
if (!$user->isLogged()) {
	header('Location: ../view/login.php');
	exit;	
}


?>
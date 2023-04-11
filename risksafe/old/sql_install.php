<?php 
	include("sql_connect.php");
	
	$link->query("
		 CREATE TABLE IF NOT EXISTS `users` (
		 `uid` int(11) NOT NULL AUTO_INCREMENT,
		 `fname` varchar(255) NOT NULL,
		 `wemail` varchar(255) NOT NULL,
		 `phone` varchar(255) NOT NULL,
		 `location` varchar(255) NOT NULL,
		 `bname` varchar(255) NOT NULL,
		 `password` varchar(256) NOT NULL,
		 `cardnum` varchar(255) NOT NULL,
		 `cardexp` varchar(255) NOT NULL,
		 `cardcvc` int(11) NOT NULL,
		 `steps` int(11) NOT NULL,
		 PRIMARY KEY (`uid`)
		) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1

	");
		
?>
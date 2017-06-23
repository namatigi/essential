<?php
	#create database connection.
	// $link = new mysqli("localhost","root","Paulina@959");

	// if($link->connect_errno){
	// 	echo "Failed to connect to mysql: (".$link->connect_errno.")".$link->connect_error;		
	// }else{

	// echo "Successfully connected";
	// }

	$link = mysql_connect('localhost','root','Paulina@1959');

	if($link){
		echo "Connected";
	}else{
		echo "Disconnected";
	}

?>

<html>
	<head>
		<title>Include</title>
	</head>
	<body>
	

	</body>
</html> 
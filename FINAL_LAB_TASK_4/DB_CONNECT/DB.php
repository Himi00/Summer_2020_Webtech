<?php
	
	$host	= "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname	= "user";

	function dbConnection(){
		global $host;
		global $name;
		global $user;
		global $pass;

		return $conn = mysqli_connect($host, $user, $pass, $name);
	}

?>
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="blogdata";

	//execute query into database
	function execute ($query)
	{
			global $servername;
			global $username;
			global $password;
			global $databasename;
			$conn=mysqli_connect($servername,$username,$password,$databasename);
			$result=mysqli_query($conn,$query);
			return $result;
	}
	
	
?>
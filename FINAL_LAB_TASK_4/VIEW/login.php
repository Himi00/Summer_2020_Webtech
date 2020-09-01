

<!DOCTYPE html>
<html>
<center>
<head>
	<title>Admin Login</title>
</head>
<body><?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="admindata";

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
	//getdata from database
	function getdata ($query)
	{
		global $servername;
		global $username;
		global $password;
		global $databasename;
		$data=array();    //normal array
		$conn=mysqli_connect($servername,$username,$password,$databasename);
		$result=mysqli_query($conn,$query);
		if (mysqli_num_rows($result)>0) {
			while ($rows=mysqli_fetch_assoc($result)) {
				$entity=array();//associative array
				foreach ($rows as $key => $value) {
					$entity[$key]=$rows[$key];
				}
				$data[]=$entity;
			}
		}
		mysqli_close($conn);
		return $data;//return associative array
	}
	
?>
	<div>
		<h2> Log In</h2>

	</div>
	<h2>
		<?php 
			if (isset($mess)) {
				echo $mess;
			}
		 ?>
	</h2>
	<form method="post" action="AdminLogin.php" >
	  <div>
	  	<tr>
			<td>
				<label>Name </label>
				<input type="text" name="Name" align="left"> 
				<br></br>
			</td>
		</tr>
		<tr>
			<td>
				<label>Password</label>
				<input type="Password" name="Password" align="left" >
					<br></br>
			</td>
		</tr>
		
		<button name="Login">Login</button>

		<p>Not a member yet? <a href="AdminReg.php">Sign Up </a></p>

	  </div>
 </form>

</body>
</center>
</html>
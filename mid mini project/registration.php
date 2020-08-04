<?php
	session_start();

	if(isset($_POST['register'])){

		$Id = $_POST['Id'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConfirm = $_POST['passwordConfirm'];
		$Name = $_POST['name'];



		if(empty($uname) || empty($password) || empty($email) || empty($passwordConfirm) || empty($Name)){
			echo "This area can not be empty";
		}else {


			$file = fopen('info.txt', 'a');
			fwrite($file, $Id.'|'.$email.'|'.$password.'|'.$passwordConfirm.'|'.$Name."/r/n");
			fclose($file);

		      }



?>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form>
		<fieldset>
			<legend>SIGNUP</legend>
		
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" name="Id"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Password Confirm</td>
				<td><input type="confirmpass" name="confirmpass"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="register" name="register" value="register"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>
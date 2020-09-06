<?php
include ('../model/db_connect.php');
?>

<!DOCTYPE html>
<html>
<center>
<head>

	<script type="text/javascript" src="..\controller\regControl.js"></script>
    <title>Registration</title>
</head>
<body>
	<div>
		<h2> Registration </h2>

	</div>

<div>

	<form method="post" onsubmit="return validation()" >
	  	<tr>
			<td>
				<label>Author Name </label>
                <input type="text" id="name" placeholder="name" onkeyup ="validateName()" >				
                <br><label id="nameErr" > </label></br>
			</td>
		</tr>

		<tr>
			<td>
				<label>Contact Number</label>
				<input type="text" id="number" placeholder="Contact Number" onkeyup="validateNumber()">
					<br><label id="numErr"> </label></br>
			</td>
		</tr>
		
		<tr>
			<td>
				<label>User ID</label>
				<input type="text" id="uid" placeholder="User ID" onkeyup="validateuID()">
					<br><label id="uidErr"> </label></br>
			</td>
		</tr>

		<tr>
			<td>
				<label>Password</label>
				<input type="Password" id="Password" onkeyup="validatePass()">
					<br><label id="passErr"></label></br>
			</td>
		</tr>
		<tr>
			<td>
				<label>Confirm Password</label>
				<input type="Password" id="Confirm_Password" onkeyup="validatePass()">
					<br><label id="passErr1"></label></br>
			</td>
		</tr>
		
		<button name="submit">Submit</button>

		<p>Already a member? <a href="login.php">Sign in </a></p>


    </form>
</div>

</body>
</center>
</html>
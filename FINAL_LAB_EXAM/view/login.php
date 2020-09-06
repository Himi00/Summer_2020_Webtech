<!DOCTYPE html>
<html>
<center>
<head>
	<script type="text/javascript" src="..\controller\loginControl.js"></script>
    <title> Login</title>
</head>
<body>
	<div>
		<h2> Log In</h2>

	</div>

	<form method="post" onsubmit="return validation()">
	  <div>
	  	<tr>
			<td>
				<label>Name </label>
				<input type="text" id="name" onkeyup="validateName()" > 
				<br><label id="nameErr"></label></br>
			</td>
		</tr>
		<tr>
			<td>
				<label>Password</label>
				<input type="Password" id="Password" onkeyup="validatePass()">
					<br><label id="passErr"></label></br>
			</td>
		</tr>
		
		<button name="login" >Login</button>

		<p> Not a member yet? <a href="reg.php">Sign in </a></p>

	  </div>
 </form>

</body>
</center>
</html>
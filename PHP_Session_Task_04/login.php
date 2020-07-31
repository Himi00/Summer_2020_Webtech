<?php 
	session_start();
	$uname="Himi";
	$pass="12345";
	if (isset($_POST['login'])) {
	
			if ($uname == "Himi" || $pass == 12345) {
				$_SESSION['uname'] = $uname;
				$_SESSION['last_time']=time();
				header("Location:dashboard.php");

			}
		}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
</head>
<body>
	<fieldset>
    <legend><b>LOGIN</b></legend>
	<form method="post">
		<br/>
		      <table width="100%" border="1"cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" align="Left">
            <h1>Xcompany</h1>
          </td>
          <td align="right"><a href="home.php">Home</a></td>
          <td align="right"><a href="login.php">Login</a></td>
          <td align="right"><a href="registration.php">Registration</a></td>
        </tr>
      </table>
		<table width="100%" cellpadding="0" cellspacing="0">
			<h2 style="color:red"><?php if (isset($mess)) {
				 echo $mess;
			} ?></h2>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="uname" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="pass" type="password"></td>
				<td></td>
			</tr>		
			
			<tr>
				<td colspan="3">
					<fieldset>
				    
						<input name="" type="radio">Remember
						
					</fieldset>
				</td>
				
			</tr>		
			
		</table>
		<hr/>
		<input type="submit" name="login" value="Login">
		 <a href="#">Forgate Password</a>	
	</form>
</fieldset>
</body>
</html>
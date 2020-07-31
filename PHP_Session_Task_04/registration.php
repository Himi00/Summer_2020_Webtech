<?php 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
</head>
<body>
	<fieldset>
    <legend><b>REGISTRATION</b></legend>
	<form method="post">
		<br/>
		<table>
			<table>
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
			<h2 style="color:green"><?php if (isset($messs)) {
				 echo $messs;
			} ?></h2>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
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
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmpass" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="Male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="Other">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input size="2" type="date" name="dob">
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
		<input type="reset" name="reset">
	
</table>
 
                        
                        <tr>
                        	<td colspan="" align="center">Copyright@2017</td> </tr>
                    </table>
          
  
        </form>
</fieldset>
</body>
</html>

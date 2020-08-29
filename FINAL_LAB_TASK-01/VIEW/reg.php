 <?php 
  include ('validation.php');
  include ('database.php');

?> 

<!DOCTYPE html>
<html>
<center>
<head>
	<title>Registration</title>
</head>
<body>
	<div>
		<h2> Registration</h2>

	</div>
	
	<form method="post"  >
	  <div>
	  	<tr>
			<td>
				<label>Name </label>
				<input type="text" name="Name"> 
				<br><label><?php echo  $err_Name?></br>
			</td>
		</tr>
		<tr>
			<td>
				<label>Email</label>
				<input type="text" name="Email">
 					<br><label><?php echo $err_Email ?></br>
 		</td>
		</tr>
		<tr>
			<td>
				<label>Password</label>
				<input type="Password" name="Password" >
					<br><label><?php echo $err_Password ?></label></br>
		</td>
		</tr>
		
		<button name="submit">Submit</button>

		 <p>Already a member? <a href="login.php">Sign in </a></p> 


	  </div>

    </form>

</body>
</center>
</html>
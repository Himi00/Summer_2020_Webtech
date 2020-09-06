<?php
	require_once('service.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="logout.php">Logout</a> 
	
	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Password</td>
			<td>Email</td>
			
		</tr>

		<?php  
			$users = getAllUser();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['id']?></td>
			<td><?=$users[$i]['username']?></td>
			<td><?=$users[$i]['author_password']?></td>
			<td><?=$users[$i]['author_name']?></td>
			<td><?=$users[$i]['contact']?></td>
			<td>
				<a href="edit.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="delete.php?id=<?=$users[$i]['id']?>"><input type="button" value="Delete" onclick="return confirm('Are you want to delete <?=$users[$i]['username']?>?')" ></a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>
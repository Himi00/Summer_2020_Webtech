<?php

	require_once('../db/db.php');

	function getByID($id)
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "select * from users where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser()
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user)
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 )
		{
			return true;
		}else
		{
			return false;
		}
	}


	function insert($user)
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "insert into registration values('', '{$user['company_name']}','{$user['company_description']}', '{$user['industry']}', `{$user['company_website']}`, `{$user['company_logo']}`, `{$user['user_account_id']}`)";
		//$sql = "INSERT INTO `registration`(`id`, `company_name`, `company_description`, `industry`, `company_website`, `company_logo`, `user_account_id`) VALUES (NULL,'{$user['company_name']}`, `{$user['company_description']}`, `{$user['industry']}`, `{$user['company_website']}`, `{$user['company_logo']}`, `{$user['user_account_id']}`)";
		//execute ($sql);
		if(mysqli_query($conn, $sql))
		{
			return true;
		}else
		{
			return false;
		}
	}


	function update($user)
	{
		$conn = dbConnection();
		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql))
		{
			return true;
		}else{
			return false;
		}
	}
	function delete($user)
	{
		$conn = dbConnection();
		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "DELETE FROM `users` WHERE id={$user['id']}";

		if(mysqli_query($conn, $sql))
		{
			return true;
		}else
		{
			return false;
		}
	}

	function getAllCompany()
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "select * from company";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row);
		}

		return $users;
	}

	function insertCompany($user)
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "INSERT INTO registration('{$user['id']}', '{$user['company_name']}','{$user['profile_description']}', '{$user['industry']}', '{$user['company_website']}', '{$user['company_logo']}', '{$user['user_account_id']}')";
		if(mysqli_query($conn, $sql))
		{
			return true;
		}else
		{
			return false;
		}
	}
	function getId($username)
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "select id from users where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 )
		{
			return $user['id'];
		}else
		{
			return "null";
		}
	}
?>
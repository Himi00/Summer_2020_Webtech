<?php
	require_once('../model/db_connect.php');

	function getByID($uid){
		$conn = execute();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where uid={$uid}";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}


	function getAllUser(){
		$conn = execute();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $query);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($blogdata){
		$conn = execute();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from blogdata where uid='{$uid['uid']}' and password='{$uid['password']}'";
		$result = mysqli_query($conn, $query);
		$user = mysqli_fetch_assoc($result);

		if(count($uid) > 0 ){
			return true;
		}else{
			return false;
		}
	}


	function insert($blogdata){
		$conn = execute();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into blogdata (uid,name,number, password) values({$uid['uid']}', '{$uid['name']}','{$uid['password']}', '{$id['number']}')";
		if(mysqli_query($conn, $query)){
			return true;
		}else{
			return false;
		}
	}


	function update($blogdata){
		$conn = execute();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update blogdata set uid='{$uid['name']}', password='{$uid['password']}', email='{$uid['email']}' where uid={$uid['uid']}";

		if(mysqli_query($conn, $query)){
			return true;
		}else{
			return false;
		}
	}
?>
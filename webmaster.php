<?php

	session_start();
	
	if(isset($_POST['login'])){
		$password = sha1($_POST['password']);
		$username = $_POST['username'];
		
		$sql = "SELECT * FROM user where password = '$password' and username = '$username'";
		$query = mysqli_query($dbconnect, $query);
		$rs = mysqli_fetch_assoc($query);
		
		if(sha1($_POST['password'] === $rs['password']) && $_POST['username'] === $rs['username']) {
			$_SESSION['logged_in'] = true;
			$_SESSION['name'] = $rs['name'];
			header("location:admin.php");	
		}
		
		if(isset($_SESSION['logged_in'])){
			header("location:admin.php");
		} else {
			header("location:admin.php")
		}
	}
?>
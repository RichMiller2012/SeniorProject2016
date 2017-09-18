<?php 

	include("dbconnect.php");

	//start the session
	session_start();

	//check if user has logged out, clear the session if so
	if(isset($_GET['logout'])) {
		unset($_SESSION['admin']);
		header("location:login.php");
		die("1");
	}
	
	//check if user is already signed in
	if(isset($_SESSION['admin'])){
		header("location:admin-panel.php");
		die("2");
	} else if(isset($_POST['login'])){

		//query the database with users name and password
		$login_sql="SELECT * FROM user WHERE username='" . $_POST['username'] . "' AND password='" . sha1($_POST['password']) . "'";
		$login_query=mysqli_query($dbconnect, $login_sql);
		
		//check to see if a result is returned
		if(mysqli_num_rows($login_query) > 0) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['admin']=$login_rs['username'];
			header("location:admin-panel.php");
			die("4");
		} else {		
			header("location:login.php?error=login");
			die("5");
		}
	} else {
		header("location:login.php");
		die("3");
	}
?>


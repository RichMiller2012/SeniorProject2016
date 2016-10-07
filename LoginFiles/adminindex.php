<?php 

	include("dbconnect.php");

	session_start();
	
	if(isset($_POST['login'])){

		$login_sql="SELECT * FROM user WHERE username='" . $_POST['username'] . "' AND password='" . sha1($_POST['password']) . "'";
		$login_query=mysqli_query($dbconnect, $login_sql);
		
		if(mysqli_num_rows($login_query) > 0) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['admin']=$login_rs['username'];
		} else {
			echo "      " . sha1($_POST['password']);
			//header("location:adminindex.php?error=login");
		}
	}

	if(!isset($_SESSION['admin'])){
	    include("login.php");
	} else {    
		include("admin-panel.php");
	}
?>


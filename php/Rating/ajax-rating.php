<?php
	include("../dbconnect.php");

	$rating = 0;
	$articleId = 0;
	$ip = 0; //find way to get users IP
	
	//make database call to query for the user's IP, if it exists then
	//replace the rating, otherwise make a new entry
	

	if(isset($_POST['rating']) && !empty($_POST['rating'])){
		$rating = $_POST['rating'];
	}
	
	if(isset($_POST['articleId']) && !empty($_POST['articleId'])){
		$articleId = $_POST['articleId'];
	}
	
	if($rating > 0 && $articleId > 0){
		$ip = $_SERVER['REMOTE_ADDR'];
		$ip_sql = "SELECT * FROM rating WHERE address='$ip' AND textblockId=$articleId";
		$ip_query = mysqli_query($dbconnect, $ip_sql);
		$ip_rs = mysqli_fetch_assoc($ip_query);
		
		//update rating if it exists, else add new rating
		if(!empty($ip_rs)){
			
			$update_rating_sql = "UPDATE rating SET rate=$rating WHERE address='$ip'";
			$update_rating_query = mysqli_query($dbconnect, $update_rating_sql);
		} else {
			$insert_rating_sql = "INSERT INTO rating (address, rate, textblockId) VALUES ('$ip', $rating, $articleId)";
			$insert_rating_sql = mysqli_query($dbconnect, $insert_rating_sql);
		}
	}
?>
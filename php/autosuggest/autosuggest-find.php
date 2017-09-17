<?php

	$title = $_GET['auto_title'];
	
	$auto_title_sql = "SELECT textblockID FROM textblock WHERE title = '$title'";
	$auto_title_query = mysqli_query($dbconnect, $auto_title_sql);
	$auto_title_rs = mysqli_fetch_assoc($auto_title_query);
	
	$auto_title_id = 0;
		
	if(!empty($auto_title_rs)){
		do{
			$auto_title_id = $auto_title_rs['textblockID'];
		} while($auto_title_rs=mysqli_fetch_assoc($auto_title_query));
	}
	
	if($auto_title_id != 0){
		
		$url = "index.php?state=text&textblockID=$auto_title_id";

    echo "<meta http-equiv='refresh' content='1;url=$url'>";
	} else {
		
	}
?>
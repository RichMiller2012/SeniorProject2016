<?php
	echo "Category deleted";
	$categoryID = $_GET['categoryID'];
	$delete_sql = "DELETE FROM category WHERE categoryID = $categoryID";
	$delete_query = mysqli_query($dbconnect, $delete_sql);	
?>	
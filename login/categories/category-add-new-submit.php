<?php	
	$name = $_GET['name'];
	$cat_key = $_GET['nav_cat_key'];
	$insert_sql = "INSERT INTO category (categoryID, name, description, linkcatID, type) VALUES ('', '$name', '', 0, '$cat_key')";
	$insert_query = mysqli_query($dbconnect, $insert_sql);
	
	echo "<h2>New Root Category Added! $name</h2>";	
?>
<?php	
	//submit updated category name		
	echo "<h4>Submitting Changes</h4>";
	
	$new_name = $_GET['new-name'];
	$categoryID = $_GET['categoryID'];
	
	$update_sql = "UPDATE category SET name = '$new_name' WHERE categoryID = $categoryID";		
	$update_query = mysqli_query($dbconnect, $update_sql);
	
	echo $update_sql;
?>
	<h3>Successfully updated category to: <?php echo $new_name ?></h3>	
	
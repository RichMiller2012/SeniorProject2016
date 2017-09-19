<?php
	if(isset($_GET['color-update'])){
		
		
		$main_color = $_GET['main'];
		$primary_color = $_GET['primary'];
		$secondary_color = $_GET['secondary'];
		$tertiary_color = $_GET['tertiary'];
		$pop_color = $_GET['pop'];

		$update_color_sql = 
		"
			UPDATE config SET config_value = '$main_color' WHERE config_key = 'main_color'; 
			UPDATE config SET config_value = '$primary_color' WHERE config_key = 'primary_color'; 
			UPDATE config SET config_value = '$secondary_color' WHERE config_key = 'secondary_color'; 
			UPDATE config SET config_value = '$tertiary_color' WHERE config_key = 'tertiary_color'; 
			UPDATE config SET config_value = '$pop_color' WHERE config_key = 'pop_color';
		";
		
		$update_color_query = mysqli_multi_query($dbconnect, $update_color_sql);
		
		unset($_GET['color-update']);
	}
	header("location:../admin-panel.php?type=color-theme");
	
?>
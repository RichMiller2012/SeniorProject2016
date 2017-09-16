<?php
	$update_interval_config_sql = "SELECT config_value FROM config WHERE config_key = 'update_interval'";
	$update_interval_config_query = mysqli_query($dbconnect, $update_interval_config_sql);
	$update_interval_config_rs = mysqli_fetch_assoc($update_interval_config_query);
	
	$update_interval = 30;
	
	if(!empty($update_interval_config_rs)){
		$update_interval = $update_interval_config_rs['config_value'];
	} 
	
	$updates_section_sql = "SELECT * FROM textblock WHERE sort_date BETWEEN DATE_SUB(NOW(), INTERVAL $update_interval DAY) AND NOW() ORDER BY sort_time DESC";
	$updates_section_query = mysqli_query($dbconnect, $updates_section_sql);
	$updates_section_rs = mysqli_fetch_assoc($updates_section_query);
	
	if(!empty($updates_section_rs)){
		echo "<h4 class='new-alert'>New articles are here!</h4><hr>";
		do{
?>		
		<a href="index.php?state=text&textblockID=<?php echo $updates_section_rs['textblockID']?>">
		<div class="new-update-block">
			<h5><?php echo $updates_section_rs['title'] ?></h5>
			<p><?php echo $updates_section_rs['description']?></p>
			<br />
			<h5>Click to read it!</h5>
			<hr>
		</div>
		</a>
<?php
		} while($updates_section_rs=mysqli_fetch_assoc($updates_section_query));
	} else {
?>
		<h5>No updates at this moment, but check back soon!</h5>
<?php
	}

?>
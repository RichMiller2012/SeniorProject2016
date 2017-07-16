<?php

	$loadconfig_sql = "SELECT * FROM config";
	$loadconfig_query = mysqli_query($dbconnect, $loadconfig_sql);
	$loadconfig_rs = mysqli_fetch_assoc($loadconfig_query);
	
	//$config_update_interval[0] = array_keys($loadconfig_rs)[1];
	//echo $config_update_interval;
	
	$config_update_interval = $loadconfig_rs['config_value'];
	$config_ebook_link = mysqli_fetch_assoc($loadconfig_query)['config_value'];
	$config_use_shop_cart = mysqli_fetch_assoc($loadconfig_query)['config_value'];
?>

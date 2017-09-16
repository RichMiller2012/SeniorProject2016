<?php

	$color_theme_config_sql = "SELECT * FROM config";
		
	$color_theme_config_query = mysqli_query($dbconnect, $color_theme_config_sql);
	$color_theme_config_rs = mysqli_fetch_assoc($color_theme_config_query);
	
	$main_color = "";
	$primary_color = "";
	$secondary_color = "";
	$tertiary_color = "";
	$pop_color = "";
	
	if(!empty($color_theme_config_rs)){
		do{
		    
			$color_key = $color_theme_config_rs['config_key'];
			
			switch ($color_key){
				case "main_color":
					$main_color = $color_theme_config_rs['config_value'];
				case "primary_color":
					$primary_color = $color_theme_config_rs['config_value'];
				case "secondary_color":
				    $secondary_color = $color_theme_config_rs['config_value'];
				case "tertiary_color":
				    $tertiary_color = $color_theme_config_rs['config_value'];
				case "pop_color":
					$pop_color = $color_theme_config_rs['config_value'];		
			}
			
			/*
			if($color_key == 'main_color') $main_color = $color_theme_config_rs['config_value'];
			if($color_key == 'primary_color') $primary_color = $color_theme_config_rs['config_value'];
			if($color_key == 'secondary_color') $secondary_color = $color_theme_config_rs['config_value'];
			if($color_key == 'tertiary_color') $tertiary_color = $color_theme_config_rs['config_value'];
			if($color_key == 'pop_color') $pop_color = $color_theme_config_rs['config_value'];	
			*/
			
		} while($color_theme_config_rs=mysqli_fetch_assoc($color_theme_config_query));
	} else {
		/*
		$main_color = '#8EB9DE';
		$primary_color = '#1D7872';
		$secondary_color = '#71B095';
		$tertiary_color = '#DEDBA7';
		$pop_color = '#D13F32'; 
		*/
	}
	
	$_GET['main'] = $main_color;
    $_GET['primary'] = $primary_color;
	$_GET['secondary'] = $secondary_color;
	$_GET['tertiary'] = $tertiary_color;
    $_GET['pop'] = $pop_color;
	
	
?>

<div class="container">
    <div class="row">
        <h1>Color Theme Page</h1>
	</div>
	
	<form action="colortheme/color-theme-save.php" method="GET">
	    
		<!-- main-color -->
		<div class="row">
		    <div class="col-md-2">
			    <h4 data-toggle="tooltip" data-placement="top" title="This colors the main body behind all the elements">Main Color</h4>
			</div>
			<div class="col-md-4">
			    <input id="main" type="text" class="form-control" name="main" value="<?php echo $_GET['main'];?>" required>
			</div>	
			<div class="col-md-2 text-sample" style="background-color:<?php echo $main_color;?>">
			</div>
		</div>
		
		<!-- primary_color -->
		<div class="row">
		    <div class="col-md-2">
			    <h4>Primary Color</h4>
			</div>
			<div class="col-md-4">
			    <input id="primary" type="text" class="form-control" name="primary" value="<?php echo $_GET['primary'];?>" required>
			</div>	
			<div class="col-md-2 text-sample" style="background-color:<?php echo $primary_color;?>">
			</div>
		</div>
		
		<!-- secondary-color -->
		<div class="row">
		    <div class="col-md-2">
			    <h4>Secondary Color</h4>
			</div>
			<div class="col-md-4">
			    <input id="secondary" type="text" class="form-control" name="secondary" value="<?php echo $_GET['secondary'];?>" required>
			</div>	
			<div class="col-md-2 text-sample" style="background-color:<?php echo $secondary_color;?>">
			</div>
		</div>
		
		<!-- tertiary-color -->
		<div class="row">
		    <div class="col-md-2">
			    <h4>Tertiary Color</h4>
			</div>
			<div class="col-md-4">
			    <input id="tertiary" type="text" class="form-control" name="tertiary" value="<?php echo $_GET['tertiary'];?>" required>
			</div>	
			<div class="col-md-2 text-sample" style="background-color:<?php echo $tertiary_color;?>">
			</div>
		</div>
		<!-- pop-color -->
        <div class="row">
		    <div class="col-md-2">
			    <h4 data-toggle="tooltip" data-placement="bottom" title="Not currently used on the site, need to figure out how to include it">Pop Color</h4>
			</div>
			<div class="col-md-4">
			    <input id="pop" type="text" class="form-control" name="pop" value="<?php echo $_GET['pop'];?>" >
			</div>	
			<div class="col-md-2 text-sample" style="background-color:<?php echo $pop_color;?>">
			</div>
		</div>
		
		<!-- submit button -->
		<div class="row">
		    <input type="hidden" name="type" value="color-theme"/>
		    <input type="submit" name="color-update" class="btn btn-primary" value="Submit"/>
		</div>
		
	</form>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 

	
});
</script>




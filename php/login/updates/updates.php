<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3>Select updates section interval<h3>
		</div>
	</div>
	<form action="admin-panel.php">
		<div class="row">
			<div class="col-md-2">
				<div class="form-group">                  
					<input class="form-control" name="number" type="number" min="1"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<input class="btn btn-primary" type="submit" name="update_select" value="Submit"/>
				<input type="hidden" name="type" value="updates"/>
			<div>
		</div>
	</form>
	</div>
</div>

<?php
	if(isset($_GET['update_select'])){
		$days = $_GET['number'];
		$updates_section_days_sql = "UPDATE config SET config_value = $days WHERE config_key = 'update_interval'";
		$updates_section_days_query = mysqli_query($dbconnect, $updates_section_days_sql);
?>
		<h3>Updates section will display all new articles or recipes in the last <?php echo $_GET['number'] ?> days</h3>
<?php
	}
?>
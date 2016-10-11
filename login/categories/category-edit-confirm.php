<?php
	$edit_sql = "SELECT * FROM category WHERE categoryID=".$_GET['categoryID'];
	$edit_query = mysqli_query($dbconnect, $edit_sql);
	$edit_rs = mysqli_fetch_assoc($edit_query);			
		
	if(!empty($edit_rs)){
		echo "EDIT MODE";
?>
		<div class="row">
			<div class="col-md-3">
				<h2>Current Category Name:</h2>
			</div>
			<div class="col-md-3">
				<h2>Enter New Category Name:</h2>
			</div>
		</div>
		<div class="row">
			<form action="admin-panel.php">
				<div class="col-md-3">
					<h4><?php echo $edit_rs['name']?></h4>
				</div>
				<div class="col-md-3">	
					<input class="form-control" type="text" name="new-name">
				</div>
				<div class="col-md-1">
					<input class="btn btn-success" type="submit" name="save" value="Save" />		
				</div>
				<input type="hidden" name="submit" value="true"/>
				<input type="hidden" name="type" value="categories"/>
				<input type="hidden" name="categoryID" value='<?php echo $_GET['categoryID']?>'/>
			</form>
			<a href="admin-panel.php?type=categories">
				<button class="btn btn-primary">Cancel</button>
			</a>
		</div>				
<?php
	}
?>
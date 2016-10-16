<br>
<hr>
<div class="row">
<?php

	if(isset($_GET['add_new']) && $_GET['add_new'] === "confirm"){
		
		$parentID = $_GET['parent_selectID'];

		$subcat_parent_sql = "SELECT * FROM category WHERE categoryID = $parentID";
		$subcat_parent_query = mysqli_query($dbconnect, $subcat_parent_sql);
		$subcat_parent_rs = mysqli_fetch_assoc($subcat_parent_query);
	
?>
		<div class="col-md-12">
			<h4>Connect new subcategory? 
			    <strong><?php echo $_GET['add_subcat']?></strong>
				to 
				<strong><?php echo $subcat_parent_rs['name']?></strong>
			</h4>
		</div>
<div class="row">
		<form action="admin-panel.php" action="GET">
			<div class="col-md-1">
				<input type="submit" class="btn btn-success" value="Submit">
				<input type="hidden" name="linkcatID" value=<?php echo $parentID?>>
				<input type="hidden" name="new_cat_name" value="<?php echo $_GET['add_subcat']?>">
				<input type="hidden" name="new_cat_type" value=<?php echo $subcat_parent_rs['type']?>>
				<input type="hidden" name="type" value="subcategories">
				<input type="hidden" name="add_new" value="submit">
			</div>
		</form>
		<div class="col-md-1">
			<a href="admin-panel.php?type=subcategories">
				<button class="btn btn-danger">Cancel</button>
			</a>
		</div>
</div
<?php
	}
?>
</div>

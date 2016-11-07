<div class="row">
<?php
	if(isset($_GET['confirm_add_existing'])){
?>
		<div class="col-md-12">
			<h4>Connect these two categories together?</h4>
		</div>
</div>
<div class="row">
	<form action="admin-panel.php" action="GET">
		<div class="col-md-1">
			<input type="submit" class="btn btn-success" value="Submit">
			<input type="hidden" name="parentID" value="<?php echo $_GET['parent_selectID']?>">
			<input type="hidden" name="childID" value="<?php echo $_GET['child_selectID']?>">
			<input type="hidden" name="type" value="subcategories">
			<input type="hidden" name="submit_update_existing" value="submit">
		</div>
	</form>
	<div class="col-md-1">
		<a href="admin-panel.php?type=subcategories">
			<button class="btn btn-danger">Cancel</button>
		</a>
	</div>
</div>
<?php
	}
?>
<?php
	$nav_cat_sql = "SELECT * FROM nav_categories";
	$nav_cat_query = mysqli_query($dbconnect, $nav_cat_sql);
	$nav_cat_rs = mysqli_fetch_assoc($nav_cat_query);
?>


<div class="row">
	<div class="col-md-8">
		<h2>Add new category</h2>
	</div>
</div>
<div class="row">
	<form action="admin-panel.php" method="get">
		<div class="col-md-4">
			<select id="select-box" name="nav_cat_key" class="form-control">
<?php
				if(!empty($nav_cat_rs)){
					do{
?>
						<option value=<?php echo $nav_cat_rs['cat_key'] ?>><?php echo $nav_cat_rs['name'] ?></option>
<?php
					} while($nav_cat_rs=mysqli_fetch_assoc($nav_cat_query));
				}
?>
			</select>
		</div>
		<div class="col-md-4">
			<input type="text" class="form-control" name="name"/>
		</div>
		<div class="col-md-1">
			<input type="submit" class="btn btn-success" value="Save"/>
			<input type="hidden" name="add_new" value="confirmed"/>
			<input type="hidden" name="type" value="categories"/>
		</div>
	</form>
</div>
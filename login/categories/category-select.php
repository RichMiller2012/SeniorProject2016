<?php
	$sql = "SELECT * FROM category ORDER BY name";
	$query = mysqli_query($dbconnect, $sql);
	$rs = mysqli_fetch_assoc($query);
?>
	<div class="row">
		<div class="col-md-8">
			<h1>Edit Categories Here</h1>
		</div>
	</div>
	<div class="row">
		<form action="admin-panel.php">
			<div class="col-md-4">
				<div class="form-group">
					<select id="select-box" name="categoryID" class="form-control">
<?php
					if(!empty($rs)){
						do{
?>
								<option value=<?php echo $rs['categoryID']?>><?php echo $rs['name'] ?></option>
<?php
						} while($rs=mysqli_fetch_assoc($query));
					}
?>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<input class="btn btn-warning" type="submit" name="edit" value="Edit" />
				<input class="btn btn-danger" type="submit" name="delete" value="Delete" />
				<input class="btn btn-primary" type="submit" name="add_new" value="Add New"/>
				<input type="hidden" name="type" value="categories"/>
			</div>
		</form>
	</div>
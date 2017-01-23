<?php
	$sql = "SELECT * FROM category ORDER BY name";
	$query = mysqli_query($dbconnect, $sql);
	$rs = mysqli_fetch_assoc($query);
?>
<div class="row">
<form action="admin-panel.php" method="get">
<div class="col-md-4">
	<select id="parent_select" name="parent_selectID" class="form-control">
<?php
		if(!empty($rs)){
			do{
?>
				<option value=<?php echo $rs['categoryID']?>
				    <?php if(isset($_GET['parent_selectID']) && $rs['categoryID'] == $_GET['parent_selectID']){
						echo "selected='selected'";}?>><?php echo $rs['name'] ?>
				</option>
<?php
			}while($rs=mysqli_fetch_assoc($query));
		}		
?>
	</select>
</div>


<div class="col-md-4">

<?php
	if(isset($_GET['add_new'])){		
?>
		<input type="text" name="add_subcat" class="form-control" placeholder="Enter New Subcategory"/>
		<input type="hidden" name="confirm_add_new" value="true"/>
<?php
	} else {
		mysqli_data_seek($query,0); //reset result set pointer
		$rs = mysqli_fetch_assoc($query);
?>
		<input type="hidden" name="confirm_add_existing" value="true"/>
		<select id="child-select" name="child_selectID" class="form-control">
<?php
			if(!empty($rs)){
				do{
?>
					<option value=<?php echo $rs['categoryID']?>
						<?php if(isset($_GET['child_selectID']) && $rs['categoryID'] == $_GET['child_selectID']){
							echo "selected='selected'";}?>><?php echo $rs['name'] ?>
					</option>
<?php
				}while($rs=mysqli_fetch_assoc($query));
			}
	}
?>
		</select>
</div>
<div class="col-md-1">
	<input type="submit" class="btn btn-primary" value="Submit"/>
	<input type="hidden" name="type" value="subcategories"/>
</div>
</form>
<?php
	if(isset($_GET['add_new']) && $_GET['add_new'] == true){
?>
		<div class="col-md-1">
			<a href="admin-panel.php?type=subcategories">
				<button class="btn btn-warning">Select</button>
			</a>
		</div>
<?php
	} else {
?>
		<div class="col-md-1">
			<a href="admin-panel.php?type=subcategories&add_new=true">
				<button class="btn btn-warning">Add New</button>
			</a>
		</div>
<?php
	}
?>
<div class="col-md-1">
	<a href="admin-panel.php?type=subcategories"><button type="cancel" class="btn btn-danger">Cancel</button></a>
</div>
</div>
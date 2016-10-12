<?php
	$sql = "SELECT * FROM category ORDER BY name";
	$query = mysqli_query($dbconnect, $sql);
	$rs = mysqli_fetch_assoc($query);
?>
<form action="subcategories.php" method="get">
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
	if(isset($_GET['new_subcat'])){		
?>
		<input type="text" name="add_subcat" placeholder="enter new subcategory"/>
<?php
	} else {
		mysqli_data_seek($query,0); //reset result set pointer
		$rs = mysqli_fetch_assoc($query);
?>
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
?>
		</select>
</div>
<div class="col-md-1">
	<input type="submit" class="btn btn-primary" value="Submit"/>
</div>
<div class="col-md-1">
	<input type="submit" class="btn btn-warning" value="Add New" />
</div>
<?php
	}
?>	
<div class="col-md-1">
	<button type="cancel" class="btn btn-danger">Cancel</button>
</div>
</form>

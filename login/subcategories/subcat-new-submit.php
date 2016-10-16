<br>
<hr>
<div class="row">
<?php
	if(isset($_GET['add_new']) && $_GET['add_new'] === "submit"){
		
		$linkcatID = $_GET['linkcatID'];
		$name = $_GET['new_cat_name'];
		$type = $_GET['new_cat_type'];
		
		$insert_subcat_sql = "INSERT INTO category (categoryID, name, description, linkcatID, type) VALUES ('', '$name', '', $linkcatID, '$type')";
		$insert_subcat_query = mysqli_query($dbconnect, $insert_subcat_sql);
		
		echo "<h4>New Subcategory Added! <strong>$name</strong> can be found under <strong>$type</strong></h4> somewhere....";
	}
?>
</div>
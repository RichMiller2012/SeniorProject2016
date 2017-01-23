<?php
if(isset($_GET['submit_update_existing'])){
	
	$parentID = $_GET['parentID'];
	$childID = $_GET['childID'];
	
	if($parentID == $childID){
		echo "<h4>You cannot add a category to itself!</h4>";
	} else {	
		$update_subcat_sql = "UPDATE category SET linkcatID = $parentID WHERE categoryID = $childID";
		$update_subcat_query = mysqli_query($dbconnect, $update_subcat_sql);
	
?>
	<div class="row">
		<div class="col-md-6">
			<h4>The two categories have been linked together</h4>
		</div>
	</div>
	
<?php
	}
}
?>
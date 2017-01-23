<?php
	//delete confirmation

	echo "<h3>Are you sure you want to delete this category?</h3>"
?>
	<a href="admin-panel.php?type=categories&verify=true&delete=true&categoryID=<?php echo $_GET['categoryID']?>">
		<button class="btn btn-danger">YES</button>
	</a>
	<a href="admin-panel.php?type=categories">
		<button class="btn btn-warning">NO</button>
	</a>

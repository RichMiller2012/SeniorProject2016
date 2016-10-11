<div class="container">
<?php
	//category control page

	//category selection
	include("category-select.php"); 


	//confirm category edit
	if(isset($_GET['edit'])){
		include("category-edit-confirm.php");
	} 

	//submit category changes
	if(isset($_GET['submit'])){
		include("category-edit-submit.php");
	} 

	//confirm delete a category
	if(isset($_GET['delete']) && $_GET['delete'] != "true"){
		include("category-delete-confirm.php");
	} 

	//submit category delete
	if(isset($_GET['delete']) && $_GET['delete'] == "true"){
		include("category-delete-submit.php");
	} 

	//confirm add new category
	if(isset($_GET['add_new']) && $_GET['add_new'] != "confirmed"){
		include("category-add-new-confirm.php");
	}
	
	//submit add new category
	if(isset($_GET['add_new']) && $_GET['add_new'] == "confirmed"){
		include("category-add-new-submit.php");
	}
	
	
?>
</div>
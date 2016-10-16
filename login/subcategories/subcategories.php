<div class="container">

<?php
	/*subcategory control page. 
	  This page will allow the user to attach 
	  one category to another, or create a new
	  sub-category to be attached to a pre-existing
	  category

      Note: CRUD will not be performed here since
      it is essentially already done on the category
      control page. 	  
	*/
?>

	<div class="row">
<?php
	//subcategory selection
	include("subcat-select.php");

	
	//attach existing category confirm
	include("subcat-existing-confirm.php");

	//attach existing category submit
	include("subcat-existing-submit.php");

	
	//attach new category confirm
	include("subcat-new-confirm.php");
	

	//attach new category submit
	include("subcat-new-submit.php");

	
?>
	</div>
	<div class="row">
<?php
	//all attached categories beneath a selected category
	//include("subcat-attached.php");
?>
	</div>
</div>
<h1>Edit Articles Here</h1>

<?php
	/* Article control page. Add, update, or Delete articles and recipes */
	
	include("article-choose.php");
	
	//article selection
	include("article-select.php");
	
	//add new article
	include("article-add-new.php");
	
	//edit existing artile
	include("article-edit.php");
	
	//delete an article
	include("article-delete.php");
	
	//save the article
	include("article-save.php");
?>
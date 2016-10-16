<?php

	if(isset($_GET['article_edit_save'])){
		$articleID = $_GET['articleID'];
		$categoryID = $_GET['categoryID'];
		$article_title = $_GET['title'];
		$article_desc = $_GET['description'];
		$article_text = $_GET['text'];
		
		$article_edit_sql = "UPDATE textblock SET
								title = '$article_title',
								description = '$article_desc',
								text = '$article_text',
								categoryID = $categoryID
								WHERE textblockID = $articleID";
								
		$article_edit_query = mysqli_query($dbconnect, $article_edit_sql);
	
		echo "<h4>Article updated!</h4>";
	}
	
	if(isset($_GET['article_add_new_save'])){
		$categoryID = $_GET['categoryID'];
		$article_title = $_GET['title'];
		$article_desc = $_GET['description'];
		$article_text = $_GET['text'];
		
		$article_add_new_sql = "INSERT INTO textblock	
									(textblockID, title, description, text, categoryID)
									VALUES
									(NULL,
									'$article_title',
									'$article_desc',
									'$article_text',
									$categoryID)";
									
		$article_add_new_query = mysqli_query($dbconnect, $article_add_new_sql);
		
		echo "<h4>New Article Added!</h4>";
	}

?>
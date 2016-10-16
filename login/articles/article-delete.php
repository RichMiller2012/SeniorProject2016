<?php
	if(isset($_GET['article_delete'])){
		$articleID = $_GET['articleID'];
		
		$article_delete_sql = "DELETE FROM textblock WHERE textblockID = $articleID";
		$article_delete_query = mysqli_query($dbconnect, $article_delete_sql);
		
		echo "<h4>Article Deleted....</h4>";
	}
?>
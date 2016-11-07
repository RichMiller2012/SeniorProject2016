<?php
	if(isset($_GET['edit_article'])){
		$article_sql = "SELECT * FROM textblock";
		$article_query = mysqli_query($dbconnect, $article_sql);
		$article_rs = mysqli_fetch_assoc($article_query);
?>

	<div class="row">
		<div class="col-md-6">
			<ul>
<?php
			if(!empty($article_rs)){
					do{
?>
					<a href="admin-panel.php?type=articles&edit_article_form=true&articleID=<?php echo $article_rs['textblockID']?>">
						<li><?php echo $article_rs['title'] ?></li>
					</a>
<?php				
				}while($article_rs=mysqli_fetch_assoc($article_query));
			}
?>
			</ul>
		</div>
	</div>
<?php
}
?>
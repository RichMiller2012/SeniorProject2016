<?php
	if(isset($_GET['new_article'])){
		
		$add_article_cat_sql = "SELECT * FROM category";
		$add_article_cat_query = mysqli_query($dbconnect, $add_article_cat_sql);
		$add_article_cat_rs = mysqli_fetch_assoc($add_article_cat_query);
?>
		<form action="admin-panel.php" method="GET">
			<div class="row">
			<div class="col-md-4">
				<select id="select-box" name="categoryID" class="form-control">
<?php
			if(!empty($add_article_cat_rs)){
				do{
?>
					<option value=<?php echo $add_article_cat_rs['categoryID']?>>
						<?php echo $add_article_cat_rs['name']?>
					</option>
<?php					
				}while($add_article_cat_rs=mysqli_fetch_assoc($add_article_cat_query));
			}
?>
				</select>
			</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<h4>Title</h4>
					<input type="text" class="form-control" name="title" placeholder="Enter title"/>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<h4>Description</h4>
					<input type="text" class="form-control" name="description" placeholder="Enter a Description"/>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-9">
					<h4>Article/Recipe Text</h4>
						<textarea rows="10" cols="100" name="text" value='textblock' placeholder="Enter the article or recipe"></textarea>
					</div>
			</div>
			
			<div class="row">
				<div class="col-md-1">
					<input type="submit" class="btn btn-primary" value="Submit" />
					<input type="hidden" name="type" value="articles"/>
					<input type="hidden" name="article_add_new_save" value="true"/>
				</div>
				<div class="col-md-1">
					<a href="admin-panel.php?type=articles">
						<button type="button" class="btn btn-danger">Cancel</button>
					</a>
				</div>
			</div>
		<form>
<?php		
	}
?>
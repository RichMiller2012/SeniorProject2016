<?php

	if(isset($_GET['edit_article_form'])){
		
		$textblockID = $_GET['articleID'];
	
		$edit_article_sql = "SELECT * FROM textblock WHERE textblockID = $textblockID";
		$edit_article_query = mysqli_query($dbconnect, $edit_article_sql);
		$edit_article_rs = mysqli_fetch_assoc($edit_article_query);
		
		$edit_article_cat_sql = "SELECT * FROM category";
		$edit_article_cat_query = mysqli_query($dbconnect, $edit_article_cat_sql);
		$edit_article_cat_rs = mysqli_fetch_assoc($edit_article_cat_query);
		
		
		if(!empty($edit_article_rs)){
?>

		<form action="admin-panel.php" method="GET">
			<div class="row">
			<div class="col-md-4">
				<h4>Select a category for his article</h4>
				<select id="select-box" name="categoryID" class="form-control">
<?php
				if(!empty($edit_article_cat_rs)){
					do {
?>
						<option value=<?php echo $edit_article_cat_rs['categoryID']?>
							<?php if($edit_article_cat_rs['categoryID'] == $edit_article_rs['categoryID']){
								echo "selected='selected'";
							}?>><?php echo $edit_article_cat_rs['name'] ?>
						</option>
<?php					
					}while($edit_article_cat_rs=mysqli_fetch_assoc($edit_article_cat_query));
				}
?>
				</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<h4>Title</h4>
					<input type="text" class="form-control" name="title" value='<?php echo $edit_article_rs['title'] ?>'/>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<h4>Description</h4>
					<input type="text" class="form-control" name="description" value='<?php echo $edit_article_rs['description'] ?>'/>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-9">
					<h4>Article/Recipe Text</h4>
						<textarea rows="10" cols="100" name="text" value='textblock'><?php echo $edit_article_rs['text']?></textarea>
					</div>
			</div>
			
			<div class="row">
				<div class="col-md-1">
					<input type="submit" class="btn btn-primary" value="Submit" />
					<input type="hidden" name="article_edit_save" value="true"/>
					<input type="hidden" name="type" value="articles"/>
					<input type="hidden" name="articleID" value=<?php echo $edit_article_rs['textblockID']?> />
				</div>
				<div class="col-md-1">
					<a href="admin-panel.php?type=articles">
						<button type="button" class="btn btn-warning">Cancel</button>
					</a>
				</div>
				<div class="col-md-1">
					<a href="admin-panel.php?type=articles&article_delete=true&articleID=<?php echo $edit_article_rs['textblockID'] ?>">
						<button type="button" class="btn btn-danger">Delete</button>
					</a>
				</div>
			</div>
		</form>
<?php
		}
	}
?>
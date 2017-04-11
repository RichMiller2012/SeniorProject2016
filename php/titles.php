<div class="row title-list">
	<div class="col-md-8">
		<ul>

<?php
	$catID = $_GET['categoryID'];
	
	$sql = "SELECT * FROM textblock WHERE categoryID = $catID";
	$query = mysqli_query($dbconnect, $sql);
	$rs = mysqli_fetch_assoc($query);
	
	if(!empty($rs)){
		do {
?>				
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-8">
						<div class="title-box">
						<a href="index.php?state=text&textblockID=<?php echo $rs['textblockID']?>">
							<h1><?php echo $rs['title']?></h1>
						</a>
							<p><?php echo $rs['added_date']?></p>
							<p><?php echo $rs['description']?></p>
						</div>	
					</div>
					<div class="col-md-4">
						<img class="title-clip-art" 
						src=<?php echo getRandomFile(); ?> 
						alt="clip-art picutre" />	
					</div>
				</div>
			</li>
				
<?php
		} while($rs=mysqli_fetch_assoc($query));
	}	
?>
	
		</ul>
	</div>
	<div class="col-md-2">
	</div>
</div>
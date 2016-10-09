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
?>			<a href="index.php?state=text&textblockID=<?php echo $rs['textblockID']?>">
				<li class="list-group-item"><h1><?php echo $rs['title']?></h1></li>
			</a>	
<?php
		} while($rs=mysqli_fetch_assoc($query));
	}	
?>
	
		</ul>
	</div>
</div>
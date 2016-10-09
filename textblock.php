<?php
	$textblockID = $_GET['textblockID'];
	
	$sql = "SELECT * FROM textblock WHERE textblockID=$textblockID";
	$query = mysqli_query($dbconnect, $sql);
	$rs = mysqli_fetch_assoc($query);
	
	if(!empty($rs)){
		do{
			?>
			<h1><?php echo $rs['title'] ?></h1>
			<h2><?php echo $rs['description']?></h4>
			<h1><?php echo $rs['text']?></h1>
			<?php
			
		} while($rs=mysqli_fetch_assoc($query));
	}
?>
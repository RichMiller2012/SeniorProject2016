<div class="row article">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">

<?php
	$textblockID = $_GET['textblockID'];
	
	$sql = "SELECT * FROM textblock WHERE textblockID=$textblockID";
	$query = mysqli_query($dbconnect, $sql);
	$rs = mysqli_fetch_assoc($query);
	
	$current_rating_sql = "SELECT AVG(rate) as average FROM rating where textblockId=$textblockID";
	$current_rating_query = mysqli_query($dbconnect, $current_rating_sql);
	$current_rating_rs = mysqli_fetch_assoc($current_rating_query);
	
	$average_rating = '';
	
	if(!empty($current_rating_rs)){
		$average_rating = 'Current Rating: '.$current_rating_rs['average'];
	} else {
		$average_rating = 'This article has not yet been rated. Be the first!';
	}
?>
	<div class="article-section">
<?php
	if(!empty($rs)){
		
		do{
			?>
			<p><?php echo $rs['added_date'] ?></p>
			<h1><?php echo $rs['title'] ?></h1>
			<h2><?php echo $rs['description']?></h4>
			<hr />
			<h1><?php echo nl2br($rs['text'])?></h1>
			<?php			
		} while($rs=mysqli_fetch_assoc($query));
	}
?>	
		<hr />
		<h6>Rate this article!</h6>
	    <div class="article-section-footer">
		    <?php include "php/Rating/rating.php"?>
		</div>
		<br >
		<h6 id="avg-rate-txt"><?php echo $average_rating ?></h6>
	</div>
</div>
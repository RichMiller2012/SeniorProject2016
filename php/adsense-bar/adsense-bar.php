<?php

	$promotion_sql = "SELECT promotion_message, description, textblockID FROM textblock WHERE promotion_message IS NOT NULL";
	$promotion_query = mysqli_query($dbconnect, $promotion_sql);
	$promotion_rs = mysqli_fetch_assoc($promotion_query);
	
	$promotion_message_array = array();
	
	function getRandomPromotion(){
		global $promotion_message_array;
		global $promotion_rs;
		global $promotion_query;
		
		do{
			array_push($promotion_message_array, $promotion_rs);
		} while ($promotion_rs = mysqli_fetch_assoc($promotion_query));
		
		$key =  array_rand($promotion_message_array);
		return $promotion_message_array[$key];	
	}
?>

<div class="adsense-bar article-section">
  <div class="row col-10px-pad">
    <div class="col-md-12">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- 300x250, created 9/27/09 -->
			<ins class="adsbygoogle"
			style="display:inline-block;width:150px;height:250px"
			data-ad-client="ca-pub-3451655759747387"
			data-ad-slot="5077415599"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
	
	<div class="row col-10px-pad">
	  <div class="col-md-12 promo-height">
	    <?php $promotion1 = getRandomPromotion();?>
		<a href="http://localhost/index.php?state=text&textblockID=<?php echo $promotion1['textblockID']?>">
			<h4><?php echo $promotion1['promotion_message'];?></h4>
			<h5><?php echo $promotion1['description']; ?></h5>
		</a>
	  </div>
	</div>
	
	<div class="row col-10px-pad">
	  <div class="col-md-12"
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- 300x250, created 9/27/09 -->
			<ins class="adsbygoogle"
			style="display:inline-block;width:150px;height:250px"
			data-ad-client="ca-pub-3451655759747387"
			data-ad-slot="5077415599"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
      </div>
    </div>
	
	<div class="row col-10px-pad">
	  <div class="col-md-12 promo-height">
	    <?php $promotion2 = getRandomPromotion();?>
		<a href="http://localhost/index.php?state=text&textblockID=<?php echo $promotion2['textblockID']?>">
			<h4><?php echo $promotion2['promotion_message'];?></h4>
			<h5><?php echo $promotion2['description'];?></h4>
		</a>
	  </div>
	</div>

</div	
<?php
    ob_end_clean(); 
	include("php/dbconnect.php");
	include("php/loadconfig.php");
?>

<html>
<head>
  <title>Index Page</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  
 
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.php">
  <link rel="stylesheet" type="text/css" href="css/autosuggest-style.css">
  <link rel="stylesheet" type="text/css" href="css/rating.css">
  <link rel="stylesheet" type="text/css" href="css/shopping-cart.css">
</head>
<body>

<div id=main-wrapper>

  <div class=header-wrapper>
    <div class="header">
	  <div class="container">
		<div class="col-md-4">
			<img id="header-logo" src="img/header-logo.png" alt="header-logo.png"/>
		</div>
		<div class="col-md-3">
			<div id="media-links">
				<ul>
					<li><a class="btn btn-social-icon btn-twitter">
					<span class="fa fa-twitter"></span>
					</a></li>
		   
				   <li><a class="btn btn-social-icon btn-instagram">
					 <span class="fa fa-instagram"></span>
				   </a></li>
				   
				   <li><a class="btn btn-social-icon btn-facebook">
					 <span class="fa fa-facebook"></span>
				   </a></li>
				   
				   <li><a class="btn btn-social-icon btn-google">
					 <span class="fa fa-google"></span>
				   </a></li>  
				</ul>
			</div>
		</div>
		<div class="col-md-5">
		    <?php include("php/autosuggest/autosuggest.php") ?>
		</div>
	  </div>
    </div>
	</div>
    <div id="nav-wrapper">
	      <ul id="navbar-list">
		    <li><a href="index.php?">Home</a></li>
			<li><a href="index.php?state=category&type=recipe&categoryID=0">Recipes</a></li>
			<li><a href="index.php?state=category&type=homemaking&categoryID=0">Homemaking</a></li>
			<li><a href="index.php?state=category&type=crafts&categoryID=0">Crafts & Sewing</a></li>
			<li><a href="index.php?state=category&type=garden&categoryID=0">Homestead & Garden</a></li>
			<li><a href="index.php?state=category&type=family&categoryID=0">Family</a></li>
			<li><a href="index.php?state=ebook">Ebooks</a></li>
			<li><a href="">My Blog!</a></li>
		  </ul>	  
	 </div>
  </div>

  <div class="container-fluid">
<?php
	if(isset($_GET['state'])){
		include("php/main-content.php");
	} else {
?>		
  
	<div class="row">
	  <div class="col-md-1">
	  </div>
	  <div class="col-md-6">
	  
		<div class="carousel-container">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
<?php
			  $carousel_image_sql = "SELECT * FROM carousel";
			  $carousel_image_query = mysqli_query($dbconnect, $carousel_image_sql);
			  $carousel_image_rs = mysqli_fetch_assoc($carousel_image_query);
					
			  $first_key = key($carousel_image_rs);
			  $carousel_image_index = 0;
		   		   
				  if(!empty($carousel_image_rs)){
?>
			        <ol class="carousel-indicators">
<?php	
					do {
					  if(key($carousel_image_rs) == $first_key){
?>
						<li data-target="#myCarousel" data-slide-to="<?php echo $carousel_image_index; ?>" class="active"></li>
<?php
					  } else {
?>
						<li data-target="#myCarousel" data-slide-to="<?php echo $carousel_image_index; ?>"></li>
<?php
					  }
					  $carousel_image_index++;
					} while ($carousel_image_rs = mysqli_fetch_assoc($carousel_image_query));
?>
					</ol>
<?php			
				  }	
				  //I have to run the query again...which is dumb
				  $carousel_image_sql2 = "SELECT * FROM carousel";
			      $carousel_image_query2 = mysqli_query($dbconnect, $carousel_image_sql2);
			      $carousel_image_rs2 = mysqli_fetch_assoc($carousel_image_query2);
				  $first_key2 = key($carousel_image_rs2);				  
?>
					

<?php

				  if(!empty($carousel_image_rs2)){
?>
					  <div id="myCarousel" class="carousel slide" data-ride="carousel">
<?php
					do{
						if(key($carousel_image_rs2) === $first_key){
							?> <div class='item active'> <?php 
						} else {
							?> <div class='item'> <?php
						}
?>
						<img src="img/carousel/<?php echo $carousel_image_rs2['file']?>" height="400px"?>
						<div class="carousel-caption">
							<h3><?php echo $carousel_image_rs2['title'];?></h3>
							<p><?php echo $carousel_image_rs2['description'];?></p>
						</div>
<?php											
						?></div><?php
					} while ($carousel_image_rs2 = mysqli_fetch_assoc($carousel_image_query2));
?>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					</div>
				</div>
			</div>
		</div>
<?php
				  }
?>




	 
		
		
		
      <div class="col-md-1">
	  </div>
	  <div class="col-md-3">
		<div class="updates-info">
		  <div class="updates-inner">
		  <h5>Website Updates Section</h5>
		  <br>
<?php	  
			include('php/updates_section/updates_list.php');
?>
		  </div>
		</div>
	  </div>
	</div>
	<div class="row main-content">
	  <div class="col-md-9">
		<div class="site-info">
		  <h5>Welcome to The Family Homestead!</h5>
		  <p>
			My name is Crystal and I am mom to 8 grown children and 12 grandchildren.  My husband and I live in the Pacific Northwest on our little homestead.  
		  </p>
		  <p>
			I started this website back in 2005.  We had a house full of children and many farm animals.  I homeschooled my children through grade school and high school.  We gardened, canned food, sewed, milked goats, raised chickens, raised pigs, and had a couple horses.
		  </p>
		  <p>
			I shared many things over the years from my life.  We have always lived on one income and I can say, it can be done.  It is a lifestyle choice.  You learn to reduce the budget, cook healthy economical meals, and you learn to be frugal in many ways.
		  </p>
		  <p>
			Today my husband and I almost have an empty nest.  Our youngest son lives at home but works full time and has a life of his own.  I still enjoy gardening, sewing, homemaking tasks, and have a few farm animals.   You can find me regularly on my blog (link at the top of the page) sharing about my day to day life as a homemaker. 				  
		  </p>
		  <p>
			Today my husband and I almost have an empty nest.  Our youngest son lives at home but works full time and has a life of his own.  I still enjoy gardening, sewing, homemaking tasks, and have a few farm animals.   You can find me regularly on my blog (link at the top of the page) sharing about my day to day life as a homemaker. 				  
		  </p>
		  <p>
			My website has gotten an overhaul and been updated as what I had previously was very out of date.  My web developer son graciously has given much time to helping me make this change. 
		  </p>
		  <p>
			I have kept many of my recipes and homemaking tips from over the years to help and encourage those who would like to learn the art of homemaking. 
		  </p>
		  <p>
			I am a born again believer in Jesus Christ and this website along with my blog have been a ministry to me for many years now.  My greatest hearts desire is to encourage women to love their husbands, to love their children and to love their home and realize what an amazing blessing it is to be a homemaker.  It does not matter if you are a full time homemaker or you work outside the home.  Homemaking is from the heart, a heart that desires to do the best they can for their family.
		  </p>
		  
		  

		</div>
	  </div>
	  

	  
	  
	</div>

<?php
	}
?>
  </div>

  <div id="footer">
	<div id="copywright">
	Copywright 2012
	</div>
	<div id="webmaster">
		<a href="php/login/index.php">Webmaster</a>
	</div>
  </div>


</div>

<!-- scripts -->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>



</body>
</html>

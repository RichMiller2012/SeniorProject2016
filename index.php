<?php
	include("php/dbconnect.php");
?>

<html>
<head>
  <title>Index Page</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  
 
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/autosuggest-style.css">
  <link rel="stylesheet" type="text/css" href="css/rating.css">
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
			<li><a href="http://crystalscountrystore.com/ebooks.htm">Ebooks</a></li>
			<li><a href="">My Blog!</a></li>
			<li><a href="php/login/index.php">Webmaster</a></li>
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
	  <div class="col-md-12 no-pad">
		<div class="carousel-container">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<img src="img/flower.jpg" alt="flower" height="400px">
			  </div>

			  <div class="item">
				<img src="img/flower.jpg" alt="flower" height="400px">
			  </div>

			  <div class="item">
				<img src="img/garden.jpg" alt="garden" height="400px">
			  </div>

			  <div class="item">
				<img src="img/table.jpg" alt="table">
			  </div>
			</div>

			<!-- Left and right controls -->
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
	<div class="row main-content">
	  <div class="col-md-8">
		<div class="site-info">
		  <h5>Site Info Section</h5>
		  <p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi orci lorem, rhoncus ac malesuada non, commodo sit amet purus. Praesent iaculis, ante in pharetra condimentum, neque nulla viverra ligula, in gravida sapien dolor porta diam. Aenean non nunc placerat, rhoncus dui et, faucibus turpis. Suspendisse a velit in purus ullamcorper dapibus. Vivamus tristique porttitor fringilla. Mauris non pharetra lacus. Phasellus aliquet, turpis ac viverra blandit, ligula sapien tristique tortor, quis dignissim est elit et turpis. Maecenas eget congue dui. Cras molestie, justo vel fringilla tincidunt, nibh nisi pretium tortor, vitae efficitur enim odio at odio. Donec non odio fringilla, sollicitudin metus non, pellentesque libero. Maecenas vitae semper ligula, dapibus mattis sem. Morbi et arcu vel leo malesuada mattis eu eget neque. Maecenas mattis mi id elementum consectetur. Nam nec mollis turpis, id consectetur massa. Sed sit amet nisl fermentum, dictum nunc ac, lobortis lacus.
		  </p>
		  <br>
		  <p>
			Donec finibus urna at vehicula fringilla. Morbi sit amet laoreet velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam at dui quis ligula efficitur cursus. Pellentesque posuere nibh vitae mi maximus suscipit. Curabitur convallis varius libero et facilisis. Vestibulum semper molestie lectus, nec maximus magna. Pellentesque molestie laoreet turpis, in rutrum lectus finibus eu. Praesent sit amet erat non lorem lobortis luctus. Morbi vel pretium ante. Aliquam erat volutpat. Sed mollis ante ac nunc aliquam maximus vitae non velit. Sed ornare est neque, eget dapibus risus faucibus in. Etiam risus ex, consequat non vehicula sit amet, venenatis vitae dolor. Phasellus lectus dui, placerat eu condimentum ut, consectetur dignissim lacus. Sed sagittis nibh metus, vel tristique ipsum sollicitudin non.</p>
		  </p>
		</div>
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
		</div 
	  </div>
	</div>

<?php
	}
?>
  </div>

  <div id="footer">
	Copywright 2012
  </div>


</div>

<!-- scripts -->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>



</body>
</html>

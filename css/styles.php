
<?php
    header("Content-type: text/css; charset: UTF-8");
	include("../php/dbconnect.php");
	
	//get the colors from the database
	$color_theme_config_sql = "SELECT * FROM config";
		
	$color_theme_config_query = mysqli_query($dbconnect, $color_theme_config_sql);
	$color_theme_config_rs = mysqli_fetch_assoc($color_theme_config_query);
	
	if(!empty($color_theme_config_rs)){
		do{
			$color_key = $color_theme_config_rs['config_key'];
			
			switch ($color_key){
				case "main_color":
					$main_color = $color_theme_config_rs['config_value'];
				case "primary_color":
					$primary_color = $color_theme_config_rs['config_value'];
				case "secondary_color":
				    $secondary_color = $color_theme_config_rs['config_value'];
				case "tertiary_color":
				    $tertiary_color = $color_theme_config_rs['config_value'];
				case "pop_color":
					$pop_color = $color_theme_config_rs['config_value'];		
			}
			
			/*
			if($color_key == 'main_color') $main_color = $color_theme_config_rs['config_value'];
			if($color_key == 'primary_color') $primary_color = $color_theme_config_rs['config_value'];
			if($color_key == 'secondary_color') $secondary_color = $color_theme_config_rs['config_value'];
			if($color_key == 'tertiary_color') $tertiary_color = $color_theme_config_rs['config_value'];
			if($color_key == 'pop_color') $pop_color = $color_theme_config_rs['config_value'];	
			*/
			
		} while($color_theme_config_rs=mysqli_fetch_assoc($color_theme_config_query));
	} else {
		/*
		$main_color = '#8EB9DE';
		$primary_color = '#1D7872';
		$secondary_color = '#71B095';
		$tertiary_color = '#DEDBA7';
		$pop_color = '#D13F32'; 
		*/
	}

?>

div {
  display: block;
}

body{
  margin: 0;
  background-color: <?php echo $main_color; ?>
  /*background-image: url("../img/backgrounds/main-background.png");*/
}

p{
  padding:15px;
}


.header-wrapper{
  position: relative;
  z-index: 1;
  width: 100%;
  padding-top: 20px;
}
.header{
  width: 100%;
  
}

#header-logo{
  width:100%;
  height: 75px;
  padding-left: 5%;
  float: left;
}

#header-title{
  float: left;
  padding-left: 100px;
}
#header-door{
  height: 50px;
  width: 50px;
  padding-left: 15%;
  float: left;
  z-index: 2;
}

/* Nav Bar CSS */
#nav-wrapper{
  clear: left;
  height: 80px;
  background-color: <?php echo $primary_color; ?>;
  /*background-image: url("../img/backgrounds/primary-background.png");*/
}
#navbar-list {
    position: relative;
    height: 100%;
    list-style-type: none;
    margin: 0;
    padding-left: 15%;
    overflow: hidden;
}

#navbar-list li {
    float: left;
}

#navbar-list li a {
    position: relative;
    height: 100%;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
#media-links ul {
	list-style-type: none;
	display:block;
	float:right;
	padding-right:20px;
}

#media-links ul li{
	display:inline;
}


#navbar-list li a:hover {
	background-color: <?php echo $secondary_color; ?>;
    /*background-image: url("../img/backgrounds/secondary-background.png");*/
}

/* main content */
#main-image {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0.3;
}

.carousel-container{
  margin-top:40px;
  opacity: 0.9;
  height:600px;
  background-color: <?php echo $pop_color; ?>;
  /*background-image: url("../img/backgrounds/primary-background.png");*/
}

.carousel-inner{
  text-align:-webkit-center;
}

.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
     height: 100%;
	  width:100%;
	  padding:1%;
}

.site-info{
  opacity: 0.5;
  float:left;
  margin:40px;
  width: 100%;
  background-color: <?php echo $secondary_color; ?>;
  /* background-image: url("../img/backgrounds/secondary-background.png");*/
}

.updates-info{
  opacity: 0.5;
  float:left;
  margin:40px;
  min-height:600px;
  max-height:600px;
  width: 100%;
  background-color: <?php echo $secondary_color; ?>;
  /*background-image: url("../img/backgrounds/secondary-background.png");*/
  overflow-y: auto;
}
.updates-inner{
	margin:10px;
}
.new-update-block{
	padding:5px;
}
.new-update-block:hover{
	opacity:0.5;
}
.updates-inner a{
	text-decoration: none;
	color: white;
}
.new-alert{
	color:yellow;
	text-shadow:20px,20px, 10px,red;
}


/* Fotter CSS */
#footer{
	opacity: 0.9;
	height:25px;
	background-color: <?php echo $primary_color; ?>;
	/*background-image: url("../img/backgrounds/primary-background.png");*/
	bottom:0;
	text-align:center;
	width:100%;
}

#copywright{
	display:inline;
	position:absolute;
}

#webmaster{
	display:inline;
	position:absolute;
	right:20px;
	color:white;
}

/* Category, Titles, and Article CSS  */

.cat-grid{
	margin-top:100px;
}

.category-item{
	height:120px;
	background-color: <?php echo $secondary_color; ?>;
	/*background-image: url("../img/backgrounds/secondary-background.png");*/
	margin:20px;
	border-radius: 10px;
	box-shadow: 5px 5px 5px #888888;	
}
.category-item:hover{
	opacity:0.8;
}
.list-group-item{
	margin-bottom:5px;
	background-color: <?php echo $secondary_color; ?>;
	/*background-image: url("../img/backgrounds/secondary-background.png");*/
	border:none;
}
.list-group-item:hover{
	opacity:0.8;
	border:none;
}
.title-box{
	
}

.title-clip-art{
	max-height:40%;
	height:125px;
	width:50%;
	opacity:0.4;
	
}

.ebook-list{
	margin-top:100px;
	margin-bottom:300px;
}

.title-list{
	margin-bottom:300px;
}
.article{
	margin-top:100px;
	margin-left:auto;
	margin-right:auto;
}
.article-section  {
	background-color: <?php echo $secondary_color; ?>;
	/*background-image: url("../img/backgrounds/secondary-background.png");*/
	padding:50px;
	min-height:1000px;
	border-radius:50px;
	opacity:0.9;
	margin-bottom:300px;
	box-shadow: 5px 5px 5px #888888;	
}
.adsense-bar{
	background-color: <?php echo $secondary_color; ?>;
	/*background-image: url("../img/backgrounds/secondary-background.png");*/
	padding:50px;
	min-height:1000px;
	border-radius:50px;
	opacity:0.9;
	margin-bottom:300px;
	box-shadow: 5px 5px 5px #888888;
	float:left;
}

.article-section-footer{
	padding-top:60px;
	display:inline
}

.shopping-cart{
	background-color: <?php echo $secondary_color; ?>;
	/*background-image: url("../img/backgrounds/secondary-background.png");*/
	padding:50px;
	border-radius:50px;
	opacity:0.9;
	margin-bottom:300px;
	box-shadow: 5px 5px 5px #888888;	
}



/* Font CSS
  go to http://www.cssfontstack.com/ for different font css
*/

h1 {
	font-family: Geneva, Tahoma, Verdana, sans-serif;
	font-size: 28px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
}
h3 {
	font-family: Geneva, Tahoma, Verdana, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 15.4px;
}
h4, h1, h2{
	color:white;
}
h5{
  font-size: 20px;
}
p {
	font-family: Geneva, Tahoma, Verdana, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 20px;
}
blockquote {
	font-family: Geneva, Tahoma, Verdana, sans-serif;
	font-size: 21px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 30px;
}
pre {
	font-family: Geneva, Tahoma, Verdana, sans-serif;
	font-size: 13px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 18.5714px;
}

.no-pad{
  padding: 0;
}

.col-10px-pad{
	padding:10px;
}

.promo-height{
	height:200px;
}

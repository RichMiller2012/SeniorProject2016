<?php
	session_start();

	if(!isset($_SESSION['admin'])){
		header("location:login.php?failed=attempt");
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Admin Control Panel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Admin Panel</h1>
	<h4><a href="adminindex.php?logout=true">Logout</a></h4>
	<a href="admin-panel.php"><button class="btn btn-primary">Main Panel</button></a>
<?php
	include("dbconnect.php");
	/*
		begin adding all of the php includes for the different
		scenarios of administrative tasks

		Add a root category
		Add a subcategory
		Add an article to a category/subcategory
		
		Remove a category (warn user that all sub-data will be lost)
		Remove a sub category (same warning)
		Remove an article
		
		Edit a root category
		Edit a subcategory
		Edit and article
		
		Reattach a subcategory to another category
		Attach a root category to another category/subcategory
		Reattach an article to another category

		Update "whats new" section
	
	*/

?>

 
 
<?php 
    //admin root selection
	if(!isset($_GET['type'])){
?>	
	<ul>
		<li>
			<a href="admin-panel.php?type=categories">
				<button class="btn">Categories</button></a>
		</li>
		<li>
			<a href="admin-panel.php?type=subcategories">
				<button class="btn">Sub Categories</button></a>
		</li>
		<li>
			<a href="admin-panel.php?type=articles">
				<button class="btn">Articles</button></a>
		</li>
	</ul>
	
<?php
	}
?>


<?php

	//Selection paths
	if(isset($_GET['type']) && $_GET['type'] === "categories"){
		include("categories/categories.php");
	}
	if(isset($_GET['type']) && $_GET['type'] === "subcategories"){
		include("subcategories/subcategories.php");
	}
	if(isset($_GET['type']) && $_GET['type'] === "articles"){
		include("articles/articles.php");
	}

?>

</body>
</html>
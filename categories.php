<div class="row cat-grid">

<?php
  if(isset($_GET['type'])){
    $catType = $_GET['type'];
	$catID = $_GET['categoryID'];
	
	$sql = "SELECT * FROM category WHERE type = '$catType' AND linkcatID = $catID";
	$query = mysqli_query($dbconnect, $sql);
	$rs = mysqli_fetch_assoc($query);
	
	if(!empty($rs)){
		do {
?>
			<a href="index.php?state=category&type=<?php echo $catType; ?>&categoryID=<?php echo $rs['categoryID']; ?>">
				<div class="col-md-2 item">
					<h4><?php echo $rs['name'] ?></h4>
				</div>
			</a>
<?php				
		} while($rs=mysqli_fetch_assoc($query));
	}	
  } 
?>
  
</div>

<?php
	include("php/titles.php");
?>
		
  
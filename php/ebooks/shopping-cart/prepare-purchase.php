<?php
	include($_SERVER['DOCUMENT_ROOT'] . "/php/dbconnect.php");

	//we have all of the ids that the user has selected
	if(isset($_POST['ids'])){
		$ids = $_POST['ids'];
		
		echo $ids;
		
		$select_ebook_sql = "SELECT * FROM ebooks WHERE ebook_id IN ($ids)";
		$select_ebook_query = mysqli_query($dbconnect, $select_ebook_sql);
		$select_ebook_rs = mysqli_fetch_assoc($select_ebook_query);
		
		$totalPrice = 0;
		if(!empty($select_ebook_rs)){
			do{
				$totalPrice += $select_ebook_rs['price'];
			} while ($select_ebook_rs = mysqli_fetch_assoc($select_ebook_query));
		}
		
		$_POST['price'] = $totalPrice;
		
		header("Location: /php/paypal/payment.php");
	}

?>
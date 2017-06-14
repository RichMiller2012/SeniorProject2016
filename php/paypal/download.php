<?php

	ob_start();
	session_start();

	include($_SERVER['DOCUMENT_ROOT'] . "/php/dbconnect.php");

	$purchased_ids = $_SESSION['ebook_ids'];
	
	$buy_ebook_sql = "SELECT * FROM ebooks WHERE ebook_id IN ($purchased_ids)";
	echo $buy_ebook_sql;
	$buy_ebook_query = mysqli_query($dbconnect, $buy_ebook_sql);
	$buy_ebook_rs = mysqli_fetch_assoc($buy_ebook_query);
	
	if(!empty($buy_ebook_rs)){
		do{
			$fileName = $buy_ebook_rs['ebook_url'];
			$file_url = $_SERVER['DOCUMENT_ROOT'] . "/ebooks/" . $fileName;	

			downloadFile($fileName, $file_url);
			
			//break;
			
			
		} while ($buy_ebook_rs = mysqli_fetch_assoc($buy_ebook_query));
	}
	
	echo "made it to download";
	
	function downloadFile($fileName, $file_url){
		header('Content-Description: File Transfer');
		header("Content-disposition: attachment; filename=test.pdf");
		header("Content-Type: application/pdf");
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file_url));
		//header('Content-disposition: attachment; filename="'.$fileName.'"');
		readfile($file_url);
		
		
		return;
	}
	
?>


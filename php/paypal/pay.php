<?php
	
	use PayPal\Api\Payment;
	use PayPal\Api\PaymentExecution;
	
	require 'start.php';
	
	if(isset($_GET['approved'])){
		
		$approved = $_GET['approved'] === 'true';
		
		if($approved){
			
			$payerId = $_GET['PayerID'];
			
			//Get payment_id from database
			$paymentId = $db->prepare("
				SELECT payment_id
				FROM paypal_transactions
				WHERE hash = :hash
			");
			
			$paymentId->execute([
				'hash' => $_SESSION['paypal_hash']
			]);
			
			$paymentId = $paymentId->fetchObject()->payment_id;
			
			$payment = Payment::get($paymentId, $api);
			
			$execution = new PaymentExecution();
			$execution->setPayerId($payerId);
			
			// CHARGE THE USER!!!
			$payment->execute($execution, $api);
			
			header("Location: ../../index.php?state=ebook&success=true");
			
		} else {
			
			header('Location: cacnelled.php');
		}
	}
	
?>
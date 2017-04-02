<?php

	require 'start.php';

	use PayPal\Api\Payer;
	use PayPal\Api\Details;
	use PayPal\Api\Amount;
	use PayPal\Api\Transaction;
	use PayPal\Api\Payment;
	use PayPal\Api\RedirectUrls;
	use PayPal\Exception\PPConnectionException;

	$payer = new Payer();
	$details = new Details();
	$amount = new Amount();
	$transaction = new Transaction();
	$payment = new Payment();
	$redirectUrls = new RedirectUrls();
	
	/**
	
		Set up payment info, right now the values are static, but should
		be made dynamic and passed through
	
	**/
	
	// Payer
	$payer->setPaymentMethod('paypal');
	
	// Details
	$details->setShipping('2.00')
		->setTax('0.00')
		->setSubtotal('20.00');
		
	// Amount
	$amount->setCurrency('USD')
		->setTotal('22.00')
		->setDetails($details);
		
	// Transaction
	$transaction->setAmount($amount)
		->setDescription('Membership');
		
	
	// Payment
	$payment->setIntent('sale')
		->setPayer($payer)
		->setTransactions([$transaction]);
		
	// RedirectUrls
	$redirectUrls->setReturnUrl('http://localhost/php/paypal/pay.php?approved=true')
		->setCancelUrl('http://localhost/php/paypal/pay.php?approved=false');
		
	$payment->setRedirectUrls($redirectUrls);
		
		
	try{
		$payment->create($api);
		
		// Generate and store a hash
		$hash = md5($payment->getId());
		$_SESSION['paypal_hash'] = $hash;
		
		// Prepare and execute transaction storage
		
		$store = $db->prepare("
			INSERT INTO paypal_transactions (user_id, payment_id, hash, complete)
			VALUES(:user_id, :payment_id, :hash, 0)
		");
		
		$store->execute([
			'user_id' => $_SESSION['user_id'],
			'payment_id' => $payment->getId(),
			'hash' => $hash
		]);
		
		
		
	} catch (PPConnectionException $e) {
		header('Location: ../paypal/error.php');
		
	}
		
	var_dump($payment->getLinks());	
	
	foreach($payment->getLinks() as $link) {
		if($link->getRel() == 'approval_url'){
			$redirectUrl = $link->getHref();
		}
	}
	
	header('Location: ' . $redirectUrl);
	
	
		
?>
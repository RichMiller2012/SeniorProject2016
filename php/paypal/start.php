<?php
	
	use PayPal\Rest\ApiContext;
	use PayPal\Auth\OAuthTokenCredential;
	
	session_start();

	$_SESSION['user_id'] = 1;
	
	require __DIR__ . '/../../vendor/autoload.php';
	
	// API
	$api = new ApiContext(
		new OAuthTokenCredential(
			'AawOeTI0P1UOgGy6gQw9YWEP6Qg2y-Q6EyH9F5-OrOUGzLQLAByddCiG21Yxn9K30YHfEraLGMeBbbow',
			'EP-50e61NaJX7vK4nWyxruIQ2MS9qyWKlwfv0y0g-hDp2zYkK9_KDj_IXV8XxNHNbWqDJ6XXngwNl2LJ'
		)
	);
	
	$api->setConfig([
		'mode' => 'sandbox',
		'http.ConnectionTimeOut' => 30,
		'log.logEnabled' => false,
		'log.FileName' => '',
		'log.LogLevel' => 'FINE',
		'validation.level' => 'log'
	]);
	
	$db = new PDO("mysql:host=localhost;dbname=hsdb", 'root','');
	
	$user = $db->prepare("
		SELECT * FROM paypal_users
		WHERE user_id = :user_id
	");
	
	$user->execute(['user_id' => $_SESSION['user_id']]);
	
	$user = $user->fetchObject();
	
?>
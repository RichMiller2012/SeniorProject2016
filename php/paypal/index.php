<?php
	
	require 'start.php';
	
	
	/**
		starting point for firing off the PayPal API
		once all payment data has been collected, it can be 
		passed into 'payment.php' and be processed
		
		This will initiate the following sequence:
		
			1. Create all the API objects with the dynamic payment data
			2. Redirect user to their PayPal account
			3. The user will either cancel, confirm, or error out 
			4. PayPal will redirect back to the site where payment will be finalized
			5. Any and all Ebooks selected will need to be downloaded
			
	**/
	
?>

<?php if($user->member): ?>
	<p>You are a member</p>
<?php else: ?>
	<p>You are not a member. <a href="payment.php">Become a member</a></p>
<?php endif; ?>
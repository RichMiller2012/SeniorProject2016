<?php
	
	require 'start.php';
	
	
?>

<?php if($user->member): ?>
	<p>You are a member</p>
<?php else: ?>
	<p>You are not a member. <a href="payment.php">Become a member</a></p>
<?php endif; ?>
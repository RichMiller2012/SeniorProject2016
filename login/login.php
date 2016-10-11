<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Login Page<h1>

<div class="row">
	<form action="adminindex.php" method="POST">

		<div class="col-md-4">
			<p>Username: <input name="username" class="form-control"/></p>
			<p>Password: <input name="password" type="password" class="form-control"/></p>
			
			<?php
				if(isset($_GET['error'])) {
					echo "Incorrect username or password";
				}
			?>
			<p><input type="submit" name="login" class="btn btn-primary"/></p>
		</div>
	</form>
</div>
</body>

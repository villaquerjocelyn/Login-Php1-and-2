<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="reference.css">
</head>
<body>

	<div class="header">
		<h2>Sign In</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<p>
			Create Account? <a href="register.php">Sign up</a>
		</p>
		<div class="input-group">
			<button class="w3-btn w3-round w3-green" style = "width: 30% " type="submit" class="btn" name="login_user">Login</button>
		</div>
		
	</form>


</body>
</html>
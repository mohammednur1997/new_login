		<?php include 'login_validation.php'; ?>
		<!DOCTYPE html>
		<html>
		<head>
		<title>PHP Login Form</title>
		<link href="password.css" rel="stylesheet">
		</head>
		<body>
		<div class="container">
		<div class="main">
		<h2>PHP Login Form</h2>
		<form action="password_login.php" method="post">
		<label class="heading">Email :</label>
		<input name="email" type="text">
		<label class="heading">Password :</label>
		<input name="password" type="password">
		<input name="submit" type="submit" value="SignIn">
		<span class="error"><?php echo $Error;?></span>
		<span class="success"><?php echo $successMessage;?></span>
		</form><a class="forgot" href="forgot_password.php">forgot password ?</a>
		<a class="login" href="password_form.php">SignUp</a>
		</div>
		</div>
		</body>
		</html>
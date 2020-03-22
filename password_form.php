		<?php include 'password_generator.php'; ?>
		<!DOCTYPE html>
		<html>
		<head>
		<title>PHP Password Generator</title>
		<link href="password.css" rel="stylesheet">
		</head>
		<body>
		<div class="container">
		<div class="main">
		<h2>PHP Password Generator</h2>
		<form action="password_form.php" method="post">
		<label class="heading">Name :</label>
		<input name="name" type="text">
		<span class="error"><?php echo $nameError;?></span>
		<label class="heading">Email :</label>
		<input name="email" type="text">
		<span class="error"><?php echo $emailError;?></span>
		<input name="submit" type="submit" value="SignUp">
		<span class="success"><?php echo $successMessage;?></span>
		<span class="success"><?php echo $passwordMessage;?></span>
		</form>
		<p><b>Note :</b> Fill this form and password will be send to your email address.</p>
		<a class="login" href="password_login.php">SignIn</a>
		</div>
		</div>
		</body>
		</html>
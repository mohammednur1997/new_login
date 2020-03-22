	<?php include 'profile_validation.php'; ?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>PHP Profile Page</title>
	<link href="password.css" rel="stylesheet">
	</head>
	<body>
	<div class="container">
	<div class="main">
	<h2>Welcome ! <i><?php echo $login_session; ?></i></h2>
	<form action="profile.php" method="post">
	<a class="logout" href="logout.php">SignOut</a>
	<h3>Now you can change password.</h3><label>New Password :</label>
	<input name="newpassword" type="password">
	<label>Confirm New Password :</label>
	<input name="cnewpassword" type="password">
	<input name="submit" type="submit" value="Change Password">
	<span class="error"><?php echo $Error;?></span>
	<span class="success"><?php echo $successMessage;?></span>
	</form>
	</div>
	</body>
	</html>

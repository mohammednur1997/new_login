	<?php
	session_start();
	if(session_destroy()) // Destroying All Sessions
	{
	header("Location: password_login.php"); // Redirecting to Home Page
	}
	?>
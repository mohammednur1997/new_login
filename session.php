		<?php
		//  Establishing Connection with Server by Passing server_name, user_id and password as a Parameter.
		$connection = mysqli_connect("localhost", "root", "","college");
		
		session_start();  // Starting Session
		$email_check=$_SESSION['login_user'];  // Storing Session
		//  SQL Query to Fetch Complete Information of User.
		$sql=""select * from registration where email='$email_check'"";
		$ses_sql=mysqli_query($sql, $connection);
		$row = mysqli_fetch_assoc($ses_sql);
		$login_session =$row['name'];
		$login_password =$row['password'];
		if(!isset($login_session))
		{
		mysqli_close($connection); // Closing Connection
		header('Location: password_login.php'); // Redirecting to Home Page
		}
		?>
		<?php
		// Initialize Variables to Null.
		$email =""; // Sender's E-mail ID
		$Error ="";
		$successMessage ="";
		// On Submitting Form Below Function Will Execute
		if(isset($_POST['submit']))
		{
		if (!($_POST["email"]==""))
		{
		$email =$_POST["email"];  // Calling Function To Remove Special Characters From E-mail
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);  // Sanitizing E-mail(Remove unexpected symbol like <,>,?,#,!, etc.)
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_"; // Generating Password
		$password = substr( str_shuffle( $chars ), 0, 8 );
		$password1= sha1($password);
		$connection = mysqli_connect("localhost", "root", "","college");  // Establishing Connection With Server..
		$sql="UPDATE registration SET password='$password1' WHERE email='$email'";
		$query = mysqli_query($connection,$sql);
		if($query)
		{
		$to = $email;
		$subject = 'Your New Password...';
		// Let's Prepare The Message For E-mail.
		$message = 'Hello User
		Your new password : '.$password.'
		E-mail: '.$email.'
		Now you can login with this email and password.';
		// Send The Message Using mail() Function.
		if(mail($to, $subject, $message ))
		{
		$successMessage = "New Password has been sent to your mail, Please check your mail and SignIn.";
		}
		}
		}
		else{
		$Error = "Invalid Email";
		}
		}
		else{
		$Error = "Email is required";
		}
		}
		?>
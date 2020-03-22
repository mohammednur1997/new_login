		<?php
		// Initialize Variables To Null.
		$name =""; // Sender's Name
		$email =""; // Sender's Email ID
		$nameError ="";
		$emailError ="";
		$successMessage ="";
		$passwordMessage ="";
		//On Submitting Form Below Function Will Execute
		if(isset($_POST['submit']))
		{
		// Checking Null Values In Message
		if (!($_POST["name"]== "")){
		$name = $_POST["name"];
		// Check Name Only Contains Letters And Whitespace
		if (preg_match("/^[a-zA-Z ]*$/",$name)){
		if (!($_POST["email"]=="")) {
		$email =$_POST["email"]; // Calling Function To Remove Special Characters From Email
		// Check If E-mail Address Syntax Is Valid Or Not
		$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing Email(Remove Unexpected Symbol like <,>,?,#,!, etc.)
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
		// Generating Password
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
		$password = substr( str_shuffle( $chars ), 0, 8 );
		$password1= sha1($password); //Encrypting Password
		$connection = mysqli_connect("localhost", "root", "","college"); // Establishing Connection With Server..
		
		$sql="SELECT * FROM registration WHERE email='$email'";
		
		$result = mysqli_query($connection,$sql);
		$data = mysqli_num_rows($result);
		if(($data)==0){
		// Insert query
		$sql2="insert into registration(name, email, password) values ('$name', '$email', '$password1')";
		$query = mysqli_query($connection,$sql2);
		if($query){
		$to = $email;
		$subject = 'Your registration is completed';
		/* Let's Prepare The Message For The E-mail */
		$message = 'Hello'.$name.'
		Your email and password is following:
		E-mail: '.$email.'
		Your new password : '.$password.'
		Now you can login with this email and password.';
		/* Send The Message Using mail() Function */
		if(mail($to, $subject, $message ))
		{
		$successMessage = "Password has been sent to your mail, Please check your mail and SignIn.";
		}
		}
		}
		else{
		$emailError = "This email is already registered, Please try another email...";
		}
		}
		else{
		$emailError = "Invalid Email"; }
		}
		else{
		$emailError = "Email is required";
		}
		}
		else{
		$nameError = "Only letters and white space allowed";
		}
		}
		else {
		$nameError = "Name is required";
		}
		}
		?>
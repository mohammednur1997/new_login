		<?php
		include('session.php');
		$Error ="";  // Initialize Variables to Null.
		$successMessage ="";
		if (isset($_POST['submit']))
		{
		if ( !($_POST['newpassword'] == "" && $_POST['cnewpassword'] == "" ))
		{
		$newpassword=$_POST['newpassword'];  // Fetching Values from URL
		$cnewpassword=$_POST['cnewpassword'];
		if( $newpassword == $cnewpassword )
		{
		$password= sha1($cnewpassword);
		$connection = mysqli_connect("localhost", "root", "","college");  // Establishing Connection with Server..
		$sql="UPDATE registration SET password='$password' WHERE password='$login_password'";
		$query = mysqli_query($connection,$sql);
		if($query)
		{
		$successMessage ="Password Changed Successfully.";
		}
		}
		else{
		$Error ="Password not match...!!!!";
		}
		}
		else{
		$Error ="Password should not be empty....!!!!";
		}
		}
		?>
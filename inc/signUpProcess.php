<?php

include '../connect/config.php';

if (isset($_POST['submit']))
	{

	$user_email = $_POST['email'];		
	$password = $_POST['pwd'];
	$repassword = $_POST['repwd'];
	$user_name=mysqli_real_escape_string($conn,$_POST['username']);
	    
	    if ($password != $repassword) {
            ?>
			 <script>alert('Your Password and Retype Password is not match'); window.location='../dashboard.php?post_type=new-admin';</script>;
			<?php
        }
        
	    $user_check_query = "SELECT * FROM admin WHERE username='$user_name' LIMIT 1";
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		
		$email_check_query = "SELECT * FROM admin WHERE email='$user_email' LIMIT 1";
		$result2 = mysqli_query($conn, $email_check_query);
		$email = mysqli_fetch_assoc($result2);
		
			if ($user) { // if user exists
			?><script>alert('Sorry, Your username is already taken. Please try another username.'); window.location='../dashboard.php?post_type=new-admin';</script>;
			<?php
		} else if ($email) { // if user exists
			?><script>alert('Sorry, You have account already. Please proceed to Log In'); window.location='../dashboard.php?post_type=new-admin';</script>;
			<?php 
			
		} else
			{
			$hashed= sha1($password);  
 
			$sqlAdmin = "INSERT INTO admin (username ,email , unit , password) 
			VALUES ('$_POST[username]','$_POST[email]','$_POST[position]','$hashed')";
			mysqli_query($conn,$sqlAdmin)or die ('Could not connect : ' .mysqli_error($conn));
			?>
			<script>alert('Register Successful'); window.location='../dashboard.php?post_type=admin-list'</script>;
			<?php
			}
	
	}
?> 
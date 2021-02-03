<?php
if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$con = mysqli_connect("localhost", "root","") or die(mysqli_error($con)); //Connect to server
		mysqli_select_db($con,"SERVIL") or die("Cannot connect to database"); //Connect to database
		
		date_default_timezone_set('Asia/Kuala_Lumpur');
		$time_out = date("h:i:sa");
		$num = $_GET['num'];
		mysqli_query($con,"UPDATE visitor SET time_out='$time_out' WHERE num='$num'") ;
		
		Print '<script>window.location.assign("guest.php?post_type=viewSubmitted&submit=success");</script>'; // redirects to submit.php
		
	}
?>
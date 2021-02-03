<?php
	session_start(); //starts the session

	require_once('../connect/config.php');

	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location: ../guest.php?post_type=login"); // redirects if user is not logged in
	}
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$id = $_GET['id'];
		mysqli_query($conn,"DELETE FROM admin WHERE id='$id'");
		header("location: ../dashboard.php?post_type=admin-list");
	}
?>
<?php 

require_once('connect/config.php');

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>
    	
<?php 

$id = $_GET['post_type'];

if($id == 'checkin'){
    $title = "Check-in &#8249; Server Room Visitor Log | SERVIL";
    echo $title;
}

if($id == 'checkout'){
    $title = "Check-in &#8249; Server Room Visitor Log | SERVIL";
    echo $title;
}

if($id == 'viewSubmitted'){
    $title = "View Submitted &#8249; Server Room Visitor Log | SERVIL";
    echo $title;
}

if($id == 'login'){
    $title = "Login &#8249; Server Room Visitor Log | SERVIL";
    echo $title;
}



?>

    </title>

    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon"> <!-- Favicon-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<script src="https://use.fontawesome.com/7d3873a12a.js"></script>
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php

$execute = "checkin.php";

$id = $_GET['post_type'];

if ($id == 'signUp'){
$execute = 'signUp.php';
}

if ($id == 'checkout'){
$execute = 'checkout.php';
}

if ($id == 'login'){
$execute = 'signIn.php';
}

if ($id == 'sign-up'){
$execute = 'signUp.php';
}


if ($id == 'viewSubmitted'){
$execute = 'viewSubmitted.php';
}

if ($id == 'resetPassword'){
$execute = 'resetPassword.php';
}

?>

	
<?php include('inc/guestNav.php'); ?>

<?php include ("$execute");?>




<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>

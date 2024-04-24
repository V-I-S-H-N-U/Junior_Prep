<?php

$db = mysqli_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'mini' ) or die(mysqli_error($db));




session_start();

if(!isset($_SERVER['HTTP_REFERER'])){
	// redirect them to your desired location
	header('location:../error.php');
	exit;
	}
	if(!isset($_SESSION['mentor_name'])){
		header('location:../error.php');
		exit;
	}

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM users";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from users where email = '$d'");
$dellllll = mysqli_query($db,"DELETE from history where email = '$d'");
$del = mysqli_query($db,"DELETE from rnotice where user = '$d'");

//error_reporting(E_ERROR | E_PARSE);

header('location:userman.php');
exit;
//header('location:arithmetic_aptitude.php');?>
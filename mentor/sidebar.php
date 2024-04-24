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
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>JUNIOR PREP</title>

<link rel="shortcut icon" type="image/x-icon" href="../images/logo1-small.png">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/css/animate.css">

<link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="index.php" class="logo">
<img style="margin-top:17px;margin-left:20px;" src="../images/logo1.png" alt="">
</a>
<a href="index.php" class="logo-small">
<img style="margin-top:20px;" src="../images/logo1-small.png" alt="">
</a>
<a id="toggle_btn" href="javascript:void(0);">
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">



<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-img"><img src="../assets/img/profiles/avatar2.jpg" alt="">
<span class="status online"></span></span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="../assets/img/profiles/avatar2.jpg" alt="">
<span class="status online"></span></span>
<div class="profilesets">
<h6><?php echo strtoupper("{$_SESSION['mentor_name']}");?></h6>
<h5>Mentor</h5>
</div>
</div>
<hr class="m-0">

<a class="dropdown-item" href="profile.php"><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="../logout.php"><img src="../assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.php">My Profile</a>
<a class="dropdown-item" href="../logout.php">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li>
<a href="index.php"><img src="../assets/img/icons/home.svg" alt="img"><span> Dashboard</span> </a>
</li>
<?php 
    $d=$_SESSION['mentor_name'];

    $qq = "SELECT * from users where username = '$d'";
    $queryy = mysqli_query($db,$qq); 
    $row = mysqli_fetch_array($queryy);
    if ($row['notes'] == 1){
        ?>
<li class="submenu">
    <a href="javascript:void(0);"><img src="../assets/img/icons/file.svg" alt="img"><span> Aptitude Notes</span> <span class="menu-arrow"></span></a>
    <ul>
    <li>    <?php if (@$_GET['a'] == 0)?>   <a href="arithmetic-notes.php?a=0">Arithmetic Aptitude</a></li>
    <li> <?php if (@$_GET['a'] == 1)?>  <a href="arithmetic-notes.php?a=1">Data Interpretation</a></li>
    <li> <?php if (@$_GET['a'] == 2)?>  <a href="arithmetic-notes.php?a=2">Verbal Ability</a></li>
    <li> <?php if (@$_GET['a'] == 3)?>  <a href="arithmetic-notes.php?a=3">Logical Reasoning</a></li>
    <li> <?php if (@$_GET['a'] == 4)?>  <a href="arithmetic-notes.php?a=4">Verbal Reasoning</a></li>
    <li> <?php if (@$_GET['a'] == 5)?>  <a href="arithmetic-notes.php?a=5">Nonverbal Reasoning</a></li>
    
    </ul>
    </li>
    <li class="submenu">
    <a href="javascript:void(0);"><img src="../assets/img/icons/book.svg" alt="img"><span> Department Notes</span> <span class="menu-arrow"></span></a>
    <ul>
<li> <?php if (@$_GET['d'] == 0)?> <a href="department-notes.php?d=0">Mechanical</a></li>
<li> <?php if (@$_GET['d'] == 1)?> <a href="department-notes.php?d=1">Civil</a></li>
<li> <?php if (@$_GET['d'] == 2)?> <a href="department-notes.php?d=2">ECE</a></li>
<li> <?php if (@$_GET['d'] == 3)?> <a href="department-notes.php?d=3">EEE</a></li>
<li> <?php if (@$_GET['d'] == 4)?> <a href="department-notes.php?d=4">CSE</a></li>
</ul>
    </li><?php }?>
    <?php 
    $d=$_SESSION['mentor_name'];
    $qq = "SELECT * from users where username = '$d'";
    $queryy = mysqli_query($db,$qq); 
    $row = mysqli_fetch_array($queryy);
    if ($row['interview'] == 1){
        ?>
    <li class="submenu">
    <a href="javascript:void(0);"><img src="../assets/img/icons/person-work.svg" alt="img"><span> Interview Preparation</span> <span class="menu-arrow"></span></a>
    <ul>
<li> <?php if (@$_GET['int'] == 0)?> <a href="interview-preparation.php?int=0">Technical Interview</a></li>
<li> <?php if (@$_GET['int'] == 1)?> <a href="interview-preparation.php?int=1">HR Interview</a></li>
<li> <?php if (@$_GET['int'] == 2)?> <a href="interview-preparation.php?int=2">Appointment List</a></li>
<li> <?php if (@$_GET['int'] == 3)?> <a href="interview-preparation.php?int=3">Mock Interview</a></li>
</ul>
    </li>
    <?php }?>
    <?php 
    $d=$_SESSION['mentor_name'];
    $qq = "SELECT * from users where username = '$d'";
    $queryy = mysqli_query($db,$qq); 
    $row = mysqli_fetch_array($queryy);
    if ($row['resume'] == 1){
        ?>
    <li class="submenu">
    <a href="javascript:void(0);"><img src="../assets/img/icons/journals.svg" alt="img"><span> Resumes</span> <span class="menu-arrow"></span></a>
    <ul>
<li> <?php if (@$_GET['res'] == 0)?> <a href="resumes.php?res=0">Review Resume</a></li>
<li> <?php if (@$_GET['res'] == 1)?> <a href="resumes.php?res=1">Build Resume</a></li>
</ul>
    </li>
    <?php }?>
    <?php 
    $d=$_SESSION['mentor_name'];
    $qq = "SELECT * from users where username = '$d'";
    $queryy = mysqli_query($db,$qq); 
    $row = mysqli_fetch_array($queryy);
    if ($row['quiz'] == 1){

        ?>
    <li class="submenu">
<a href="javascript:void(0);"><img src="../assets/img/icons/puzzle.svg" alt="img"><span> Quiz</span> <span class="menu-arrow"></span></a>
<ul>
<li><?php
if (@$_GET['q'] == 1)
 
?><a href="quiz.php?q=1">Leaderboard</a></li>
<li><?php
if (@$_GET['q'] == 0)
    
?><a href="quiz.php?q=0">Quiz List<span class="sr-only">(current)</span></a></li>
<li><?php
if (@$_GET['q'] == 3)
  
?><a href="quiz.php?q=3">Add Quiz</a></li>
 <li><?php
if (@$_GET['q'] == 4)
 
?><a href="quiz.php?q=4">Remove Quiz</a></li>
</ul>
</li>
<?php } ?>
<li>
<a href="profile.php"><img src="../assets/img/icons/settings.svg" alt="img"><span> Settings</span></a>
</li>

    <?php 
    $d=$_SESSION['mentor_name'];
    $qq = "SELECT * from users where username = '$d'";
    $queryy = mysqli_query($db,$qq); 
    $row = mysqli_fetch_array($queryy);
    if ($row['help'] == 1){

        ?>
<li>
<a href="enquiry.php?pl=0"><img src="../assets/img/icons/question.svg" alt="img"><span>Help</span></a>
</li>
<?php } ?>
<li>
<a href="../logout.php"><img src="../assets/img/icons/logout.svg" alt="img"><span>Logout</span></a>
</li>
</ul>
</div>
</div>
</div>

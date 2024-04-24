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
	if(!isset($_SESSION['user_name'])){
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
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>JUNIOR PREP</title>

<link rel="shortcut icon" type="image/x-icon" href="../images/logo1-small.png">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/css/animate.css">

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
<?php echo '<a class="logo" href="user-index.php?user='.$_GET['user'].' ">';?>
<img style="margin-top:17px;margin-left:20px;" src="../images/logo1.png" alt="">
</a>
<?php echo '<a class="logo-small" href="user-index.php?user='.$_GET['user'].' ">';?>
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
<h6><?php
                                $i=$_GET['user'];
                                $query1 = "SELECT * FROM users where email='$i'";
                                $result1 = mysqli_query($db, $query1) or die (mysqli_error($db));
                                while ($row = mysqli_fetch_assoc($result1)) { echo ucfirst("{$row['username']}"); }
                                
                                ?></h6>
<h5>User</h5>
</div>
</div>
<hr class="m-0">
<?php echo '<a class="dropdown-item" href="user-settings.php?user='.$_GET['user'].' "> '; ?><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="../logout.php"><img src="../assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>

<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<?php echo '<a class="dropdown-item" href="user-settings.php?user='.$_GET['user'].' "> '; ?>Settings</a>
<a class="dropdown-item" href="../logout.php">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li>
<?php echo '<a href="user-index.php?user='.$_GET['user'].' ">';?><img src="../assets/img/icons/home.svg" alt="img"><span> Dashboard</span> </a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="../assets/img/icons/file.svg" alt="img"><span> Aptitude Notes</span> <span class="menu-arrow"></span></a>
<ul>
<li><?php echo '<a href="aptitude-notes.php?ap=0 & user='.$_GET['user'].' "> '; ?>Arithmetic Aptitude</a></li>
<li><?php echo '<a href="aptitude-notes.php?ap=6 &user='.$_GET['user'].' "> '; ?>Data Interpretation</a></li>
<li><?php echo '<a href="aptitude-notes.php?ap=12 &user='.$_GET['user'].' "> '; ?>Verbal Ability</a></li>
<li><?php echo '<a href="aptitude-notes.php?ap=18 &user='.$_GET['user'].' "> '; ?>Logical Reasoning</a></li>
<li><?php echo '<a href="aptitude-notes.php?ap=24 &user='.$_GET['user'].' "> '; ?>Verbal Reasoning</a></li>
<li><?php echo '<a href="aptitude-notes.php?ap=30 &user='.$_GET['user'].' "> '; ?>Nonverbal Reasoning</a></li>

</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="../assets/img/icons/book.svg" alt="img"><span> Department Notes</span> <span class="menu-arrow"></span></a>
<ul>
<li><?php echo '<a href="department-notes.php?dap=0 &user='.$_GET['user'].' "> '; ?>Mechanical</a></li>
<li><?php echo '<a href="department-notes.php?dap=6 &user='.$_GET['user'].' "> '; ?>Civil</a></li>
<li><?php echo '<a href="department-notes.php?dap=12 &user='.$_GET['user'].' "> '; ?>ECE</a></li>
<li><?php echo '<a href="department-notes.php?dap=18 &user='.$_GET['user'].' "> '; ?>EEE</a></li>
<li><?php echo '<a href="department-notes.php?dap=24 &user='.$_GET['user'].' "> '; ?>CSE</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="../assets/img/icons/person-work.svg" alt="img"><span> Interview Preparation</span> <span class="menu-arrow"></span></a>
<ul>
<li><?php echo '<a href="interview.php?ine=0 &user='.$_GET['user'].' "> '; ?>Technical Interview</a></li>
<li><?php echo '<a href="interview.php?ine=1 &user='.$_GET['user'].' "> '; ?>HR Interview</a></li>
<li><?php echo '<a href="interview.php?ine=2 &user='.$_GET['user'].' "> '; ?>Mock Interview</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="../assets/img/icons/journals.svg" alt="img"><span> Resumes</span> <span class="menu-arrow"></span></a>
<ul>
<li><?php echo '<a href="user-review-resume.php?user='.$_GET['user'].' "> '; ?>Review Resume</a></li>
<li><?php echo '<a href="user-resume-builder.php?user='.$_GET['user'].' "> '; ?>Build Resume</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="../assets/img/icons/puzzle.svg" alt="img"><span> Quiz</span> <span class="menu-arrow"></span></a>
<ul>
<li><?php
if (@$_GET['q'] == 1)
 
?><?php echo '<a href="user-leaderboard.php?q=1&user='.$_GET['user'].' "> '; ?>Leaderboard</a></li>
<li>
<?php echo '<a href="account.php?q=1&user='.$_GET['user'].' "> '; ?>Attend Quiz</a></li>
</ul>
</li>
<li>
<?php echo '<a href="user-settings.php?user='.$_GET['user'].' "> '; ?><img src="../assets/img/icons/settings.svg" alt="img"><span>Settings</span> </a>
</li>
<li>
<?php echo '<a href="enq.php?okl=0&user='.$_GET['user'].' "> '; ?><img src="../assets/img/icons/question.svg" alt="img"><span>Help</span> </a>
</li>
<li>
<a href="../logout.php"><img src="../assets/img/icons/logout.svg" alt="img"><span>Logout</span> </a>
</li>
</ul>
</div>
</div>
</div>
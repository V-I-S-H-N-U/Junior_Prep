
<?php if (@$_GET['okl'] == 0){?>
<?php include 'sidebar.php';?>


<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Enquiries</h4>

</div>
<div class="page-btn">
      
<?php echo '<a class="btn btn-added"  href="enquiry.php?user='.$_GET['user'].' "> '; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Send Enquiry</a>

</div>

</div>

</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Enquiry</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 



if (isset($_POST['sub'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	
	
    

        $tp = $_POST['topic'];
        $ro = $_POST['email'];

        date_default_timezone_set('Asia/Kolkata');
        $date = date('m/d/Y h:i:s a', time());

        $qil = "INSERT INTO repl (email,descr,date) VALUES ('$ro','$tp','$date')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM repl';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="enquiry.php"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 

				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">

                    <label for="fname"><strong>Email</strong></label>
                    <input class="form-control" type="text" id="Email" name="email" placeholder="Learners's Email" required><br>

						<label><strong>Your Reply</strong></label>
                        <textarea name="topic" rows="5000" cols="4000" placeholder="Reply"></textarea>
						 
						
					</div>
					<input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3">
					
				</form>
				</div>
	




</tbody>
</table>
</div>
</div>
</div>
</div>
</div>









<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">

</div>
</div>
<div class="wordset">
<ul>

</ul>
</div>
</div>

<div class="card" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Name">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Reference No">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Completed</option>
<option>Paid</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<a class="btn btn-filters ms-auto"><img src="../assets/img/icons/search-whites.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div>

<div class="card">
    <div class="card-body">
<?php  
$r=$_GET['user'];
$query = "SELECT * FROM repl where email='$r'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		$row = mysqli_fetch_assoc($result);
if($row == 0){
            echo '<h6 style="text-align:center;">No Replies <b style="color:red;">(*Your enquiries will be answered within 24 hours.)</b></h6>';
        }else {
if(true){

$r=$_GET['user'];
$query = "SELECT * FROM repl where email='$r'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
            while ($row = mysqli_fetch_assoc($result)) {
				                   
                echo '<tr>';
                
                echo 'From Admin ,<br><br>';
                echo '<td>'. $row['descr'].'</td>';
                echo '</tr> ';
                        }}}
?>
</div>
</div>



</div>
</div>
</div>


<?php   include 'footer.php'   ?>
<?php exit; } ?>


<!--       Delete Topic    -->

<?php if (@$_GET['okl'] == 1)  {?>


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
    if(!isset($_SESSION['admin_name'])){
		header('location:../error.php');
		exit;
	}


$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM enqui  where id = '$d'";

$query = mysqli_query($db,$ql);

$row = mysqli_fetch_assoc($query);
$e=$row['email'];

$dellllll = mysqli_query($db,"DELETE from repl where email = '$e'");

$delll = mysqli_query($db,"DELETE from enqui where id = '$d'");



//error_reporting(E_ERROR | E_PARSE);

header('location:enq.php?okl=5');
exit;
//header('location:arithmetic_aptitude.php');?>


<?php exit; }  ?>


<!--       confirm   -->

<?php if (@$_GET['okl'] == 5)  {?>
    
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
	if(!isset($_SESSION['admin_name'])){
		header('location:../error.php');
		exit;
	}
    header('location:enquiry.php');
    ?>
<?php exit; }  ?>





<?php if (@$_GET['okl'] == 60){?>
<?php include 'sidebar.php';?>


<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Reviews</h4>

</div>
<div class="page-btn">


</div>

</div>

</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Enquiry</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 



if (isset($_POST['sub'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	
	
    

        $tp = $_POST['topic'];
        $ro = $_POST['email'];

        date_default_timezone_set('Asia/Kolkata');
        $date = date('m/d/Y h:i:s a', time());

        $qil = "INSERT INTO repl (email,descr,date) VALUES ('$ro','$tp','$date')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM repl';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="enquiry.php"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 

				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">

                    <label for="fname"><strong>Email</strong></label>
                    <input class="form-control" type="text" id="Email" name="email" placeholder="Learners's Email" required><br>

						<label><strong>Your Reply</strong></label>
                        <textarea name="topic" rows="5000" cols="4000" placeholder="Reply"></textarea>
						 
						
					</div>
					<input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3">
					
				</form>
				</div>
	




</tbody>
</table>
</div>
</div>
</div>
</div>
</div>









<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">

</div>
</div>
<div class="wordset">
<ul>

</ul>
</div>
</div>

<div class="card" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Name">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<input type="text" placeholder="Enter Reference No">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<select class="select">
<option>Completed</option>
<option>Paid</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<a class="btn btn-filters ms-auto"><img src="../assets/img/icons/search-whites.svg" alt="img"></a>
</div>
</div>
</div>
</div>
</div>

<div class="table-responsive">

<?php

//echo "" .$id;
$i=$_GET['user'];
$o=$_GET['id'];
$query = "SELECT * FROM rnotice where user='$i' AND notice_id='$o'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		if(mysqli_num_rows($result) ==0){
			echo '<h4 style="text-align:center;">No Reviews Available!</h4>';
		}
		if(mysqli_num_rows($result) !=0){
		  ?><div class="card" style="font-weight:bold;"><div class="card-body">
		 <div class="card-body" style="text-align:center;"><h4 style="font-weight:bold;">Review Of The Uploaded Resume</h4></div><hr><?php
            }while ($row = mysqli_fetch_assoc($result)) {
                               
								 
              
                         $mark=explode(".",$row['Description']);
								 foreach($mark as $out){
									echo $out."<br/>"; } ?></div>
								
								<?php }?>
								</div>


</div>
</div>
</div>




</div>
</div>
</div>


<?php   include 'footer.php'   ?>
<?php exit; } ?>




<!--       Delete Topic    -->

<?php if (@$_GET['okl'] == 61)  {?>


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
    if(!isset($_SESSION['admin_name'])){
		header('location:../error.php');
		exit;
	}


$d=$_GET['id'];
$pl=$_GET['user'];
//echo "" .$d;

$ql = "SELECT * FROM rnotice  where notice_id = '$d'";

$query = mysqli_query($db,$ql);

$row = mysqli_fetch_assoc($query);
$e=$row['user'];

$dellllll = mysqli_query($db,"DELETE from rnotice where notice_id = '$d'");



$pl=$_GET['user'];
//error_reporting(E_ERROR | E_PARSE);

header('location:enq.php?okl=62 &user='.$_GET['user'].'');
exit;
//header('location:arithmetic_aptitude.php');?>


<?php exit; }  ?>


<!--       confirm   -->

<?php if (@$_GET['okl'] == 62)  {?>
    
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
	if(!isset($_SESSION['admin_name'])){
		header('location:../error.php');
		exit;
	}
	$pl=$_GET['user'];
    header('location:user-review-resume.php?user='.$_GET['user'].'');
    ?>
<?php exit; }  ?>


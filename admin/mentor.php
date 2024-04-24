
<!--mentor-->
<?php if(@$_GET['act']==0) {?>

	<?php

    include '../connection.php' ;

    $d=$_GET['user'];

    $qq = "UPDATE `users` SET `quiz`='1' where username='$d'";

    $queryy = mysqli_query($db,$qq);

    echo ' <script>window.location="ment.php"</script>'; 
    
?>
<?php exit; }  ?>


<!--mentor-->
<?php if(@$_GET['act']==1) {?>

    <?php

include '../connection.php' ;

$d=$_GET['user'];

$qq = "UPDATE `users` SET `quiz`='0' where username='$d'";

$queryy = mysqli_query($db,$qq);

echo ' <script>window.location="ment.php"</script>'; 

?>
<?php exit; }  ?>


<!--mentor-->
<?php if(@$_GET['act']==2) {?>

<?php

include '../connection.php' ;

$d=$_GET['user'];

$qq = "UPDATE `users` SET `resume`='1' where username='$d'";

$queryy = mysqli_query($db,$qq);

echo ' <script>window.location="ment.php"</script>'; 

?>
<?php exit; }  ?>


<!--mentor-->
<?php if(@$_GET['act']==3) {?>

<?php

include '../connection.php' ;

$d=$_GET['user'];

$qq = "UPDATE `users` SET `resume`='0' where username='$d'";

$queryy = mysqli_query($db,$qq);



echo ' <script>window.location="ment.php"</script>'; 

?>
<?php exit; }  ?>


<!--mentor-->
<?php if(@$_GET['act']==4) {?>

<?php

include '../connection.php' ;

$d=$_GET['user'];

$qq = "UPDATE `users` SET `interview`='1' where username='$d'";

$queryy = mysqli_query($db,$qq);

echo ' <script>window.location="ment.php"</script>'; 

?>
<?php exit; }  ?>


<!--mentor-->
<?php if(@$_GET['act']==5) {?>

<?php

include '../connection.php' ;

$d=$_GET['user'];

$qq = "UPDATE `users` SET `interview`='0' where username='$d'";

$queryy = mysqli_query($db,$qq);



echo ' <script>window.location="ment.php"</script>'; 

?>
<?php exit; }  ?>



<!--mentor-->
<?php if(@$_GET['act']==6) {?>

<?php

include '../connection.php' ;

$d=$_GET['user'];

$qq = "UPDATE `users` SET `notes`='1' where username='$d'";

$queryy = mysqli_query($db,$qq);

echo ' <script>window.location="ment.php"</script>'; 

?>
<?php exit; }  ?>


<!--mentor-->
<?php if(@$_GET['act']==7) {?>

<?php

include '../connection.php' ;

$d=$_GET['user'];

$qq = "UPDATE `users` SET `notes`='0' where username='$d'";

$queryy = mysqli_query($db,$qq);



echo ' <script>window.location="ment.php"</script>'; 

?>
<?php exit; }  ?>



<!--mentor-->
<?php if(@$_GET['act']==8) {?>

<?php

include '../connection.php' ;

$d=$_GET['user'];

$qq = "UPDATE `users` SET `help`='1' where username='$d'";

$queryy = mysqli_query($db,$qq);

echo ' <script>window.location="ment.php"</script>'; 

?>
<?php exit; }  ?>


<!--mentor-->
<?php if(@$_GET['act']==9) {?>

<?php

include '../connection.php' ;

$d=$_GET['user'];

$qq = "UPDATE `users` SET `help`='0' where username='$d'";

$queryy = mysqli_query($db,$qq);



echo ' <script>window.location="ment.php"</script>'; 

?>
<?php exit; }  ?>



<?php if(@$_GET['act']==10) {?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Mentor Management</h4>

</div>
<div class="page-btn">
<a href="mentor.php?act=12" class="btn btn-added"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Mentor</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Show Payments</h5>
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
        $qil = "INSERT INTO topic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM topic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic_aptitude.php"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add New Topic</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
						 <input type="text" name="topic" class="form-control" required>
						
					</div>
					<input type="submit" name="sub" value="Upload"  class="btn btn-success ml-3">
					
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
<a class="btn-filter" >
<img src="../assets/img/icons/filter.svg" alt="img">
<span><img src="../assets/img/icons/closes.svg" alt="img"></span>
</a>
</div>
<div class="search-input">
<a class="btn btn-searchset"><img src="../assets/img/icons/search-white.svg" alt="img"></a>
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
<table class="table  datanew">
<thead>
<tr>

<th class="col-md-1">sl no.</th>
<th class="col-md-3">Name</th>
<th class="col-md-1">Action</th>
</tr>
</thead>
<tbody>
<?php
//ranking start


    
$query = "SELECT * FROM users WHERE user_type='mentor'";
$result = mysqli_query($db, $query) or die (mysqli_error($db));
$c = 1;
    while ($row = mysqli_fetch_assoc($result)) {
                        
        echo '<tr>';
        echo '<td>'. $c++ .'</td>';
        echo '<td>'. $row['username'].'</td>';
        echo '<td><b><a id="'.$row['email'] . '" onClick="getId(this)" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Remove</b></span></a></b></td>';
        echo '</tr> ';
                }$c=0; 
            
 
?>
<script>
     function getId(a)
     {
        hi = a.id
        Swal.fire({
        
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'mentor.php?act=11 &id='+hi,
          fire(
            'success',

          )
        
          
        }
       
      })
     }
</script>



</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>


<?php include 'footer.php' ; ?>

<?php exit; }  ?>


<?php if(@$_GET['act']==11) {?>
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

$ql = "SELECT * FROM users";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from users where email = '$d'");
$dellllll = mysqli_query($db,"DELETE from history where email = '$d'");
$del = mysqli_query($db,"DELETE from rnotice where user = '$d'");

//error_reporting(E_ERROR | E_PARSE);

header('location:mentor.php?act=10');
exit;
//header('location:arithmetic_aptitude.php');?>

<?php exit; }  ?>

<?php if(@$_GET['act']==12) {?>
    <?php include 'sidebar.php';?>


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add Mentor</h4>
            </div>
        </div>

        <div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Topic</h5>
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
                                $us = $_POST['username'];
                                $em = $_POST['email'];
                                $ps = md5($_POST['pass']);
                                $cps = md5($_POST['cpass']);
                                   
                                $select = " SELECT * FROM users WHERE email = '$em' && username = '$us' ";

                                $result = mysqli_query($db, $select);
                             
                                if(mysqli_num_rows($result) > 0){
                             
                                    echo ' <script>alert("User/Email Already Exits");</script>';
                             
                                }else{
                             
                                   if($cps != $ps){
                                    echo ' <script>alert("Password does not match");</script>';
                                   }else{



                                    $qil = mysqli_query($db,"INSERT INTO `users`(`username`, `password`, `user_type`, `email`) VALUES ('$us','$ps','mentor','$em')");
                                   
    
                                    $query = 'SELECT * FROM users';
                                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
    
                                    while ($row = mysqli_fetch_assoc($result)) { 
                                    echo ' <script>window.location="mentor.php?act=10"</script>';}
                                   }
                                }
                            }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group" >
                        
                                <label for="fname"><strong>Username</strong></label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Enter Name" required><br>

                                <label for="email"><strong>Email</strong></label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email" required><br>
                        
                                <label for="pass"><strong>Password</strong></label>
                                <input class="form-control" type="password" id="email" name="pass" placeholder="••••••••" required><br>
                        
                                <label for="cpass"><strong>Confirm Password</strong></label>
                                <input class="form-control" type="password" id="email" name="cpass" placeholder="••••••••" required> 
                    
                            </div>
                            <input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3">
                        </form> 
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?php include 'footer.php';?>
<?php exit; }  ?>


<?php if(@$_GET['act']==13) {?>
    <?php include 'sidebar.php';?>


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add User</h4>
            </div>
        </div>

        <div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Topic</h5>
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
                                $us = $_POST['username'];
                                $em = $_POST['email'];
                                $ps = md5($_POST['pass']);
                                $cps = md5($_POST['cpass']);
                                   
                                $select = " SELECT * FROM users WHERE email = '$em' && username = '$us' ";

                                $result = mysqli_query($db, $select);
                             
                                if(mysqli_num_rows($result) > 0){
                             
                                    echo ' <script>alert("Username/Email Already Exits");</script>';
                             
                                }else{
                             
                                   if($cps != $ps){
                                    echo ' <script>alert("Password does not match");</script>';
                                   }else{



                                    $qil = mysqli_query($db,"INSERT INTO `users`(`username`, `password`, `user_type`, `email`) VALUES ('$us','$ps','user','$em')");
                                   
    
                                    $query = 'SELECT * FROM users';
                                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
    
                                    while ($row = mysqli_fetch_assoc($result)) { 
                                    echo ' <script>window.location="userman.php"</script>';}
                                   }
                                }
                            }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group" >
                        
                                <label for="fname"><strong>Username</strong></label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Enter Name" required><br>

                                <label for="email"><strong>Email</strong></label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email" required><br>
                        
                                <label for="pass"><strong>Password</strong></label>
                                <input class="form-control" type="password" id="email" name="pass" placeholder="••••••••" required><br>
                        
                                <label for="cpass"><strong>Confirm Password</strong></label>
                                <input class="form-control" type="password" id="email" name="cpass" placeholder="••••••••" required> 
                    
                            </div>
                            <input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3">
                        </form> 
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?php include 'footer.php';?>
<?php exit; }  ?>
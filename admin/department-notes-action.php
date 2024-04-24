<!--     mechanical-desc   -->
<?php if (@$_GET['dep'] == 0){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];       
 echo '<a href="data-desc.php?sl=0 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Detail</h5>
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
        $r=$_GET['id'];
        $qil = "INSERT INTO mechtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM mechtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=0"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Detail</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
                        <textarea name="topic" rows="5000" cols="4000" placeholder="Description"></textarea>
						 
						
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

<div class="card">
    <div class="card-body">
<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM mechtode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>
</div>
					</div>


<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     mechanical-edit-topic   -->
<?php if (@$_GET['dep'] == 1){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Edit Topic</h4>

</div>
<div class="page-btn">
<a ></a>
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
<table class="table">
<thead>
<tr>

<th class="col-md-1"></th>
<th lass="col-md-6"></th>

<th class="text-center col-md-1"></th>
</tr>
</thead>
<tbody>

<?php 



if (isset($_POST['sub'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	
	
    
    $id=$_GET['id'];
        $tp = $_POST['topic'];
        $qil = "UPDATE `mechtopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM mechtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=0"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Edit Topic</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
						 <input type="text" name="topic" class="form-control" required>
						
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
</div>




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     mechanical-notes   -->
<?php if (@$_GET['dep'] == 2){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM mechpdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment" >  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload New Note</a>'; ?>

</div>
</div>




<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Upload Note</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO mechpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM mechtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=0"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a Note to upload..!";
}
}
?>




				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM mechtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=2 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM mechpdfa where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		$c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=6 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=7 &id='+hi,
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




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     mechanical-video   -->
<?php if (@$_GET['dep'] == 3){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM mechnote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment">  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload a New Video</a>'; ?>

</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Video</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 
if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO mechnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM mechtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=0"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM mechtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=3 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM mechnote where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=8 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=9 &id='+hi,
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



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     mechanical-delete-topic   -->
<?php if (@$_GET['dep'] == 4){?>
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

    $q = "SELECT * FROM mechtopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM mechnote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from mechpdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from mechtode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from mechtopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from mechnote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=5');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--     mechanical-confirm  -->
<?php if (@$_GET['dep'] == 5){?>

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
    header('location:department-notes.php?d=0');
    ?>



<?php exit; }  ?>

<!--     mechanical-pdf-notes   -->
<?php if (@$_GET['dep'] == 6){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">



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



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO mechpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM mechtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=0"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM mechtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=6 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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




<div class="container mt-3 mb-3">
		<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM mechpdfa where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM mechpdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

					
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" 
       
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from mechpdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='mechanical-del-pdf.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     mechanical-del-pdf   -->
<?php if (@$_GET['dep'] == 7){?>
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

    $q = "SELECT * FROM mechpdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from mechpdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from mechpdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=5');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--     mechanical-view-video   -->
<?php if (@$_GET['dep'] == 8){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Video</h4>

</div>
<div class="page-btn">



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



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO mechnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM mechtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=0"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM mechtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=8 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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







<div class="container mt-3 mb-3">
<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM mechnote where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM mechnote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

					

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from mechnote where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

//echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='delete1.php?id=".$data['id']."'>" ?>          <!-- <img src="../assets/img/icons/delete.svg" alt="svg">--><?php  " </a></td><tr>" ?>


		

		<span class="close"></span>
	</div>

	<script>
		const button = document.querySelector("button");
		const close = document.querySelector(".close");
		const trailer = document.querySelector(".trailer");
		const video = document.querySelector("video");

		button.addEventListener('click', ()=>{
			trailer.style.visibility = "visible";
			trailer.style.opacity = 1;
		});

		close.addEventListener('click', ()=>{
			trailer.style.visibility = "hidden";
			trailer.style.opacity = 0;

			video.pause();
			video.currentTime = 0;
		});
	</script>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     mechanical-dlt-video   -->
<?php if (@$_GET['dep'] == 9){?>
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

    $q = "SELECT * FROM mechnote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from mechnote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from mechnote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=5');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--     civil-desc   -->
<?php if (@$_GET['dep'] == 10){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];       
 echo '<a href="data-desc.php?sl=1 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Detail</h5>
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
        $r=$_GET['id'];
        $qil = "INSERT INTO civiltode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM civiltode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=1"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Detail</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
                        <textarea name="topic" rows="5000" cols="4000" placeholder="Description"></textarea>
						 
						
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


<div class="card">
    <div class="card-body">
<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM civiltode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>
</div>
					</div>





<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     civil-edit-topic   -->
<?php if (@$_GET['dep'] == 11){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Edit Topic</h4>

</div>
<div class="page-btn">
<a ></a>
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
<table class="table">
<thead>
<tr>

<th class="col-md-1"></th>
<th lass="col-md-6"></th>

<th class="text-center col-md-1"></th>
</tr>
</thead>
<tbody>

<?php 



if (isset($_POST['sub'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	
	
    
    $id=$_GET['id'];
        $tp = $_POST['topic'];
        $qil = "UPDATE `civiltopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM civiltopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=1"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Edit Topic</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
						 <input type="text" name="topic" class="form-control" required>
						
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
</div>




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     civil-notes   -->
<?php if (@$_GET['dep'] == 12){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM civilpdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment" >  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload New Note</a>'; ?>

</div>
</div>




<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Upload Note</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO civilpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM civiltopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=1"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a Note to upload..!";
}
}
?>




				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM civiltopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=12 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM civilpdfa where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		$c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=16 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=17 &id='+hi,
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



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     civil-video   -->
<?php if (@$_GET['dep'] == 13){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM civilnote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment">  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload a New Video</a>'; ?>

</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Video</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 
if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO civilnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM civiltopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=1"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM civiltopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=13 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM civilnote where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=18 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=19 &id='+hi,
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




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     civil-delete-topic   -->
<?php if (@$_GET['dep'] == 14){?>
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

    $q = "SELECT * FROM civiltopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM civilnote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from civilpdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from civiltode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from civiltopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from civilnote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=15');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--     civil-confirm  -->
<?php if (@$_GET['dep'] == 15){?>

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

    header('location:department-notes.php?d=1');
    ?>



<?php exit; }  ?>

<!--     civil-pdf-notes   -->
<?php if (@$_GET['dep'] == 16){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">



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



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO civilpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM civiltopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=1"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM civiltopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=16 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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




<div class="container mt-3 mb-3">
		<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM civilpdfa where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM civilpdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style="
       
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from civilpdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='civil-del-pdf.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     civil-del-pdf   -->
<?php if (@$_GET['dep'] == 17){?>
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


    $q = "SELECT * FROM civilpdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from civilpdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from civilpdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=15');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--     civil-view-video   -->
<?php if (@$_GET['dep'] == 18){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Video</h4>

</div>
<div class="page-btn">



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



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO civilnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM civiltopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=1"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM civiltopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=18 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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







<div class="container mt-3 mb-3">
<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM civilnote where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM civilnote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

					

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from civilnote where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

//echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='delete1.php?id=".$data['id']."'>" ?>          <!-- <img src="../assets/img/icons/delete.svg" alt="svg">--><?php  " </a></td><tr>" ?>


		

		<span class="close"></span>
	</div>

	<script>
		const button = document.querySelector("button");
		const close = document.querySelector(".close");
		const trailer = document.querySelector(".trailer");
		const video = document.querySelector("video");

		button.addEventListener('click', ()=>{
			trailer.style.visibility = "visible";
			trailer.style.opacity = 1;
		});

		close.addEventListener('click', ()=>{
			trailer.style.visibility = "hidden";
			trailer.style.opacity = 0;

			video.pause();
			video.currentTime = 0;
		});
	</script>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     civil-dlt-video   -->
<?php if (@$_GET['dep'] == 19){?>
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

    $q = "SELECT * FROM civilnote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from civilnote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from civilnote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=15');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--     ece-desc   -->
<?php if (@$_GET['dep'] == 20){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];       
 echo '<a href="data-desc.php?sl=2 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Detail</h5>
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
        $r=$_GET['id'];
        $qil = "INSERT INTO ecetode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM ecetode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=2"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add New Topic</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
                        <textarea name="topic" rows="5000" cols="4000" placeholder="Description"></textarea>
						 
						
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



<div class="card">
    <div class="card-body">
<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM ecetode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>
</div>
					</div>




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     ece-edit-topic   -->
<?php if (@$_GET['dep'] == 21){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Edit Topic</h4>

</div>
<div class="page-btn">
<a ></a>
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
<table class="table">
<thead>
<tr>

<th class="col-md-1"></th>
<th lass="col-md-6"></th>

<th class="text-center col-md-1"></th>
</tr>
</thead>
<tbody>

<?php 



if (isset($_POST['sub'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	
	
    
    $id=$_GET['id'];
        $tp = $_POST['topic'];
        $qil = "UPDATE `ecetopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM ecetopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=2"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Edit Topic</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
						 <input type="text" name="topic" class="form-control" required>
						
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
</div>







<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     ece-notes   -->
<?php if (@$_GET['dep'] == 22){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM lrpdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment" >  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload New Note</a>'; ?>

</div>
</div>




<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Upload Note</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO ecepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM ecetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=2"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a Note to upload..!";
}
}
?>




				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM ecetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=22 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM ecepdfa where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		$c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=26 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=27 &id='+hi,
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




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     ece-video   -->
<?php if (@$_GET['dep'] == 23){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM ecenote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment">  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload a New Video</a>'; ?>

</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Video</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 
if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO ecenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM ecetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=2"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM ecetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=23 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM ecenote where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=28 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=29 &id='+hi,
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




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     ece-delete-topic   -->
<?php if (@$_GET['dep'] == 24){?>
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

    $q = "SELECT * FROM ecetopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM ecenote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from ecepdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from ecetode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from ecetopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from ecenote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=25');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--     ece-confirm  -->
<?php if (@$_GET['dep'] == 25){?>

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
    header('location:department-notes.php?d=2');
    ?>



<?php exit; }  ?>

<!--     ece-pdf-notes   -->
<?php if (@$_GET['dep'] == 26){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">



</div>
</div>




<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Note</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO ecepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM ecetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=2"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM ecetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=26 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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




<div class="container mt-3 mb-3">
		<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM ecepdfa where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM ecepdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

					
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style="
       
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from ecepdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='ece-del-pdf.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>


<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     ece-del-pdf   -->
<?php if (@$_GET['dep'] == 27){?>
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

    $q = "SELECT * FROM ecepdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from ecepdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from ecepdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=25');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--     ece-view-video   -->
<?php if (@$_GET['dep'] == 28){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Video</h4>

</div>
<div class="page-btn">



</div>
</div>




<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Video</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO ecenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM ecetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=2"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM ecetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=28 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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







<div class="container mt-3 mb-3">
<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM ecenote where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM ecenote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from ecenote where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

//echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='delete1.php?id=".$data['id']."'>" ?>          <!-- <img src="../assets/img/icons/delete.svg" alt="svg">--><?php  " </a></td><tr>" ?>


		

		<span class="close"></span>
	</div>

	<script>
		const button = document.querySelector("button");
		const close = document.querySelector(".close");
		const trailer = document.querySelector(".trailer");
		const video = document.querySelector("video");

		button.addEventListener('click', ()=>{
			trailer.style.visibility = "visible";
			trailer.style.opacity = 1;
		});

		close.addEventListener('click', ()=>{
			trailer.style.visibility = "hidden";
			trailer.style.opacity = 0;

			video.pause();
			video.currentTime = 0;
		});
	</script>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     ece-dlt-video   -->
<?php if (@$_GET['dep'] == 29){?>
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

    $q = "SELECT * FROM ecenote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from ecenote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from ecenote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=25');
exit;
//header('location:arithmetic_aptitude.php');?>

    

<?php exit; }  ?>

<!--     eee-desc   -->
<?php if (@$_GET['dep'] == 30){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];       
 echo '<a href="data-desc.php?sl=3 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Detail</h5>
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
        $r=$_GET['id'];
        $qil = "INSERT INTO eeetode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM eeetode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=3"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add New Topic</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
                        <textarea name="topic" rows="5000" cols="4000" placeholder="Description"></textarea>
						 
						
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



<div class="card">
    <div class="card-body">
<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM eeetode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>
</div>
					</div>






<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     eee-edit-topic   -->
<?php if (@$_GET['dep'] == 31){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Edit Topic</h4>

</div>
<div class="page-btn">
<a ></a>
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
<table class="table">
<thead>
<tr>

<th class="col-md-1"></th>
<th lass="col-md-6"></th>

<th class="text-center col-md-1"></th>
</tr>
</thead>
<tbody>

<?php 



if (isset($_POST['sub'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	
	
    
    $id=$_GET['id'];
        $tp = $_POST['topic'];
        $qil = "UPDATE `eeetopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM eeetopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=3"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Edit Topic</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
						 <input type="text" name="topic" class="form-control" required>
						
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
</div>





<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     eee-notes   -->
<?php if (@$_GET['dep'] == 32){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM eeepdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment" >  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload New Note</a>'; ?>

</div>
</div>




<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Upload Note</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO eeepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM eeetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=3"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a Note to upload..!";
}
}
?>




				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM eeetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=32 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM eeepdfa where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		$c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=36 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=37 &id='+hi,
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




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     eee-video   -->
<?php if (@$_GET['dep'] == 33){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM eeenote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment">  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload a New Video</a>'; ?>

</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Video</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 
if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO eeenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM eeetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=3"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM eeetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=33 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM eeenote where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=38 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=39 &id='+hi,
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





<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     eee-delete-topic   -->
<?php if (@$_GET['dep'] == 34){?>
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

    $q = "SELECT * FROM eeetopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM eeenote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from eeepdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from eeetode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from eeetopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from eeenote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=35');
exit;
//header('location:arithmetic_aptitude.php');?>

<?php exit; }  ?>

<!--     eee-confirm  -->
<?php if (@$_GET['dep'] == 35){?>

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
    header('location:department-notes.php?d=3');
    ?>

<?php exit; }  ?>

<!--     eee-pdf-notes   -->
<?php if (@$_GET['dep'] == 36){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">



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



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO eeepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM eeetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=3"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM eeetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=36 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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




<div class="container mt-3 mb-3">
		<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM eeepdfa where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM eeepdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

					
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style="
       
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from eeepdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='logical-del-pdf.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     eee-del-pdf   -->
<?php if (@$_GET['dep'] == 37){?>
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
    $q = "SELECT * FROM eeepdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from eeepdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from eeepdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=35');
exit;
//header('location:arithmetic_aptitude.php');?>

<?php exit; }  ?>

<!--     eee-view-video   -->
<?php if (@$_GET['dep'] == 38){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Video</h4>

</div>
<div class="page-btn">



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



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO eeenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM eeetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=3"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM eeetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=38 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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







<div class="container mt-3 mb-3">
<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM eeenote where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM eeenote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from eeenote where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

//echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='delete1.php?id=".$data['id']."'>" ?>          <!-- <img src="../assets/img/icons/delete.svg" alt="svg">--><?php  " </a></td><tr>" ?>


		

		<span class="close"></span>
	</div>

	<script>
		const button = document.querySelector("button");
		const close = document.querySelector(".close");
		const trailer = document.querySelector(".trailer");
		const video = document.querySelector("video");

		button.addEventListener('click', ()=>{
			trailer.style.visibility = "visible";
			trailer.style.opacity = 1;
		});

		close.addEventListener('click', ()=>{
			trailer.style.visibility = "hidden";
			trailer.style.opacity = 0;

			video.pause();
			video.currentTime = 0;
		});
	</script>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     eee-dlt-video   -->
<?php if (@$_GET['dep'] == 39){?>
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

    $q = "SELECT * FROM eeenote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from eeenote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from eeenote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=35');
exit;
//header('location:arithmetic_aptitude.php');?>

<?php exit; }  ?>

<!--     cse-desc   -->
<?php if (@$_GET['dep'] == 40){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];       
 echo '<a href="data-desc.php?sl=4 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Detail</h5>
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
        $r=$_GET['id'];
        $qil = "INSERT INTO csetode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM csetode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=4"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Detail</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
                        <textarea name="topic" rows="5000" cols="4000" placeholder="Description"></textarea>
						 
						
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



<div class="card">
    <div class="card-body">
<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM csetode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>
</div>
					</div>




<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     cse-edit-topic   -->
<?php if (@$_GET['dep'] == 41){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Edit Topic</h4>

</div>
<div class="page-btn">
<a ></a>
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
<table class="table">
<thead>
<tr>

<th class="col-md-1"></th>
<th lass="col-md-6"></th>

<th class="text-center col-md-1"></th>
</tr>
</thead>
<tbody>

<?php 



if (isset($_POST['sub'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	
	
    
    $id=$_GET['id'];
        $tp = $_POST['topic'];
        $qil = "UPDATE `csetopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM csetopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=4"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Edit Topic</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
						 <input type="text" name="topic" class="form-control" required>
						
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
</div>


<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     cse-notes   -->
<?php if (@$_GET['dep'] == 42){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM csepdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment" >  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload New Note</a>'; ?>

</div>
</div>




<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Upload Note</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO csepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM csetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=4"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a Note to upload..!";
}
}
?>




				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM csetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=42 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM csepdfa where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		$c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=46 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=47 &id='+hi,
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



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     cse-video   -->
<?php if (@$_GET['dep'] == 43){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM csenote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment">  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload a New Video</a>'; ?>

</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Video</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 
if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO csenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM csetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=4"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM csetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=43 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$id = $_GET['id'];
//echo "" .$id;
$query = "SELECT * FROM csenote where sl_no='$id'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="department-notes-action.php?dep=48 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
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
            window.location.href = 'department-notes-action.php?dep=49 &id='+hi,
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


<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     cse-delete-topic   -->
<?php if (@$_GET['dep'] == 44){?>
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

    $q = "SELECT * FROM csetopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM csenote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from csepdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from csetode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from csetopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from csenote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=45');
exit;
//header('location:arithmetic_aptitude.php');?>

<?php exit; }  ?>

<!--     cse-confirm  -->
<?php if (@$_GET['dep'] == 45){?>

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
    header('location:department-notes.php?d=4');
    ?>

<?php exit; }  ?>

<!--     cse-pdf-notes   -->
<?php if (@$_GET['dep'] == 46){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Notes</h4>
<h6>View Topic Notes</h6>




</div>



<div class="page-btn">



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



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO csepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM csetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=4"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM csetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=46 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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




<div class="container mt-3 mb-3">
		<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM csepdfa where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM csepdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

		
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" 
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from csepdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='cse-del-pdf.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     cse-del-pdf   -->
<?php if (@$_GET['dep'] == 47){?>
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

    $q = "SELECT * FROM csepdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from csepdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from csepdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=45');
exit;
//header('location:arithmetic_aptitude.php');?>

<?php exit; }  ?>

<!--     cse-view-video   -->
<?php if (@$_GET['dep'] == 48){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Video</h4>

</div>
<div class="page-btn">



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



if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$id = $_GET['id'];
	
	
	$file_destination = "../upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO csenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM csetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="department-notes.php?d=4"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a video to upload..!";
}
}
?>



<h1 class="text-center mb-5"><b>Upload Video into the Database Using Php</b></h1>
				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM csetopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="department-notes-action.php?dep=48 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php  } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php  } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php  } ?>
					<input type="submit" name="upload" value="Upload"  class="btn btn-success ml-3">
					
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







<div class="container mt-3 mb-3">
<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM csenote where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM csenote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from csenote where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

//echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='delete1.php?id=".$data['id']."'>" ?>          <!-- <img src="../assets/img/icons/delete.svg" alt="svg">--><?php  " </a></td><tr>" ?>


		

		<span class="close"></span>
	</div>

	<script>
		const button = document.querySelector("button");
		const close = document.querySelector(".close");
		const trailer = document.querySelector(".trailer");
		const video = document.querySelector("video");

		button.addEventListener('click', ()=>{
			trailer.style.visibility = "visible";
			trailer.style.opacity = 1;
		});

		close.addEventListener('click', ()=>{
			trailer.style.visibility = "hidden";
			trailer.style.opacity = 0;

			video.pause();
			video.currentTime = 0;
		});
	</script>











<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you sure to logout?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



<!--<a href="delete.php?id=<?php echo $data['id']; ?>"><img src="../assets/img/icons/delete.svg" alt="svg"></a>-->











<?php  
 //$k=$data['id'];
 //echo "" .$k;
 }  ?>
</p>
					</div>

				<?php }
?>
</div>
				</div>


		<script>	
		windows.addEventListener('load',function(){
		});
		function deletecontent(){
		
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
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
		}
</script>



</div>
</div>
</div>
</div>

<div class="table-responsive">

</div>
</div>
</div>

</div>
</div>
</div>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     cse-dlt-video   -->
<?php if (@$_GET['dep'] == 49){?>
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

    $q = "SELECT * FROM csenote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from csenote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from csenote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:department-notes-action.php?dep=44');
exit;
//header('location:arithmetic_aptitude.php');?>

<?php exit; }  ?>
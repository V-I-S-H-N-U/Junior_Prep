<!--       user side    --->
<!--       arithemetic-aptitude   -->

<?php if (@$_GET['ap'] == 0)  {?>
    <?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Arithmetic Aptitude</h4>

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
echo ' <script>window.location="arithmetic_aptitude.php?user='.$_GET['user'].'"</script>';}
       
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$query = 'SELECT * FROM topic';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['topic'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="aptitude-notes.php?ap=1 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      
                      <li>
                      <a href="aptitude-notes.php?ap=2 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=3 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                      </ul>
                      </td>
                      ';
                     
                echo '</tr> ';
                        }$c=0; 
                       
?>


</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>


<?php include 'footer.php'; ?>

<?php exit; }  ?>   

<!--       user-desc   -->

<?php if (@$_GET['ap'] == 1)  {?>
<?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

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
        $r=$_GET['id'];
        $qil = "INSERT INTO tode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM tode';
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
                        <textarea name="topic" rows="5000" cols="4000" placeholder="Description"></textarea>
						 
						
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

<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM tode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>    

<!--       user-aptitude-notes   -->

<?php if (@$_GET['ap'] == 2)  {?>
    <?php include 'sidebar.php'; ?>

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
					
 $query = "SELECT * FROM pdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
       ?>
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
	
	$q = "INSERT INTO pdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM topic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic_aptitude.php?user='.$_GET['user'].' "</script>';}?>

	 
	 
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
					
                 $query = "SELECT * FROM topic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="aptitude-notes.php?action=video_lectures & id='.$row['sl_no'] . ' &user='.$_GET['user'].' " method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM pdfa where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=4 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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


<!--       user-trial-video   -->

<?php if (@$_GET['ap'] == 3)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM note where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
        ?>
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
	
	$q = "INSERT INTO note (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM topic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic_aptitude.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM topic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="aptitude-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM note where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=5 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-pdf-note   -->

<?php if (@$_GET['ap'] == 4)  {?>
<?php include 'sidebar.php'; ?>

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
	
	$q = "INSERT INTO pdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM topic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic_aptitude.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM topic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="aptitude-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM pdfa where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <h1><?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM pdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

					
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" ">		
<?php
$records = mysqli_query($db,"select * from pdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='delete.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-yy-video   -->

<?php if (@$_GET['ap'] == 5)  {?>
<?php include 'sidebar.php'; ?>


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
	
	$q = "INSERT INTO note (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM topic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic_aptitude.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM topic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="aptitude-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM note where id='$id'";

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
					
				$q = "SELECT * FROM note where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from note where id ='$o' LIMIT 1"); // fetch data from database

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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-data-interpretation   -->

<?php if (@$_GET['ap'] == 6)  {?>
<?php include 'sidebar.php'; ?>


<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Data Interpretation</h4>

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
        $qil = "INSERT INTO dtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM dtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="data-interpretation.php"</script>';}
       
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$query = 'SELECT * FROM dtopic';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['topic'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="aptitude-notes.php?ap=7 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=8 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=9 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-data-desc   -->

<?php if (@$_GET['ap'] == 7)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

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
        $r=$_GET['id'];
        $qil = "INSERT INTO dtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM dtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="data-interpretation.php"</script>';}
       
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

<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM dtode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>


<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-data-notes   -->

<?php if (@$_GET['ap'] == 8)  {?>
<?php include 'sidebar.php'; ?>


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
					
 $query = "SELECT * FROM dpdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			?>
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
	
	$q = "INSERT INTO dpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM dtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="data-interpretation.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM dtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="data-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM dpdfa where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=10 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-data-video   -->

<?php if (@$_GET['ap'] == 9)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM dnote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
    ?>
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
	
	$q = "INSERT INTO dnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM dtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="data-interpretation.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM dtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="data-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM dnote where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=11 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-data-pdf-note   -->

<?php if (@$_GET['ap'] == 10)  {?>
<?php include 'sidebar.php'; ?>

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
	
	$q = "INSERT INTO dpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM dtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="data-interpretation.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM dtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="data-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM dpdfa where id='$id'";

        $query = mysqli_query($db,$q);
        
        while($row=mysqli_fetch_array($query)) { 

            $name = $row['name'];
            $o = $row['id']
            ?>
        
        
        <h1><?php echo '' .$name ; }?></b></h1>
		<hr/>
				
		<div class="row">
				<?php

			    $id = $_GET['id'];
					
				$q = "SELECT * FROM dpdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

					
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" ">		
<?php
$records = mysqli_query($db,"select * from dpdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='delete.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>





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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-data-view-video   -->

<?php if (@$_GET['ap'] == 11)  {?>
<?php include 'sidebar.php'; ?>

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
	
	$q = "INSERT INTO dnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM dtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="data-interpretation.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM dtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="data-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM dnote where id='$id'";

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
					
				$q = "SELECT * FROM dnote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

			

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from dnote where id ='$o' LIMIT 1"); // fetch data from database

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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-verbal-ability   -->

<?php if (@$_GET['ap'] == 12)  {?>
<?php include 'sidebar.php'; ?>


<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Verbal Ability</h4>

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
        $qil = "INSERT INTO vtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM vtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="verbal-ability.php"</script>';}
       
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$query = 'SELECT * FROM vtopic';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['topic'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="aptitude-notes.php?ap=+-13 &id='.$row['sl_no'] . ' &user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=+-14 &id='.$row['sl_no'] . ' &user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=+-15 &id='.$row['sl_no'] . ' &user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0; 
?>


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

<!--       user-verbal-desc   -->

<?php if (@$_GET['ap'] == +-13)  {?>
<?php include 'sidebar.php'; ?>


<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

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
        $r=$_GET['id'];
        $qil = "INSERT INTO vtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM vtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="verbal-ability.php"</script>';}
       
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

<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM vtode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-verbal-notes   -->

<?php if (@$_GET['ap'] == +-14)  {?>
<?php include 'sidebar.php'; ?>

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
					
 $query = "SELECT * FROM vpdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
    ?>
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
	
	$q = "INSERT INTO vpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="verbal-ability.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM vtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="verbal-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM vpdfa where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=16 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-verbal-video   -->

<?php if (@$_GET['ap'] == +-15)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM vnote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
       ?>
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
	
	$q = "INSERT INTO vnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="verbal-ability.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM vtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="verbal-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM vnote where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=17 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-verbal-pdf-notes   -->

<?php if (@$_GET['ap'] == 16)  {?>
<?php include 'sidebar.php'; ?>


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
	
	$q = "INSERT INTO vpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="verbal-ability.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM vtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="verbal-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM vpdfa where id='$id'";

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
					
				$q = "SELECT * FROM vpdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

			
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" border: 2px solid black;
       
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from vpdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='verbal-del-pdf.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-verbal-view-video   -->

<?php if (@$_GET['ap'] == 17)  {?>
<?php include 'sidebar.php'; ?>


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
	
	$q = "INSERT INTO vnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="verbal-ability.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM vtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="verbal-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM vnote where id='$id'";

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
					
				$q = "SELECT * FROM vnote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from vnote where id ='$o' LIMIT 1"); // fetch data from database

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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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


<!--       user-logical-reasoning   -->

<?php if (@$_GET['ap'] == 18)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Logical Reasoning</h4>

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
        $qil = "INSERT INTO lrtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM lrtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="logical-reasoning.php"</script>';}
       
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$query = 'SELECT * FROM lrtopic';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['topic'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="aptitude-notes.php?ap=19 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=20 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=21 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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


<!--       user-logical-desc   -->

<?php if (@$_GET['ap'] == 19)  {?>
<?php include 'sidebar.php'; ?>


<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

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
        $r=$_GET['id'];
        $qil = "INSERT INTO lrtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM lrtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="logical-reasoning.php"</script>';}
       
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

<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM lrtode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-logical-notes   -->

<?php if (@$_GET['ap'] == 20)  {?>
<?php include 'sidebar.php'; ?>

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
        
					
			
      ?>
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
	
	$q = "INSERT INTO lrpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM lrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="logical-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM lrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="logical-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM lrpdfa where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=22 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-logical-video   -->

<?php if (@$_GET['ap'] == 21)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM lrnote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
       ?>
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
	
	$q = "INSERT INTO lrnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM lrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="logical-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM lrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="logical-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM lrnote where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=23 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-logical-pdf-notes   -->

<?php if (@$_GET['ap'] == 22)  {?>
<?php include 'sidebar.php'; ?>

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
	
	$q = "INSERT INTO lrpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM lrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="logical-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM lrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="logical-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM lrpdfa where id='$id'";

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
					
				$q = "SELECT * FROM lrpdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" border: 2px solid black;
       
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from lrpdfa where id ='$o' LIMIT 1"); // fetch data from database

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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-verbal-view-video   -->

<?php if (@$_GET['ap'] == 23)  {?>
<?php include 'sidebar.php'; ?>

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
	
	$q = "INSERT INTO lrnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM lrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="logical-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM lrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="logical-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM lrnote where id='$id'";

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
					
				$q = "SELECT * FROM lrnote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from lrnote where id ='$o' LIMIT 1"); // fetch data from database

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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-verbal-reasoning   -->

<?php if (@$_GET['ap'] == 24)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Verbal Reasoning</h4>

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
        $qil = "INSERT INTO vrtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM vrtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="verbal-reasoning.php"</script>';}
       
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
$query = 'SELECT * FROM vrtopic';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['topic'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="aptitude-notes.php?ap=25 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=26 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=27 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0; 
?>


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

<!--       user-verbalr-desc   -->

<?php if (@$_GET['ap'] == 25)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

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
        $r=$_GET['id'];
        $qil = "INSERT INTO vrtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM vrtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="verbal-reasoning.php"</script>';}
       
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

<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM vrtode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-verbalr-notes   -->

<?php if (@$_GET['ap'] == 26)  {?>
<?php include 'sidebar.php'; ?>

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
					
 $query = "SELECT * FROM vrpdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
       ?>
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
	
	$q = "INSERT INTO vrpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="verbal-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM vrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="verbalr-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM vrpdfa where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=28 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-verbalr-video   -->

<?php if (@$_GET['ap'] == 27)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM vrnote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
	?>
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
	
	$q = "INSERT INTO vrnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="verbal-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM vrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="verbalr-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM vrnote where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=29 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-verbalr-pdf-note   -->

<?php if (@$_GET['ap'] == 28)  {?>
<?php include 'sidebar.php'; ?>

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
	
	$q = "INSERT INTO vrpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="verbal-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM vrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="verbalr-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM vrpdfa where id='$id'";

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
					
				$q = "SELECT * FROM vrpdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" border: 2px solid black;
       
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from vrpdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='verbalr-del-pdf.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-verbalr-view-video   -->

<?php if (@$_GET['ap'] == 29)  {?>
<?php include 'sidebar.php'; ?>

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
	
	$q = "INSERT INTO vrnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="verbal-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM vrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="verbalr-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM vrnote where id='$id'";

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
					
				$q = "SELECT * FROM vrnote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>


                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from vrnote where id ='$o' LIMIT 1"); // fetch data from database

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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-nverbal-reasoning   -->

<?php if (@$_GET['ap'] == 30)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Nonverbal Reasoning</h4>

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
        $qil = "INSERT INTO nrtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM nrtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="nverbal-reasoning.php"</script>';}
       
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

<th class="col-md-1">Sl No.</th>
<th lass="col-md-6">Topic</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$query = 'SELECT * FROM nrtopic';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['topic'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="aptitude-notes.php?ap=31 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=32 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="aptitude-notes.php?ap=33 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0; 
?>


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

<!--       user-nverbal-desc   -->

<?php if (@$_GET['ap'] == 31)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

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
        $r=$_GET['id'];
        $qil = "INSERT INTO nrtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM nrtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="nverbal-reasoning.php"</script>';}
       
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

<?php
if(true){

$i=$_GET['id'];

$query = "SELECT * FROM nrtode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>





<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-nverbal-notes   -->

<?php if (@$_GET['ap'] == 32)  {?>
<?php include 'sidebar.php'; ?>

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
					
 $query = "SELECT * FROM nrpdfa where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
			
       ?>
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
	
	$q = "INSERT INTO nrpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM nrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="nverbal-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM nrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="nverbal-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM nrpdfa where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=34 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0;
?>


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

<!--       user-nverbal-video   -->

<?php if (@$_GET['ap'] == 33)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>View Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM nrnote where sl_no='$id' LIMIT 1";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        
					
	?>
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
	
	$q = "INSERT INTO nrnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM nrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="nverbal-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM nrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="nverbal-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
$query = "SELECT * FROM nrnote where sl_no='$id'";
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
                      <a href="aptitude-notes.php?ap=35 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      </ul>
                      </td>
                      ';
                echo '</tr> ';
                        }$c=0; 
?>


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

<!--       user-nverbal-pdf-notes   -->

<?php if (@$_GET['ap'] == 34)  {?>
<?php include 'sidebar.php'; ?>

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
	
	$q = "INSERT INTO nrpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM nrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="nverbal-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM nrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="nverbal-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM nrpdfa where id='$id'";

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
					
				$q = "SELECT * FROM nrpdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

					
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" border: 2px solid black;
       
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from nrpdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='nverbal-del-pdf.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

<!--       user-nverbal-view-video   -->

<?php if (@$_GET['ap'] == 35)  {?>
<?php include 'sidebar.php'; ?>

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
	
	$q = "INSERT INTO nrnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM nrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="nverbal-reasoning.php"</script>';}?>
	 
	 
	 
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
					
                 $query = "SELECT * FROM nrtopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="nverbal-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload a Video:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php exit; }  ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php exit; }  ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php exit; }  ?>
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
					
        $q = "SELECT * FROM nrnote where id='$id'";

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
					
				$q = "SELECT * FROM nrnote where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				

                    
						<video width="100%"  controls="true">
							
<source src="<?php echo '../upload/'.$name;?>">
</video><p style="text-align:center;" ><strong></strong><?php
$records = mysqli_query($db,"select * from nrnote where id ='$o' LIMIT 1"); // fetch data from database

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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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
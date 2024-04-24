<!--       user-mechanical-dept   -->

<?php if (@$_GET['dap'] == 0)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Mechanical Department</h4>

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
        $qil = "INSERT INTO mechtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM mechtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php"</script>';}
       
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
$query = 'SELECT * FROM mechtopic';
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
                      <a href="department-notes.php?dap=1 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=2 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=3 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
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

<!--       user-mechanical-desc   -->

<?php if (@$_GET['dap'] == 1)  {?>
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
        $qil = "INSERT INTO mechtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM mechtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="mechanical-dept.php"</script>';}
       
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

$query = "SELECT * FROM mechtode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-mechanical-notes   -->

<?php if (@$_GET['dap'] == 2)  {?>
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
					
 $query = "SELECT * FROM mechpdfa where sl_no='$id' LIMIT 1";
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
	
	$q = "INSERT INTO mechpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM mechtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="mechanical-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="mechanical-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=4 &id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
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

<!--       user-mechanical-video   -->

<?php if (@$_GET['dap'] == 3)  {?>
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
					
 $query = "SELECT * FROM mechnote where sl_no='$id' LIMIT 1";
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
	
	$q = "INSERT INTO mechnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM mechtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="mechanical-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="mechanical-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=5 &id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
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

<!--       user-mechanical-pdf-note   -->

<?php if (@$_GET['dap'] == 4)  {?>
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
	
	$q = "INSERT INTO mechpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM mechtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="mechanical-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="mechanical-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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


						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" border: 2px solid black;
       
       
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

<!--       user-mechanical-view-video   -->

<?php if (@$_GET['dap'] == 5)  {?>
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
	
	$q = "INSERT INTO mechnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM mechtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="mechanical-reasoning.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="mechanical-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

<!--       user-civil-dept   -->

<?php if (@$_GET['dap'] == 6)  {?>
<?php include 'sidebar.php'; ?>


<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Civil Department</h4>

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
        $qil = "INSERT INTO civiltopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM civiltopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="civil-dept.php"</script>';}
       
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
$query = 'SELECT * FROM civiltopic';
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
                      <a href="department-notes.php?dap=7 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=8 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=9 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
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

<!--       user-civil-desc   -->

<?php if (@$_GET['dap'] == 7)  {?>
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
        $qil = "INSERT INTO civiltode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM civiltode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="civil-dept.php"</script>';}
       
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

$query = "SELECT * FROM civiltode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-civil-notes   -->

<?php if (@$_GET['dap'] == 8)  {?>
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
					
 $query = "SELECT * FROM civilpdfa where sl_no='$id' LIMIT 1";
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
	
	$q = "INSERT INTO civilpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM civiltopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="civil-dept.php"</script>';}?>
	 
	 
	 
	 <?php
	}
	else {
		
		$failed = "Something went wrong??";
	}
}
else {

	$msz = "Please select a Note to upload..!";
}}

?>




				<div class="col-lg-8 m-auto">
				<?php
                 $id = $_GET['id'];
					
                 $query = "SELECT * FROM civiltopic where sl_no='$id' LIMIT 1";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="civil-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=10 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
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

<!--       user-civil-video   -->

<?php if (@$_GET['dap'] == 9)  {?>
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
					
 $query = "SELECT * FROM civilnote where sl_no='$id' LIMIT 1";
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
	
	$q = "INSERT INTO civilnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM civiltopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="civil-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="civil-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=11 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
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

<!--       user-civil-pdf-note   -->

<?php if (@$_GET['dap'] == 10)  {?>
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
	
	$q = "INSERT INTO civilpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM civiltopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="civil-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="civil-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

				
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" border: 2px solid black;
       
       
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

<!--       user-civil-view-video   -->

<?php if (@$_GET['dap'] == 11)  {?>
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
	
	$q = "INSERT INTO civilnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM civiltopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="civil-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="civil-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

<!--       user-ece-dept   -->

<?php if (@$_GET['dap'] == 12)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>ECE Department</h4>

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
        $qil = "INSERT INTO ecetopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM ecetopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="ece-dept.php"</script>';}
       
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
$query = 'SELECT * FROM ecetopic';
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
                      <a href="department-notes.php?dap=13 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=14 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=15 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
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

<!--       user-ece-desc   -->

<?php if (@$_GET['dap'] == 13)  {?>
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
        $qil = "INSERT INTO ecetode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM ecetode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="ece-dept.php"</script>';}
       
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

$query = "SELECT * FROM ecetode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-ece-notes   -->

<?php if (@$_GET['dap'] == 14)  {?>
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
	
	$q = "INSERT INTO ecepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM ecetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="ece-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="ece-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=16 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
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

<!--       user-ece-video   -->

<?php if (@$_GET['dap'] == 15)  {?>
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
					
 $query = "SELECT * FROM ecenote where sl_no='$id' LIMIT 1";
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
	
	$q = "INSERT INTO ecenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM ecetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="ece-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="ece-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=17 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
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

<!--       user-ece-pdf-note   -->

<?php if (@$_GET['dap'] == 16)  {?>
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
	
	$q = "INSERT INTO ecepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM ecetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="ece-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="ece-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

		
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" border: 2px solid black;
       
       
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

<!--       user-ece-view-video   -->

<?php if (@$_GET['dap'] == 17)  {?>
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
	
	$q = "INSERT INTO ecenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM ecetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="ece-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="ece-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

<!--       user-eee-dept   -->

<?php if (@$_GET['dap'] == 18)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>EEE Department</h4>

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
        $qil = "INSERT INTO eeetopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM eeetopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="eee-dept.php"</script>';}
       
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
$query = 'SELECT * FROM eeetopic';
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
                      <a href="department-notes.php?dap=19 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=20 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=21 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
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

<!--       user-eee-desc   -->

<?php if (@$_GET['dap'] == 19)  {?>
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
        $qil = "INSERT INTO eeetode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM eeetode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="eee-dept.php"</script>';}
       
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

$query = "SELECT * FROM eeetode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-eee-note   -->

<?php if (@$_GET['dap'] == 20)  {?>
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
					
 $query = "SELECT * FROM eeepdfa where sl_no='$id' LIMIT 1";
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
	
	$q = "INSERT INTO eeepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM eeetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="eee-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="eee-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=22 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
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

<!--       user-eee-video   -->

<?php if (@$_GET['dap'] == 21)  {?>
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
					
 $query = "SELECT * FROM eeenote where sl_no='$id' LIMIT 1";
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
	
	$q = "INSERT INTO eeenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM eeetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="eee-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="eee-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=23 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
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

<!--       user-eee-pdf-note   -->

<?php if (@$_GET['dap'] == 22)  {?>
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
	
	$q = "INSERT INTO eeepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM eeetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="eee-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="eee-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

				
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" border: 2px solid black;
       
       
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

<!--       user-eee-view-video   -->

<?php if (@$_GET['dap'] == 23)  {?>
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
	
	$q = "INSERT INTO eeenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM eeetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="eee-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="eee-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

<!--       user-cse-dept   -->

<?php if (@$_GET['dap'] == 24)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>CSE Department</h4>

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
        $qil = "INSERT INTO csetopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM csetopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="cse-dept.php"</script>';}
       
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
$query = 'SELECT * FROM csetopic';
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
                      <a href="department-notes.php?dap=25 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Details</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=26 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes.php?dap=27 &id='.$row['sl_no'] . '&user='.$_GET['user'].'" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
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

<!--       user-cse-desc   -->

<?php if (@$_GET['dap'] == 25)  {?>
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
        $qil = "INSERT INTO csetode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM csetode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="cse-dept.php"</script>';}
       
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

$query = "SELECT * FROM csetode where sl_no= '$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-cse-notes   -->

<?php if (@$_GET['dap'] == 26)  {?>
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
					
 $query = "SELECT * FROM csepdfa where sl_no='$id' LIMIT 1";
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
	
	$q = "INSERT INTO csepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM csetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="cse-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="cse-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=28 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
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

<!--       user-cse-video   -->

<?php if (@$_GET['dap'] == 27)  {?>
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
					
 $query = "SELECT * FROM csenote where sl_no='$id' LIMIT 1";
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
	
	$q = "INSERT INTO csenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM csetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="cse-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="cse-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="department-notes.php?dap=29 & id='.$row['id'] . '&user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
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

<!--       user-cse-pdf-note   -->

<?php if (@$_GET['dap'] == 28)  {?>
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
	
	$q = "INSERT INTO csepdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM csetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="cse-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="cse-pdf-notes.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

				
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" border: 2px solid black;
       
       
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

<!--       user-cse-view-video   -->

<?php if (@$_GET['dap'] == 29)  {?>
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
	
	$q = "INSERT INTO csenote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM csetopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="cse-dept.php"</script>';}?>
	 
	 
	 
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
				echo '<form   action="cse-view-video.php?action=video_lectures & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
<!--       Topic Details   -->
<?php include 'sidebar.php';?>
    <?php 
    $d=$_SESSION['mentor_name'];
	$qq = "SELECT * from users where username = '$d'";
    $queryy = mysqli_query($db,$qq); 
    $row = mysqli_fetch_array($queryy);
    if ($row['notes'] == 1){

        ?>
<?php if (@$_GET['aran'] == 0)  {?>



<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details </h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];       
 echo '<a href="arithmetic_aptitude.php?pl=0 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Details</h5>
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
       // $qil = "INSERT INTO tode (sl_no,name) VALUES ('$r','$tp')";
        //$run = mysqli_query($db,$qil) or die(mysqli_error());
		$qu1 = mysqli_query($db,"SELECT * FROM tode WHERE sl_no='$i'");
			$row = mysqli_fetch_array($qu1);
			$o = $row['name'];
			if($o == 0){
				    $qil = "INSERT INTO tode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
			}else{
		$query = mysqli_query($db,"UPDATE tode SET `name`='$tp' WHERE sl_no='$r'");
			}
	$query = 'SELECT * FROM tode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=0"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Details</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>

				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
                        <!--<textarea name="topic" rows="5000" cols="4000" placeholder="Description"></textarea>-->
						<textarea name="topic" id="editor1" rows="10" cols="80">
            <?php
			$i=$_GET['id'];
			$qu = mysqli_query($db,"SELECT * FROM tode WHERE sl_no='$i'");
			$row = mysqli_fetch_array($qu);
			error_reporting(E_ERROR | E_PARSE);
			echo '' .$row['name']; ?>
        </textarea>
		<input type="hidden" name="id" value="<?php  $i ?>">
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor1' );
        </script>
						
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

$query = "SELECT * FROM tode where sl_no= '$i'";
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


<!--       Edit Topic   -->

<?php if (@$_GET['aran'] == 1)  {?>




<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Edit Topic </h4>

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
        $qil = "UPDATE `topic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM topic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=0"</script>';}
       
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






<!--       Aptitude notes   -->

<?php if (@$_GET['aran'] == 2)  {?>




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
	
	$q = "INSERT INTO pdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM topic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic-notes.php?a=0"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=2 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=6 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=7 & id='.$row['id'] . '"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
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

<!--       Trail Video   -->

<?php if (@$_GET['aran'] == 3)  {?>





<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM note where sl_no='$id' LIMIT 1";
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
<h5 class="modal-title">Upload Video</h5>
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
   echo ' <script>window.location="arithmetic-notes.php?a=0"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=3 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=8 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=9 & id='.$row['id'] . '"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
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

<!--       Delete Topic    -->

<?php if (@$_GET['aran'] == 4)  {?>


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

    $q = "SELECT * FROM topic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM note";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from pdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from tode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from topic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from note where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=5');
exit;
//header('location:arithmetic_aptitude.php');?>


<?php exit; }  ?>


<!--       confirm   -->

<?php if (@$_GET['aran'] == 5)  {?>
    
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
    header('location:arithmetic-notes.php?a=0');
    ?>
<?php exit; }  ?>



<!--       pdf-notes-1   -->

<?php if (@$_GET['aran'] == 6)  {?>

    

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
   echo ' <script>window.location="arithmetic-notes.php?a=0"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=2 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

<!--       del-pdf   -->

<?php if (@$_GET['aran'] == 7)  {?>

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

    $q = "SELECT * FROM pdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from pdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from pdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=5');
exit;
//header('location:arithmetic_aptitude.php');?>
    

<?php exit; }  ?>




<!--       yy-video   -->

<?php if (@$_GET['aran'] == 8)  {?>
    

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
   echo ' <script>window.location="arithmetic-notes.php?a=0"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=3 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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


<!--       delete1   -->

<?php if (@$_GET['aran'] == 9)  {?>
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

    $q = "SELECT * FROM note";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from note where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from note where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=5');
exit;
//header('location:arithmetic_aptitude.php');?>

<?php exit; }  ?>

<!--       data-desc   -->

<?php if (@$_GET['aran'] == 10)  {?>
    

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];
       
 echo '<a href="arithmetic_aptitude.php?pl=1 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Details</h5>
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




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Details</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Details</strong></label>
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

$query = "SELECT * FROM dtode where sl_no= '$i'";
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

<!--       data-edit-topic   -->

<?php if (@$_GET['aran'] == 11)  {?>

    

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
        $qil = "UPDATE `dtopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM dtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=1"</script>';}
       
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

<!--       data-notes   -->

<?php if (@$_GET['aran'] == 12)  {?>

    
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
	
	$q = "INSERT INTO dpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM dtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic-notes.php?a=1"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=12 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=16 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=17 & id='.$row['id'] . '"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
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

<!--       data-video   -->

<?php if (@$_GET['aran'] == 13)  {?>
    

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Videos</h4>

</div>
<div class="page-btn">

<?php
 $id = $_GET['id'];
					
 $query = "SELECT * FROM dnote where sl_no='$id' LIMIT 1";
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
<h5 class="modal-title">Add Videos</h5>
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
   echo ' <script>window.location="arithmetic-notes.php?a=1"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=13 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=18 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=19 & id='.$row['id'] . '"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
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

<!--       data-delete-topic   -->

<?php if (@$_GET['aran'] == 14)  {?>

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
    $q = "SELECT * FROM dtopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM dnote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from dpdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from dtode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from dtopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from dnote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=15');
exit;
//header('location:arithmetic_aptitude.php');?>


<?php exit; }  ?>

<!--       data-confirm   -->

<?php if (@$_GET['aran'] == 15)  {?>


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
    header('location:arithmetic-notes.php?a=1');
    ?>



    <?php exit; }  ?>
    
    <!--       data-pdf-note   -->

<?php if (@$_GET['aran'] == 16)  {?>

    

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
   echo ' <script>window.location="arithmetic-notes.php?a=1"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=16 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
					
        $q = "SELECT * FROM dpdfa where id='$id'";

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
					
				$q = "SELECT * FROM dpdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

				
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style=" 
       
       
        padding: 10px;">		
<?php
$records = mysqli_query($db,"select * from dpdfa where id ='$o' LIMIT 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{



	

echo "<td><a  data-toggle=modal' data-target='#logoout' onClick=\"javascript: return confirm('Are You Sure?');\" href='data-del-pdf.php?id=".$data['id']."'>" ?>          <?php  " </a></td><tr>" ?>











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
    
    <!--       data-del-pdf   -->

<?php if (@$_GET['aran'] == 17)  {?>
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

    $q = "SELECT * FROM dpdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from dpdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from dpdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=15');
exit;
//header('location:arithmetic_aptitude.php');?>



    <?php exit; }  ?>
    
    <!--       data-view-video   -->

<?php if (@$_GET['aran'] == 18)  {?>

    

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
   echo ' <script>window.location="arithmetic-notes.php?a=1"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=18 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
    
    <!--       data-dlt-video   -->

<?php if (@$_GET['aran'] == 19)  {?>

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

    $q = "SELECT * FROM dnote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from dnote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from dnote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=15');
exit;
//header('location:arithmetic_aptitude.php');?>


    <?php exit; }  ?>
    
    <!--       verbal-desc   -->

<?php if (@$_GET['aran'] == 20)  {?>

    

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];
       
 echo '<a href="arithmetic_aptitude.php?pl=2 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Details</h5>
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
echo ' <script>window.location="arithmetic-notes.php?a=2"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Details</b><hr/></h1>
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

$query = "SELECT * FROM vtode where sl_no= '$i'";
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
    
    <!--       verbal-edit-topic   -->

<?php if (@$_GET['aran'] == 21)  {?>

    

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
        $qil = "UPDATE `vtopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM vtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=2"</script>';}
       
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
    
    <!--      verbal-notes   -->

<?php if (@$_GET['aran'] == 22)  {?>

    

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
	
	$q = "INSERT INTO vpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic-notes.php?a=2"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=22 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=26 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=27 & id='.$row['id'] . '"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
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
    
    <!--       verbal-video   -->

<?php if (@$_GET['aran'] == 23)  {?>

    

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
        
					
			
        error_reporting(E_ERROR | E_PARSE);
            echo '<a  class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment">  <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload a New Video</a>'; ?>

</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Upload Video</h5>
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
   echo ' <script>window.location="arithmetic-notes.php?a=2"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=23 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=28 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=29 & id='.$row['id'] . '"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
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
    
    <!--       verbal-delete-topic   -->

<?php if (@$_GET['aran'] == 24)  {?>
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

    $q = "SELECT * FROM vtopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM vnote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from vpdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from vtode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from vtopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from vnote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=25');
exit;
//header('location:arithmetic_aptitude.php');?>



    <?php exit; }  ?>
    
    <!--       verbal-confirm   -->

<?php if (@$_GET['aran'] == 25)  {?>


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
    header('location:arithmetic-notes.php?a=2');
    ?>



    <?php exit; }  ?>
    
    <!--       verbal-pdf-note   -->

<?php if (@$_GET['aran'] == 26)  {?>
    

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
   echo ' <script>window.location="arithmetic-notes.php?a=2"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=26 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

			
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style="
       
       
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
    
    <!--      verbal-del-pdf  -->

<?php if (@$_GET['aran'] == 27)  {?>

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

    $q = "SELECT * FROM vpdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from vpdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from vpdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=25');
exit;
//header('location:arithmetic_aptitude.php');?>


    <?php exit; }  ?>
    
    <!--       verbal-view-video   -->

<?php if (@$_GET['aran'] == 28)  {?>
    

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
   echo ' <script>window.location="arithmetic-notes.php?a=2"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=28 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
    
    <!--     verbal-dlt-video  -->

<?php if (@$_GET['aran'] == 29)  {?>

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

    $q = "SELECT * FROM vnote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from vnote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from vnote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=25');
exit;
//header('location:arithmetic_aptitude.php');?>

    <?php exit; }  ?>
    
    <!--       logical-desc   -->

<?php if (@$_GET['aran'] == 30)  {?>
    

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];
       
 echo '<a href="arithmetic_aptitude.php?pl=3 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Details</h5>
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
echo ' <script>window.location="arithmetic-notes.php?a=3"</script>';}
       
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

$query = "SELECT * FROM lrtode where sl_no= '$i'";
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

    <!--       logical-edit-topic   -->

<?php if (@$_GET['aran'] == 31)  {?>

    

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
        $qil = "UPDATE `lrtopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM lrtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=3"</script>';}
       
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

<!--       logical-notes   -->

<?php if (@$_GET['aran'] == 32)  {?>

    

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
	
	$q = "INSERT INTO lrpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM lrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic-notes.php?a=3"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=32 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=36 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=37 & id='.$row['id'] . '"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
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

<!--       logical-video   -->

<?php if (@$_GET['aran'] == 33)  {?>

    

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
	
	$q = "INSERT INTO lrnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM lrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic-notes.php?a=3"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=33 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=38 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=39 & id='.$row['id'] . '"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
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

<!--       logical-delete-topic   -->

<?php if (@$_GET['aran'] == 34)  {?>
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

    $q = "SELECT * FROM lrtopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM lrnote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from lrpdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from lrtode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from lrtopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from lrnote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=35');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--       logical-confirm   -->

<?php if (@$_GET['aran'] == 35)  {?>


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
    header('location:arithmetic-notes.php?a=3');
    ?>



<?php exit; }  ?>

<!--       logical-pdf-note   -->

<?php if (@$_GET['aran'] == 36)  {?>
    

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
   echo ' <script>window.location="arithmetic-notes.php?a=3"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=36 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style="
       
       
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

<!--       logical-del-pdf   -->

<?php if (@$_GET['aran'] == 37)  {?>

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

    $q = "SELECT * FROM lrpdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from lrpdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from lrpdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=35');
exit;
//header('location:arithmetic_aptitude.php');?>




<?php exit; }  ?>

<!--       logical-view-video   -->

<?php if (@$_GET['aran'] == 38)  {?>
    

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
   echo ' <script>window.location="arithmetic-notes.php?a=3"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=38 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

<!--       logical-dlt-video   -->

<?php if (@$_GET['aran'] == 39)  {?>

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

    $q = "SELECT * FROM lrnote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from lrnote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from lrnote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=35');
exit;
//header('location:arithmetic_aptitude.php');?>




<?php exit; }  ?>

<!--       verbalr-desc   -->

<?php if (@$_GET['aran'] == 40)  {?>

    

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];
       
 echo '<a href="arithmetic_aptitude.php?pl=4 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Details</h5>
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
echo ' <script>window.location="arithmetic-notes.php?a=4"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Details</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Detail</strong></label>
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

$query = "SELECT * FROM vrtode where sl_no= '$i'";
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

<!--       verbalr-edit-topic   -->

<?php if (@$_GET['aran'] == 41)  {?>

    

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
        $qil = "UPDATE `vrtopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM vrtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=4"</script>';}
       
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

<!--       verbalr-notes   -->

<?php if (@$_GET['aran'] == 42)  {?>

    

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
	
	$q = "INSERT INTO vrpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic-notes.php?a=4"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=42 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=46 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=47 & id='.$row['id'] . '"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
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

<!--       verbalr-video   -->

<?php if (@$_GET['aran'] == 43)  {?>

    

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
	
	$q = "INSERT INTO vrnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM vrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic-notes.php?a=4"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=43 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=48 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=49 & id='.$row['id'] . '"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
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

<!--       verbalr-delete-topic   -->

<?php if (@$_GET['aran'] == 44)  {?>
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

    $q = "SELECT * FROM vrtopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM vrnote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from vrpdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from vrtode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from vrtopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from vrnote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=45');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--       verbalr-confirm   -->

<?php if (@$_GET['aran'] == 45)  {?>

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
    header('location:arithmetic-notes.php?a=4');
    ?>




<?php exit; }  ?>

<!--       verbalr-pdf-notes   -->

<?php if (@$_GET['aran'] == 46)  {?>

    

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
   echo ' <script>window.location="arithmetic-notes.php?a=4"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=46 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

			
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style="
       
       
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

    <!--       verbalr-del-pdf   -->

<?php if (@$_GET['aran'] == 47)  {?>
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

    $q = "SELECT * FROM vrpdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from vrpdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from vrpdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=45');
exit;
//header('location:arithmetic_aptitude.php');?>




<?php exit; }  ?>

<!--       verbalr-iew-video   -->

<?php if (@$_GET['aran'] == 48)  {?>
    

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
   echo ' <script>window.location="arithmetic-notes.php?a=4"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=48 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

    <!--       verbalr-dlt-video   -->

<?php if (@$_GET['aran'] == 49)  {?>

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

    $q = "SELECT * FROM vrnote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from vrnote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from vrnote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=45');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>


<!--       nverbal-desc   -->

<?php if (@$_GET['aran'] == 50)  {?>

    

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Topic Details</h4>

</div>
<div class="page-btn">
<?php
$r=$_GET['id'];
       
 echo '<a href="arithmetic_aptitude.php?pl=5 &id='.$r.'" class="btn btn-added">'; ?><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Details</a>
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
        $qil = "INSERT INTO nrtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM nrtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=5"</script>';}
       
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

$query = "SELECT * FROM nrtode where sl_no= '$i'";
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

    <!--       nverbal-edit-topic   -->

<?php if (@$_GET['aran'] == 51)  {?>

    

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
        $qil = "UPDATE `nrtopic` SET `topic`='$tp' WHERE sl_no= $id";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM nrtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=5"</script>';}
       
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

<!--       nverbal-notes   -->

<?php if (@$_GET['aran'] == 52)  {?>

    

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
	
	$q = "INSERT INTO nrpdfa (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM nrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic-notes.php?a=5"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=52 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=56 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Note</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=57 & id='.$row['id'] . '"  class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Note</a>
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

    <!--       nverbal-video   -->

<?php if (@$_GET['aran'] == 53)  {?>

    

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
	
	$q = "INSERT INTO nrnote (sl_no,name) VALUES ('$id','$file_name')";

	if(mysqli_query($db,$q)) {

		$success = "Video uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM nrtopic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="arithmetic-notes.php?a=5"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=53 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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
                      <a href="arithmetic-notes-action.php?aran=58 & id='.$row['id'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Video</a>
                      </li>
                      
                      <li>
                      <a href="arithmetic-notes-action.php?aran=59 & id='.$row['id'] . '"  class="dropdown-item "><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Video</a>
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

<!--       nverbal-delete-topic   -->

<?php if (@$_GET['aran'] == 54)  {?>

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

    $q = "SELECT * FROM nrtopic";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['topic'];
        
    }

$d=$_GET['id'];
//echo "" .$d;

$ql = "SELECT * FROM nrnote";

$query = mysqli_query($db,$ql);

$delll = mysqli_query($db,"DELETE from nrpdfa where sl_no = '$d'");
$dellllll = mysqli_query($db,"DELETE from nrtode where sl_no = '$d'");
$del = mysqli_query($db,"DELETE from nrtopic where sl_no = '$d'");
$dell = mysqli_query($db,"DELETE from nrnote where sl_no = '$d'");
//error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=55');
exit;
//header('location:arithmetic_aptitude.php');?>



<?php exit; }  ?>

<!--       nverbal-confirm   -->

<?php if (@$_GET['aran'] == 55)  {?>


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
    header('location:arithmetic-notes.php?a=5');
    ?>


<?php exit; }  ?>

<!--       nverbal-pdf-notes   -->

<?php if (@$_GET['aran'] == 56)  {?>
    

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
   echo ' <script>window.location="arithmetic-notes.php?a=5"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=56 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

				
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900" style="
       
       
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

<!--       nverbal-del-pdf   -->

<?php if (@$_GET['aran'] == 57)  {?>

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

    $q = "SELECT * FROM nrpdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from nrpdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from nrpdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=55');
exit;
//header('location:arithmetic_aptitude.php');?>


<?php exit; }  ?>

<!--       nverbal-view-video   -->

<?php if (@$_GET['aran'] == 58)  {?>

    

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
   echo ' <script>window.location="arithmetic-notes.php?a=5"</script>';}?>
	 
	 
	 
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
				echo '<form   action="arithmetic-notes-action.php?aran=58 & id='.$row['sl_no'] . '" method="post" enctype="multipart/form-data">'; }?>
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

<!--       nverbal-dlt-video   -->

<?php if (@$_GET['aran'] == 59)  {?>

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

    $q = "SELECT * FROM nrnote";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from nrnote where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from nrnote where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:arithmetic-notes-action.php?aran=55');
exit;
//header('location:arithmetic_aptitude.php');?>

<?php exit; }  ?>

<?php } else{
echo ' <script>window.location="index.php"</script>';
} ?>
<?php include 'sidebar.php';?>
    <?php 
    $d=$_SESSION['mentor_name'];
    $qq = "SELECT * from users where username = '$d'";
    $queryy = mysqli_query($db,$qq); 
    $row = mysqli_fetch_array($queryy);
    if ($row['notes'] == 1){

        ?>

<!--     Arthmetic-Aptitude   -->

<?php if (@$_GET['a'] == 0){?>
   
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Arithmetic Aptitude</h4>

</div>
<div class="page-btn">
<a href="add-topic.php" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Topics</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add New Topic</h5>
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
echo ' <script>window.location="arithmetic-notes.php?a=0"</script>';}
       
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
<th class="col-md-6">Topic</th>

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
                      <a href="arithmetic-notes-action.php?aran=0 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=1 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=2 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=3 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                      <a href="arithmetic-notes-action.php?aran=4 &id='.$row['sl_no'] . '" onClick=\"javascript: return confirm("Are You Sure?");\" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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

<!--     data-interpretation       -->

<?php if (@$_GET['a'] == 1)  {?>

  

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Data Interpretation</h4>

</div>
<div class="page-btn">
<a href="" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Topics</a>
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
	
	
    

        $tp = $_POST['topic'];
        $qil = "INSERT INTO dtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM dtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=1"</script>';}
       
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
                      <a href="arithmetic-notes-action.php?aran=10 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=11 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=12 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=13 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                     
                      <a href="arithmetic-notes-action.php?aran=14 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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

<!--     verbal-ability       -->

<?php if (@$_GET['a'] == 2)  {?>
  

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Verbal Ability</h4>

</div>
<div class="page-btn">
<a href="" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Topics</a>
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
	
	
    

        $tp = $_POST['topic'];
        $qil = "INSERT INTO vtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM vtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=2"</script>';}
       
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
                      <a href="arithmetic-notes-action.php?aran=20 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=21 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=22 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=23 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=24 &id='.$row['sl_no'] . '" onClick=\"javascript: return confirm("Are You Sure?");\" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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

<!--     logical-reasoning       -->

<?php if (@$_GET['a'] == 3)  {?>
  

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Logical Reasoning</h4>

</div>
<div class="page-btn">
<a href="" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Topics</a>
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
	
	
    

        $tp = $_POST['topic'];
        $qil = "INSERT INTO lrtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM lrtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=3"</script>';}
       
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
                      <a href="arithmetic-notes-action.php?aran=30 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=31 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=32 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=33 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                      <a href="arithmetic-notes-action.php?aran=34 &id='.$row['sl_no'] . '" onClick=\"javascript: return confirm("Are You Sure?");\" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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

<!--     verbal-reasoning       -->

<?php if (@$_GET['a'] == 4)  {?>
  

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Verbal Reasoning</h4>

</div>
<div class="page-btn">
<a href="" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Topics</a>
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
	
	
    

        $tp = $_POST['topic'];
        $qil = "INSERT INTO vrtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM vrtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=4"</script>';}
       
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
                      <a href="arithmetic-notes-action.php?aran=40 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=41 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=42 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=43 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                      <a href="arithmetic-notes-action.php?aran=44 &id='.$row['sl_no'] . '" onClick=\"javascript: return confirm("Are You Sure?");\" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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

<!--     nverbal-reasoning       -->

<?php if (@$_GET['a'] == 5)  {?>
  

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Nonverbal Reasoning</h4>

</div>
<div class="page-btn">
<a href="" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Topics</a>
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
	
	
    

        $tp = $_POST['topic'];
        $qil = "INSERT INTO nrtopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM nrtopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="arithmetic-notes.php?a=5"</script>';}
       
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
                      <a href="arithmetic-notes-action.php?aran=50 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=51 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=52 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="arithmetic-notes-action.php?aran=53 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                      <a href="arithmetic-notes-action.php?aran=54 &id='.$row['sl_no'] . '" onClick=\"javascript: return confirm("Are You Sure?");\" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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


<?php } else{
echo ' <script>window.location="index.php"</script>';
} ?>
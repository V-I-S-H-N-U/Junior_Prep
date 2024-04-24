<!--     Mechanical   -->
<?php if (@$_GET['d'] == 0){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Mechanical Department</h4>

</div>
<div class="page-btn">
<a href="" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Topics</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Topics</h5>
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
echo ' <script>window.location="department-notes.php?d=0"</script>';}
       
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
                      <a href="department-notes-action.php?dep=0 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=1 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=2 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=3 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                      <a id="'.$row['sl_no'] . '" onClick="getId(this)" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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
            window.location.href = 'department-notes-action.php?dep=4 &id='+hi,
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


<!--     CIVIL   -->
<?php if (@$_GET['d'] == 1){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Civil Department</h4>

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
        $qil = "INSERT INTO civiltopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM civiltopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=1"</script>';}
       
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
                      <a href="department-notes-action.php?dep=10 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=11 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=12 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=13 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                      <a id="'.$row['sl_no'] . '" onClick="getId(this)" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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
            window.location.href = 'department-notes-action.php?dep=14 &id='+hi,
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


<!--     ECE   -->
<?php if (@$_GET['d'] == 2){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>ECE Department</h4>

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
        $qil = "INSERT INTO ecetopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM ecetopic';
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
                      <a href="department-notes-action.php?dep=20 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=21 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=22 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=23 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                      <a id="'.$row['sl_no'] . '" onClick="getId(this)" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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
            window.location.href = 'department-notes-action.php?dep=24 &id='+hi,
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


<!--     EEE   -->
<?php if (@$_GET['d'] == 3){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>EEE Department</h4>

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
        $qil = "INSERT INTO eeetopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM eeetopic';
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
                      <a href="department-notes-action.php?dep=30 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=31 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=32 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=33 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                      <a id="'.$row['sl_no'] . '" onClick="getId(this)" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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
            window.location.href = 'department-notes-action.php?dep=34 &id='+hi,
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


<!--     CSE   -->
<?php if (@$_GET['d'] == 4){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>CSE Department</h4>

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
        $qil = "INSERT INTO csetopic (topic) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM csetopic';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="department-notes.php?d=4"</script>';}
       
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
                      <a href="department-notes-action.php?dep=40 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">Topic Detail</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=41 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/edit.svg" class="me-2" alt="img">Edit Topic</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=42 &id='.$row['sl_no'] . '" class="dropdown-item"><img src="../assets/img/icons/pdf1.svg" class="me-2" alt="img">Notes</a>
                      </li>
                      <li>
                      <a href="department-notes-action.php?dep=43 &id='.$row['sl_no'] . '" class="dropdown-item" ><img src="../assets/img/icons/video.svg" class="me-2" alt="img">Video Lectures</a>
                      </li>
                     
                      <li>
                      <a id="'.$row['sl_no'] . '" onClick="getId(this)" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Topic</a>
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
            window.location.href = 'department-notes-action.php?dep=44 &id='+hi,
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

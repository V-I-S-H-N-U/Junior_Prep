<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Review Resume</h4>

</div>
<div class="page-btn">
<a href="add-topic.php" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Upload Resume</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Upload Resume</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>>
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
	
	$id = $_GET['user'];
	
	
	$file_destination = "../pdfa/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO revpdfa (name,user) VALUES ('$file_name','$id')";

	if(mysqli_query($db,$q)) {

		$success = "Note uploaded successfully.";?>


		
<?php	$query = 'SELECT * FROM topic ';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 
   echo ' <script>window.location="user-review-resume.php?user='.$_GET['user'].'"</script>';}?>
	 
	 
	 
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
                
					
                 $query = "SELECT * FROM topic";
                
               
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) { 	
				echo '<form   action="user-review-resume.php?user='.$_GET['user'].'" method="post" enctype="multipart/form-data">'; }?>
					<div class="form-group">
						<label><strong>Upload The Note:</strong></label>
						 <input type="file" name="file" class="form-control">
						
					</div>
					<?php if(isset($success)) { ?>
					<div class="alert alert-success">

						

							<?php echo $success;?>

					</div>
					<?php } ?>
					<?php if(isset($failed)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $failed;?>

					</div>
					<?php } ?>

					<?php if(isset($msz)) { ?>
					<div class="alert alert-danger">

						

							<?php echo $msz;?>

					</div>
					<?php } ?>
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
<table class="table datanew">
<thead>

<th class="col-md-1">Sl No.</th>
<th class="col-md-6">Subject</th>
<th class="col-md-6">Date</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$i=$_GET['user'];
$query = "SELECT * FROM rnotice where user='$i'";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		       $c = 1;
			while ($row = mysqli_fetch_assoc($result)) {
                                
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['subject'].'</td>';
                echo '<td>'. $row['Date'].'</td>';
          

                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="enq.php?okl=60 &id='.$row['notice_id'].' &user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Review</a>
                      </li>
                      <li>
                      <a href="enq.php?okl=61 &id='.$row['notice_id'].' &user='.$_GET['user'].'" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Review</a>
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
            window.location.href = 'enq.php?okl=61 &id='+hi,
          fire(
            'success',

          )
        
          
        }
       
      })
     }
</script>



</div>
</div>
</div>

<?php   include 'footer.php'   ?>
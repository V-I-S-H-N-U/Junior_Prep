<?php include 'sidebar.php';?>
    <?php 
    $d=$_SESSION['mentor_name'];
    $qq = "SELECT * from users where username = '$d'";
    $queryy = mysqli_query($db,$qq); 
    $row = mysqli_fetch_array($queryy);
    if ($row['help'] == 1){

        ?>

<?php if (@$_GET['pl'] == 0){?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>User's Enquiries</h4>

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
<table class="table">
<thead>
<?php
$query = 'SELECT * FROM enqui';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
        $row = mysqli_fetch_assoc($result);
        if($row == 0){
            echo '<h4 style="text-align:center;">No Enquiries!</h4>';
        }else {?>
<tr>

<th class="col-md-1">Sl No.</th>
<th class="col-md-6">Username</th>
<th class="col-md-6">Email</th>

<th class="text-center col-md-1">Action</th>
</tr>
</thead>
<tbody>

<?php
$query = 'SELECT * FROM enqui';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
 
       
        $c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['username'].'</td>';
                echo '<td>'. $row['email'].'</td>';
          

                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="enq.php?okl=0 &id='.$row['id'].'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Enquiry</a>
                      </li>
                      <li>
                      <a href="enq.php?okl=1 &id='.$row['id'].'" onClick=\"javascript: return confirm("Are You Sure?");\" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Enquiry</a>
                      </li>
                      </ul>
                      </td>
                      ';
                     
                echo '</tr> ';
                        }$c=0; }
                       
?>


</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>

<?php   include 'footer.php'  ?>
<?php exit; } ?>
<?php } else{
echo ' <script>window.location="index.php"</script>';
} ?>

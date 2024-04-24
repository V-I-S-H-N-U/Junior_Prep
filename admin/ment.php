<?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Mentor Roles</h4>

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
<th class="col-md-1">Notes</th>
<th class="col-md-1">Interview</th>
<th class="col-md-1">Resume</th>
<th class="col-md-1">Quiz</th>
<th class="col-md-1">Help</th>

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
      
        $d=$row['email'];
    $qq = "SELECT * from users where user_type = 'mentor'";
    $queryy = mysqli_query($db,$qq); 
    $row = mysqli_fetch_array($queryy);
    if ($row['notes'] == 0){
        //   echo '<td>'. $row['user'].'</td>';
              echo '<td><b><a href="mentor.php?act=6 &user='.$row['username'] . '" class="btn" style="margin:0px;background:green;color:white">&nbsp;<span class="title1"><b>Enable</b></span></a></b></td>';
           }else{
               echo '<td><b><a href="mentor.php?act=7 &user='.$row['username'] . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Disable</b></span></a></b></td>';
           }

    if ($row['interview'] == 0){
        //   echo '<td>'. $row['user'].'</td>';
              echo '<td><b><a href="mentor.php?act=4 &user='.$row['username'] . '" class="btn" style="margin:0px;background:green;color:white">&nbsp;<span class="title1"><b>Enable</b></span></a></b></td>';
           }else{
               echo '<td><b><a href="mentor.php?act=5 &user='.$row['username'] . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Disable</b></span></a></b></td>';
           }

    if ($row['resume'] == 0){
        //   echo '<td>'. $row['user'].'</td>';
              echo '<td><b><a href="mentor.php?act=2 &user='.$row['username'] . '" class="btn" style="margin:0px;background:green;color:white">&nbsp;<span class="title1"><b>Enable</b></span></a></b></td>';
           }else{
               echo '<td><b><a href="mentor.php?act=3 &user='.$row['username'] . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Disable</b></span></a></b></td>';
           }


    if ($row['quiz'] == 0){
 //   echo '<td>'. $row['user'].'</td>';
       echo '<td><b><a href="mentor.php?act=0 &user='.$row['username'] . '" class="btn" style="margin:0px;background:green;color:white">&nbsp;<span class="title1"><b>Enable</b></span></a></b></td>';
    }else{
        echo '<td><b><a href="mentor.php?act=1 &user='.$row['username'] . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Disable</b></span></a></b></td>';
    }

    if ($row['help'] == 0){
        //   echo '<td>'. $row['user'].'</td>';
              echo '<td><b><a href="mentor.php?act=8 &user='.$row['username'] . '" class="btn" style="margin:0px;background:green;color:white">&nbsp;<span class="title1"><b>Enable</b></span></a></b></td>';
           }else{
               echo '<td><b><a href="mentor.php?act=9 &user='.$row['username'] . '" class="btn" style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Disable</b></span></a></b></td>';
           }
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

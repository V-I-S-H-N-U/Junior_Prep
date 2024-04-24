<!--       user-technical-interview   -->

<?php if (@$_GET['ine'] == 0)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Technical Interview</h4>

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
        
        $qil = "INSERT INTO techtode (name) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM techtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="technical-interview.php"</script>';}
       
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


$query = "SELECT * FROM techtode";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>



</div>
</div>
</div>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-hr-interview   -->

<?php if (@$_GET['ine'] == 1)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>HR Interview</h4>

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
        
        $qil = "INSERT INTO hrtode (name) VALUES ('$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM hrtode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="hr-interview.php"</script>';}
       
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


$query = "SELECT * FROM hrtode";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
      
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $row['name'].'</td>';
                echo '</tr> ';
                        }}
?>




</div>
</div>
</div>





<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--       user-mock-interview   -->

<?php if (@$_GET['ine'] == 2)  {?>
<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Mock Interview</h4>

</div>
<div class="page-btn">
<a href="add-topic.php" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Take Appointment</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Take Appointment</h5>
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
	
	
    

      //  $tp = $_SESSION['user'];
        $em = $_POST['email'];
        $top = $_POST['topic'];
        $dp = $_POST['date'];
        $ttp = $_POST['time'];

        $selectii = " SELECT * FROM users where email='$em'";

        $resultii = mysqli_query($db, $selectii);
         
          if(mysqli_num_rows($resultii) == 0){
          echo '<script>alert("Enter Valid Email");</script>';
          echo ' <script>window.location="interview.php?ine=2 &user='.$_GET['user'].' "</script>';
          exit;
        }
        

        $select = " SELECT * FROM appoint WHERE dat = '$dp' && time = '$ttp' ";

        $result = mysqli_query($db, $select);
     
        if(mysqli_num_rows($result) > 0){
     
           $error[] = 'Time Already Booked!';
          }else{
            
        $qil = "INSERT INTO appoint (name,dat,time,descrip) VALUES ('$em','$dp','$ttp','$top')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
		
	$query = 'SELECT * FROM appoint';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="interview.php?ine=2 &user='.$_GET['user'].' "</script>';}
             
}
      
}

	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Take Appointment</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                $min = new DateTime();
                $min->modify("+1 days");
                $max = new DateTime();
                $max->modify("+365 days");
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
          <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<script>alert("'.$error.'");</script>';
         };
      };?>
						<label><strong>Any Suggestions?  (<small style="color:red;">*If nothing type no</small>)</strong></label>
						 <input type="text" name="topic" class="form-control" required><br>
             <label><strong>Email  (<small style="color:red;">*Registered account email</small>)</strong></label>
						 <input type="email" name="email" class="form-control" required><br>
             <label><strong>Date</strong></label>
						 <input type="date" name="date" class="form-control" value="" min=<?=$min->format("Y-m-d")?> max=<?=$max->format("Y-m-d")?> required>
             <br>
<label><strong>Choose Time:</strong></label>
<select name="time" id="time">
<option value="10:00 am">10:00 am</option>
<option value="11:00 am">11:00 am</option>
<option value="12:00 pm">12:00 pm</option>
<option value="1:00 pm">1:00 pm</option>
<option value="2:00 pm">2:00 pm</option>
<option value="3:00 pm">3:00 pm</option>
<option value="4:00 pm">4:00 pm</option>
<option value="5:00 pm">5:00 pm</option>
<option value="6:00 pm">6:00 pm</option>
<option value="7:00 pm">7:00 pm</option>
<option value="8:00 pm">8:00 pm</option>
<option value="9:00 pm">9:00 pm</option>
<option value="10:00 pm">10:00 pm</option>
</select>




					</div>
          
					
          <center><strong><small style="color:red;">(*Your appointment may subject to cancellation if appointment limit is reached, we will notify if your appoinment got cancelled.)</small></strong></center><br>
          <center><input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3"></center>
					
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
<?php 
$q=mysqli_query($db,"select * from notice where user='".$_GET['user']."'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='text-align:center;'>No Interview Scheduled!</h2>";
}
else
{
?>
<h2>Interview Notification</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th class="col-md-1">Sr.No</th>
    <th>Date</th>
		<th class="col-md-6">Status</th>
	
        <th class="col-md-1">Details</th>
		</Tr>
		<?php


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['Date']."</td>";
echo "<td>".$row['subject']."</td>";

echo "<td><a target='_blank'class='btn btn-primary'  href='".$row['Description']."' style='color:white;'>Overview</a></td>";
echo "</Tr>";
$i++;
}
		?>

</table>
<?php }?>

</table>
</div>
</div>
</div>

</div>
</div>
</div>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>


<!--     technical interview   -->
<?php if (@$_GET['int'] == 0){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Technical Interview</h4>

</div>
<div class="page-btn"><?php
$query = 'SELECT * FROM techtode';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		$row = mysqli_fetch_assoc($result);
       
 echo '<a href="interview-preparation.php?int=7 &id='.$row['sl_no'] . '" class="btn btn-added">'; ?> <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Descriptions</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Descriptions</h5>
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
echo ' <script>window.location="interview-preparation.php?int=0"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Description</b><hr/></h1>
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

</div>
</div>
</div>
</div>
</div>


<div class="card">
    <div class="card-body">
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
</div>
</div>



<?php   include 'footer.php'   ?>
<?php exit; }  ?> 

<!--     hr interview   -->

<?php if (@$_GET['int'] == 1){?>

    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>HR Interview</h4>

</div>
<div class="page-btn"><?php
$query = 'SELECT * FROM hrtode';
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		$row = mysqli_fetch_assoc($result);
       
 echo '<a href="interview-preparation.php?int=8 &id='.$row['sl_no'] . '" class="btn btn-added">'; ?> <img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Descriptions</a>
</div>
</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Descriptions</h5>
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
echo ' <script>window.location="interview-preparation.php?int=1"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Description</b><hr/></h1>
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
<a class="btn btn-filters ms-auto"></a>
</div>
</div>
</div>
</div>
</div>

<div class="card">
    <div class="card-body">
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
</div>
</div>








<?php   include 'footer.php'   ?>
<?php exit; }  ?> 

<!--     appointment list   -->
<?php if (@$_GET['int'] == 2){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>All Appointments For Tommorrow</h4>

</div>

<?php
include('config.php');
include('../api.php');
$arr['topic']='Test by Vishal';
$arr['start_date']=date('2021-05-16 00:02:30');
$arr['duration']=30;
$arr['password']='vishal';
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
	echo "<br/>";
}else{
	echo '<pre>';
	print_r($result);
}
?>

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

extract($_POST);
if(isset($upload))
{

	if($details=="" || $sub=="" || $users=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		foreach($users as $v)
		{
mysqli_query($db,"insert into notice values('','$v','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
    $query = 'SELECT * FROM notice';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="interview-preparation.php?int=2"</script>';}
       
}
?>

<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Select User</div>
		<div class="col-sm-5">
		<select name="users[]" class="form-control">
			<?php 
	$sql=mysqli_query($db,"select username,email from users");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['email']."'>".$r['username']."</option>";
	}
			?>
		</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit"  name="upload" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	
	 
	 
	 

	




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





<th>Sr.No</th>
		<th>email</th>
		<th>date</th>
		<th>time</th>
		<th>Suggestions</th>
        <th>Delete</th>
		

   


</tr>
</thead>
<tbody>

<?php
$tomorrow = date("Y-m-d", strtotime("+1 day"));

$q=mysqli_query($db,"select * from appoint where dat='$tomorrow'");
$i=1;
           
while($row=mysqli_fetch_assoc($q))
{
        echo "<Tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['dat']."</td>";
        echo "<td>".$row['time']."</td>";
        echo "<td>".$row['descrip']."</td>";
        
    ?>
    
</script>

     <Td><a id="<?php echo '' .$row['id'] ?>" onClick="getId(this)" style='color:Red'><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img"></a></td>
        
        
        <?php 
         echo "</Tr>";
        $i++;
        }
                ?><script>
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
					   window.location.href = 'interview-preparation.php?int=5 &id='+hi,
					 fire(
					   'success',
		   
					 )
				   
					 
				   }
				  
				 })
				}
		   </script>





</tbody>
</table>

<br><br><br>





</div>
</div>
</div>

</div>
</div>
</div>



<?php   include 'footer.php'   ?>
<?php exit; }  ?> 

<!--     mock interview   -->
<?php if (@$_GET['int'] == 3){?>
<?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Mock Interview</h4>

</div>

<?php
include('config.php');
include('../api.php');
$arr['topic']='Mock Interview';
$arr['start_date']=date('2021-05-16 00:02:30');
$arr['duration']=30;
$arr['password']='mock';
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
	echo "<br/>";
}else{
	echo '<pre>';
	print_r($result);
}
?>

<form  action="<?php echo '' .$result->start_url?>" method="POST" target="_blank">
    <input class="btn btn-success" type="submit" value="Start Meeting"/>
</form>


<div class="page-btn">
<a href="add-topic.php" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Meeting</a>
</div>

</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add meeting Notice</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="table-responsive">
<table class="table">
<thead>
<?php 

extract($_POST);
if(isset($upload))
{

	if($details=="" || $sub=="" || $users=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		foreach($users as $v)
		{
mysqli_query($db,"insert into notice values('','$v','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
    $query = 'SELECT * FROM notice';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="interview-preparation.php?int=3"</script>';}
       
}
?>

<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Status</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	<br>
		
	
	<div class="row">
		<div class="col-sm-4">Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	
	
	<br>
	
	<div class="row">
		<div class="col-sm-4">Select User</div>
		<div class="col-sm-5">
		<select name="users[]" class="form-control">
			<?php 
	$sql=mysqli_query($db,"select username,email from users");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['email']."'>".$r['username']."</option>";
	}
			?>
		</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit"  name="upload" value="Notify" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	
	 
	 
	 

	




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


<th>Sr.No</th>
		<th>Status</th>
		<th>Details</th>
		<th>User</th>
		<th>Date</th>
		<th>Delete</th>
   


</tr>
</thead>
<tbody>

<?php

$q=mysqli_query($db,"select * from notice ");
$i=1;
           
while($row=mysqli_fetch_assoc($q))
{
        echo "<Tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row['subject']."</td>";
        echo "<td>".$row['Description']."</td>";
        echo "<td>".$row['user']."</td>";
        echo "<td>".$row['Date']."</td>";
        
        ?>
        
        <Td><a id="<?php echo '' .$row['notice_id'] ?>" onClick="getId(this)" style='color:Red'><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img"></a></td>
        
        
        <?php 
         echo "</Tr>";
        $i++;
        }
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
            window.location.href = 'interview-preparation.php?int=6 &id='+hi,
          fire(
            'success',

          )
        
          
        }
       
      })
     }
</script>





</tbody>
</table>

<br><br><br>





</div>
</div>
</div>

</div>
</div>
</div>



<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     delete-appoint   -->
<?php if (@$_GET['int'] == 5){?>
    <?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($db,"delete from appoint where id='$nid'");

header('location:interview-preparation.php?int=2');

?>

<?php exit; }  ?>


<!--     delete-notice   -->
<?php if (@$_GET['int'] == 6){?>
    <?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($db,"delete from notice where notice_id='$nid'");

header('location:interview-preparation.php?int=3');

?>

<?php exit; }  ?>

<!--     add-desc  -->
<?php if (@$_GET['int'] == 7){?>
	<?php   include 'sidebar.php'   ?>
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Technical Interview</h4>

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

<div class="table-responsive" style="background-color:white;margin:10px;border:5px solid white;border-radius:5px; box-shadow:1px 1px 1px 1px #aaaaaa;">
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
	
	
    

        $tp = $_POST['topic'];
        $r=$_GET['id'];
       // $qil = "INSERT INTO tode (sl_no,name) VALUES ('$r','$tp')";
        //$run = mysqli_query($db,$qil) or die(mysqli_error());
		$qu1 = mysqli_query($db,"SELECT * FROM techtode WHERE sl_no='$r'");
			$row = mysqli_fetch_array($qu1);
			$o = $row['name'];
			if($o == 0){
				    $qil = "INSERT INTO techtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
			}else{
		$query = mysqli_query($db,"UPDATE techtode SET `name`='$tp' WHERE sl_no='$r'");
			}
	$query = 'SELECT * FROM tode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="interview-preparation.php?int=0"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Description</b><hr/></h1>
				
				<?php
                
                ?>
   	<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>

				<form   action="" method="post" autocomplete="off">
					<div class="form-group" style="width:100%;padding:10px;">
						<label><strong>Description</strong></label>
                        <!--<textarea name="topic" rows="5000" cols="4000" placeholder="Description"></textarea>-->
						<textarea name="topic" id="editor1" rows="10" cols="80">
            <?php
			$i=$_GET['id'];
			$qu = mysqli_query($db,"SELECT * FROM techtode WHERE sl_no='$i'");

			$row = mysqli_fetch_array($qu);
			error_reporting(E_ERROR | E_PARSE);
			echo '' .$row['name']; ?>
        </textarea>
		<input type="hidden" name="id" value="<?php  $i ?>">
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor1',
            {
                extraPlugins : 'youtube',
            });
        </script>
						
					</div>
					<center><input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3"></center>
					
				</form>
				



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

<!--     hr-interview   -->
<?php if (@$_GET['int'] == 8){?>
<?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>HR Interview</h4>

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

<div class="table-responsive" style="background-color:white;margin:10px;border:5px solid white;border-radius:5px; box-shadow:1px 1px 1px 1px #aaaaaa;">
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
	
	
    

        $tp = $_POST['topic'];
        $r=$_GET['id'];
       // $qil = "INSERT INTO tode (sl_no,name) VALUES ('$r','$tp')";
        //$run = mysqli_query($db,$qil) or die(mysqli_error());
		$qu1 = mysqli_query($db,"SELECT * FROM hrtode WHERE sl_no='$r'");
			$row = mysqli_fetch_array($qu1);
			$o = $row['name'];
			if($o == 0){
				    $qil = "INSERT INTO hrtode (sl_no,name) VALUES ('$r','$tp')";
        $run = mysqli_query($db,$qil) or die(mysqli_error());
			}else{
		$query = mysqli_query($db,"UPDATE hrtode SET `name`='$tp' WHERE sl_no='$r'");
			}
	$query = 'SELECT * FROM tode';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="interview-preparation.php?int=1"</script>';}
       
}
      


	
?>




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Description</b><hr/></h1>
				
				<?php
                
                ?>
   	<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>

				<form   action="" method="post" autocomplete="off">
					<div class="form-group" style="width:100%;padding:10px">
						<label><strong>Description</strong></label>
                        <!--<textarea name="topic" rows="5000" cols="4000" placeholder="Description"></textarea>-->
						<textarea name="topic" id="editor1" rows="10" cols="80">
            <?php
			$i=$_GET['id'];
			$qu = mysqli_query($db,"SELECT * FROM hrtode WHERE sl_no='$i'");

			$row = mysqli_fetch_array($qu);
			error_reporting(E_ERROR | E_PARSE);
			echo '' .$row['name']; ?>
        </textarea>
		<input type="hidden" name="id" value="<?php  $i ?>">
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor1',
            {
                extraPlugins : 'youtube',
            });
        </script>
						
					</div>
				<center>	<input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3"></center>
					
				</form>
				



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
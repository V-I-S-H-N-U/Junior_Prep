<!--     review-resume   -->
<?php if (@$_GET['res'] == 0){?>
    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Review Resume</h4>

</div>

</div>

<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Review</h5>
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




		

	 
	 
	 
	 
<h1 class="text-center mb-5"><b>Add Review</b><hr/></h1>
				<div class="col-lg-8 m-auto">
				<?php
                
                ?>
   	
				<form   action="" method="post" autocomplete="off">
					<div class="form-group">
						<label><strong>Topic</strong></label>
						 <input type="text" name="topic" class="form-control" required>
						
					</div>
					<input type="submit" name="sub" value="Notify"  class="btn btn-success ml-3">
					
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

<th>Sl No.</th>
<th>Email</th>

<th>Resume</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php

//echo "" .$id;
$query = "SELECT * FROM revpdfa";
        $result = mysqli_query($db, $query) or die (mysqli_error($db));
		$c = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                                 
                echo '<tr>';
                echo '<td>'. $c++ .'</td>';
                echo '<td>'. $row['user'].'</td>';
                echo '<td>'. $row['name'].'</td>';
                
                      echo '<td class="text-center">
                      <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu">
                      <li>
                      <a href="resumes.php?res=3 & id='.$row['id'] .'" class="dropdown-item"><img src="../assets/img/icons/eye1.svg" class="me-2" alt="img">View Resume</a>
                      </li>
                      <li>
                      <a id="'.$row['id'] . '" onClick="getId(this)" class="dropdown-item"><img src="../assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Resume</a>
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
            window.location.href = 'resumes.php?res=4 & id='+hi,
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

<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     build-resume   -->
<?php if (@$_GET['res'] == 1){?>
    
    <?php include 'sidebar.php'; ?>
    <div class="page-wrapper">
<div class="content">
<body  style="background-color:white">
    <div class="container text-dark">
    <h1 class="text-center my-5 fw-bold">Resume Form</h1>
    <div class="form-container">
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <div class="border border-dark p-3 mb-3">    
                <h2>Profile Image</h2>
                <div class="mb-3">
                    <label class="form-label">Select a square image 1:1 (Recommended)</label>
                    <input class="form-control" name="profile_image" type="file" required>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Contact</h2>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div>
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profession</label>
                    <input type="text" class="form-control" name="profession" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" required>
                    <div class="form-text text-light">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone number</label>
                    <input type="tel" class="form-control" id="phone" name="phone"  required>
                  <!--  placeholder="0300-1234567" pattern="[0-9]{4}-[0-9]{7}"-->
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Skills (Max:5)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Skillset Name</label>
                    <input type="text" class="form-control" name="skill1" required>
                    <select class="form-select mt-2" name="skill_level1" required>
                        <option value="">Select stars based upon your skill level</option>
                        <option value="1">1 - Novice</option>
                        <option value="2">2 - Advanced Beginner</option>
                        <option value="3">3 - Competent</option>
                        <option value="4">4 - Proficient</option>
                        <option value="5">5 - Expert</option>
                    </select>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="btn btn-primary form-control" onclick="addSkill()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Hobbies (Max:4)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hobby</label>
                    <input type="text" name="hobby1" class="form-control" required>
                </div>
                <div id="addHobby"></div>
                <div class="mb-3">
                    <button type="button" id="hobby_hide" class="btn btn-primary form-control" onclick="addHobby()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>About Me</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Education (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">School/College/University</label>
                    <input type="text" name="institute1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Degree Name</label>
                    <input type="text" name="degree1" class="form-control">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label" >From</label>
                        <input type="text" name="from1" class="form-control" placeholder="dd/mm/yy">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label" >To</label>
                        <input type="text" name="to1" class="form-control" placeholder="dd/mm/yy">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Grade/Score/CGPA</label>
                    <input type="text" name="grade1" class="form-control">
                </div>
                <div id="addEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3">    
                <h2>Experience (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" name="title1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description1" class="form-control">
                </div>
                <div id="addExperience"></div>
                <div class="mb-3">
                    <button type="button" id="experience_hide" class="btn btn-primary form-control" onclick="addExperience()">+</button>
                </div>
            </div>
            <input style="background-color:rgb(0, 184, 184);color:white;border-color:rgb(0, 184, 184);" type="submit" value="Submit" class="form-control my-2">
        </form>
    </div>
    </div>
    <script src="app.js"></script>
    <?php include 'footer.php'; ?>
<?php exit; }  ?>

<!--     view-resume   -->
<?php if (@$_GET['res'] == 3){?>

    <?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Resume Review</h4>





</div>

<div class="page-btn">

<div class="page-btn">
<a href="add-topic.php" class="btn btn-added"  data-bs-toggle="modal" data-bs-target="#showpayment"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Review</a>
</div>

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
mysqli_query($db,"insert into rnotice values('','$v','$sub','$details',now())");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}
    $query = 'SELECT * FROM rnotice';
$result = mysqli_query($db, $query) or die (mysqli_error($db));

    while ($row = mysqli_fetch_assoc($result)) { 
echo ' <script>window.location="resumes.php?res=0"</script>';}
       
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
	<br>
		
	
	<div class="row">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>
	
	
	<br>
	
	<div class="row">
		<div class="col-sm-4">Select User</div>
		<div class="col-sm-5">
		<select name="users[]" class="form-control">
			<?php 
	$sql=mysqli_query($db,"select username,email from users where user_type='user'");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['email']."'>".$r['email']."</option>";
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




<div class="container mt-3 mb-3">
		<h1 style="text-align:center;text-decoration:underline;"><b><?php
        $id = $_GET['id'];
					
        $q = "SELECT * FROM revpdfa where id='$id'";

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
					
				$q = "SELECT * FROM revpdfa where id='$id'";

				$query = mysqli_query($db,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
                    $o = $row['id']
					?>

					
						
	<embed type="application/pdf" src="../pdfa/<?php echo '' .$name ; ?>" width="1000" height="900">		
<?php
$records = mysqli_query($db,"select * from revpdfa where id ='$o' LIMIT 1"); // fetch data from database

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





<!--     delete-resume   -->
<?php if (@$_GET['res'] == 4){?>
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
    if(!isset($_SESSION['admin_name'])){
		header('location:../error.php');
		exit;
	}

    $q = "SELECT * FROM revpdfa";

    $query = mysqli_query($db,$q);
    
    while($row=mysqli_fetch_array($query)) { 

        $name = $row['name'];
        $o = $row['id'];
    }

$d=$_GET['id'];

$records = mysqli_query($db,"select * from revpdfa where id = '$d' LIMIT 1"); 
$data = mysqli_fetch_array($records);
 $k=$data['id'];

echo "" .$k;



$del = mysqli_query($db,"DELETE from revpdfa where id = '$k'");
error_reporting(E_ERROR | E_PARSE);

header('location:resumes.php?res=6');
exit;
//header('location:arithmetic_aptitude.php');?>
<?php   include 'footer.php'   ?>
<?php exit; }  ?>

<!--     resume-confirm   -->
<?php if (@$_GET['res'] == 6){?>

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
	if(!isset($_SESSION['admin_name'])){
		header('location:../error.php');
		exit;
	}
    header('location:resumes.php?res=0');
    ?>

<?php   include 'footer.php'   ?>
<?php exit; }  ?>
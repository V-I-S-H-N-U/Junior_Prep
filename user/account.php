<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title"><?php if(@$_GET['q']==1) {
echo '<h4>Attend Quiz<h4><br>';
}?>




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
<div class="table-responsive">
<br><br>
<?php if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
	$eid=@$_GET['eid'];
	$sn=@$_GET['n'];
	$total=@$_GET['t'];
	$q=mysqli_query($db,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];}
$q1=mysqli_query($db,"SELECT * FROM quiz WHERE eid='$eid'");
while($row=mysqli_fetch_array($q1) )
{
$mk=$row['time'];}

	echo '<center><strong><span  style="border:solid rgb(0, 184, 184);padding:10px;background-color:rgb(0, 184, 184);color:white;" id="countdown" class="timer" type="submit"></span></strong></center>
	<script>
	var seconds ='.$mk.';
		function secondPassed() {
		var minutes = Math.round((seconds - 30)/60);
		var remainingSeconds = seconds % 60;
		if (remainingSeconds < 10) {
			remainingSeconds = "0" + remainingSeconds; 
		}
		document.getElementById("countdown").innerHTML = minutes + ":" +    remainingSeconds;
		if (seconds == 0) {
			clearInterval(countdownTimer);
			document.getElementById("countdown").innerHTML = "Time Over!";
			window.location = "update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'&user='.$_GET['user'].'";
			
		} else {    
			seconds--;
		}
		}
	var countdownTimer = setInterval("secondPassed()", 1000);
	</script>';}
?>


<br>


<?php
include_once '../connection.php';
?>


<!--home start-->
<?php if(@$_GET['q']==1) {
	
$email = $_GET['user'];
$result = mysqli_query($db,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');if(mysqli_num_rows($result)!=0){
	

echo  '<div class="panel" style="margin-top:-70px;"><div class="table-responsive"><table class="table table-striped title1">
<tr><td style="font-weight:900;"><b>S.N.</b></td><td style="font-weight:900;"><b>Topic</b></td><td style="font-weight:900;"><b>Total question</b></td><td style="font-weight:900;"><b>Total Marks</b></td><td style="font-weight:900;"><b>Negative Marks</b></td><td style="font-weight:900;"><b>Time limit</b></td><td style="font-weight:900;"><b>Action</b></td></tr>';
}
if(mysqli_num_rows($result)==0){
	echo '<center><h4>No records to show</h4></center>';
}
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
	$wrong = $row['wrong'];
    $time = $row['time'];
	$eid = $row['eid'];
$q12=mysqli_query($db,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$wrong. '&nbsp;/Question</td><td>'.$time.'&nbsp;Sec/Question</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'&user='.$_GET['user'].'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1" style="color:white;"><b style="font-weight:bold;">Start</b></span></a></b></td></tr>';
}
else
{
echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$wrong. '&nbsp;/Question</td><td>'.$time.'&nbsp;Sec/Question</td>
	<td><b><a href="account.php?q=result&eid='.$eid.'&user='.$email.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1" style="color:white;"><b style="font-weight:bold;">View Result</b></span></a></b></td></tr>';
}
}

$c=0;
echo '</table></div></div>';

}?>


<!--home closed-->

<!--quiz start-->
<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$q=mysqli_query($db,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );

echo '<div class="panel" style="margin:5%">';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
echo '<b style="font-weight:900;font-size:15px;">Question &nbsp;'.$sn.'&nbsp;:</b><br /><br><center style="font-weight:900;font-size:25px;">'.$qns.'</b><br /><br /></center>';
}
$q=mysqli_query($db,"SELECT * FROM options WHERE qid='$qid' " );
echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'&user='.$_GET['user'].'" method="POST"  class="form-horizontal">
<br />';

while($row=mysqli_fetch_array($q) )
{


$option=$row['option'];
$optionid=$row['optionid'];

echo'<div class="card"><div class="card-body" style="font-weight:bold;font-size:15px;"> <input style="cursor:pointer;" type="radio" name="ans" value="'.$optionid.'">&nbsp; ' .$option. ' <br /><br /></div></div>';
}
echo'<br /><center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button><center></form></div>';
//header("location:dash.php?q=4&step=2&eid=$id&n=$total");
}
//result display
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
$eid=@$_GET['eid'];
$email=$_GET['user'];
$q=mysqli_query($db,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
echo  '<div class="panel" style="margin-top:-60px;">
<center><h1 class="title" style="color:#660033"><u>Quiz Result</u></h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

while($row=mysqli_fetch_array($q) )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
	  <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
	  <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
$q1=mysqli_query($db,"SELECT SUM(score) as score FROM history WHERE email='$email'");
while($row=mysqli_fetch_array($q1) )
{
	$s=$row['score'];
echo '<tr style="color:#66CCFF"><td>Overall Score</td><td>'.$s.'</td></tr>';
}
echo '</table></div>';
echo '<br><center><a  href="account.php?q=1&user='.$_GET['user'].'"><button type="submit" class="btn-primary btn">Back</button></a></center>';
}

?>
<!--quiz end-->
<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($db,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=mysqli_query($db,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td></tr>';
}
echo'</table></div>';
}

//ranking start
if(@$_GET['q']== 3) 
{
$q=mysqli_query($db,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($db,"SELECT * FROM users WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];
$college=$row['college'];
}
$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';
}
echo '</table></div></div>';}
?>




</div>
</div>

</div>
</div>
</div>






<script src="../assets/js/jquery-3.6.0.min.js"></script>

<script src="../assets/js/feather.min.js"></script>

<script src="../assets/js/jquery.slimscroll.min.js"></script>

<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap4.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/plugins/select2/js/select2.min.js"></script>

<script src="../assets/js/moment.min.js"></script>
<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="../assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="../assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="../assets/js/script.js"></script>
</body>
</html>
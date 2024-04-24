<?php include 'sidebar.php'; ?>

<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<?php 
$i=$_GET['user'];
$qu = mysqli_query($db,"SELECT SUM(score) as score,email FROM history where email='$i'");
$row = mysqli_fetch_array($qu);
if($row['score'] != 0){
echo '<h4>'.$row['score'].'</h4>';}
else{
    echo '<h4>0</h4>';}
?>
<h5>Your Score</h5>
</div>
<div class="dash-imgs">
<i data-feather="award"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das1">
<div class="dash-counts">
<?php 
$qu = mysqli_query($db,"SELECT count(title) FROM quiz");
$row = mysqli_fetch_array($qu);
echo '<h4>'.$row['count(title)'].'</h4>';
?>
<h5>Total Quiz</h5>
</div>
<div class="dash-imgs">
<i data-feather="check-circle"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<?php 
$i=$_GET['user'];
$qu = mysqli_query($db,"SELECT count(user) FROM rnotice where user='$i'");
$row = mysqli_fetch_array($qu);
echo '<h4>'.$row['count(user)'].'</h4>';
?>
<h5>Resume Reviews</h5>
</div>
<div class="dash-imgs">
<i data-feather="file-text"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das3">
<div class="dash-counts">
<?php 
$i=$_GET['user'];
$qu = mysqli_query($db,"SELECT count(user) FROM notice where user='$i'");
$row = mysqli_fetch_array($qu);
echo '<h4>'.$row['count(user)'].'</h4>';
?>
<h5>Interview Replies</h5>
</div>
<div class="dash-imgs">
<i data-feather="mail"></i>
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

<th class="col-md-1">Rank</th>
<th class="col-md-6">Email</th>



<th class="col-md-1">score</th>
</tr>
</thead>
<tbody>
<?php
//ranking start

    
$query = 'SELECT SUM(score) as score,email FROM history GROUP BY email ORDER BY SUM(score) DESC ';
$result = mysqli_query($db, $query) or die (mysqli_error($db));
$c = 1;
    while ($row = mysqli_fetch_assoc($result)) {
                        
        echo '<tr>';
        echo '<td>'. $c++ .'</td>';
		$t=$row['email'];
		$s=$row['score'];
		$query1 = "SELECT username from users where email='$t'";
		$result1 = mysqli_query($db, $query1) or die (mysqli_error($db));
		while ($row = mysqli_fetch_assoc($result1)) {
        echo '<td>'. $row['username'] .'</td>';
	
        echo '<td>'. $s.'</td>';
        echo '</tr> ';
                }}$c=0; 
            
 
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
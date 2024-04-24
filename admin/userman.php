<?php include 'sidebar.php';?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>User Management</h4>

</div>
<div class="page-btn">
<a href="mentor.php?act=13" class="btn btn-added"><img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add Mentor</a>
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
<th class="col-md-3">Email</th>
<th class="col-md-1">Action</th>
</tr>
</thead>
<tbody>
<?php
//ranking start


    
$query = "SELECT * FROM users WHERE user_type='user'";
$result = mysqli_query($db, $query) or die (mysqli_error($db));
$c = 1;
    while ($row = mysqli_fetch_assoc($result)) {
                        
        echo '<tr>';
        echo '<td>'. $c++ .'</td>';
        echo '<td>'. $row['username'].'</td>';
        echo '<td>'. $row['email'].'</td>';
        echo '<td><b><a class="btn" id="'.$row['email'] . '" onClick="getId(this)"  style="margin:0px;background:red;color:white">&nbsp;<span class="title1"><b>Remove</b></span></a></b></td>';
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
            window.location.href = 'userrem.php?action=remove &id='+hi,
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


<?php include 'footer.php' ; ?>

<?php   include 'sidebar.php'   ?>
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Edit Topic </h4>

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
		$qu1 = mysqli_query($db,"SELECT * FROM techtode WHERE sl_no='$i'");
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
					<div class="form-group" style="width:100%;padding:10px">
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
					<input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3">
					
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
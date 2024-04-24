<?php include 'sidebar.php';?>


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Profile Settings</h4>
            </div>
        </div>

        <div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Topic</h5>
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
                                $em = $_POST['email'];
                                $ps = md5($_POST['pass']);
                                $cps = md5($_POST['cpass']);
                                   
                                if($cps == $ps){
                                $qil = "UPDATE `users` SET `email`='$em',`password`='$ps' WHERE ID=56";
                                $run = mysqli_query($db,$qil) or die(mysqli_error());

	                            $query = 'SELECT * FROM users';
                                $result = mysqli_query($db, $query) or die (mysqli_error($db));

                                while ($row = mysqli_fetch_assoc($result)) { 
                                echo ' <script>window.location="profile.php"</script>';}
       
                                }
                            
                            else{
                                echo ' <script>alert("Password does not match");</script>';
                            }}
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group" >
                        
                                <label for="fname"><strong>Username</strong></label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="<?php echo "{$_SESSION['admin_name']}";   
                                $query1 = "SELECT * FROM users where ID=56";
                                $result1 = mysqli_query($db, $query1) or die (mysqli_error($db));
                                while ($row = mysqli_fetch_assoc($result1)) {
                                ?>" disabled><br>

                                <label for="email"><strong>Email</strong></label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="<?php  echo '' . $row['email']; }?>" required><br>
                        
                                <label for="pass"><strong>New Password</strong></label>
                                <input class="form-control" type="password" id="email" name="pass" placeholder="••••••••" required><br>
                        
                                <label for="cpass"><strong>Confirm Password</strong></label>
                                <input class="form-control" type="password" id="email" name="cpass" placeholder="••••••••" required> 
                    
                            </div>
                            <input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3">
                        </form> 
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?php include 'footer.php';?>
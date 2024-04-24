<?php include 'sidebar.php'; ?>



<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Enquiries</h4>
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
                                

                                $us = $_POST['username'];
                                $em = $_POST['email'];
                                $enq = $_POST['enq'];
                                $di = $_GET['user'];
                                date_default_timezone_set('Asia/Kolkata');
                                $date = date('m/d/Y h:i:s a', time());

                                $select = " SELECT * FROM users WHERE username = '$us' && email = '$di' ";

                                $result3 = mysqli_query($db, $select);

                                 if(mysqli_num_rows($result3) == 0){

                                   echo ' <script>alert("Username/Email not registered");</script>';

                                  }
                                else{
                                    

                                $q = "INSERT INTO `enqui`(`username`, `email`, `descr`,`date`) VALUES ('$us','$em','$enq','$date')";
                                $result33 = mysqli_query($db, $q);
                           echo ' <script>window.location="enq.php?okl=0&user='.$_GET['user'].'"</script>';}
                        
                              }
                                
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
                                <input class="form-control" type="text" id="username" name="username" placeholder="Your Username" required><br>

                                <label for="email"><strong>Email</strong></label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Your Email" required><br>
                        
                                <label for="pass"><strong>Enquiry</strong></label>
                                <textarea rows="3" cols="5" id="enq" name="enq" placeholder="Your Enquiry"  type="text" required></textarea><br>

                            </div>
                         <center>   <input type="submit" name="sub" value="Submit"  class="btn btn-success ml-3"></center>
                        </form> 
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?php include 'footer.php'; ?>
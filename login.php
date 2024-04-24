


<?php

@include 'connection.php';

session_start();


if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $pass = md5($_POST['password']);
   

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($db, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['username'];
         header('location:admin/index.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['username'];
         header('location:user/user-index.php?user='.$email.'');
         
      }elseif($row['user_type'] == 'mentor'){

         $_SESSION['mentor_name'] = $row['username'];
         header('location:mentor/index.php');
         
      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>JUNIOR PREP</title>
   <link rel="shortcut icon" type="image/x-icon" href="images/logo1-small.png">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/style3.css">

</head>
<body>

<div class="form-container" >

   <form  style="border-radius:50px;" action="" method="post" >
   
   <img style="margin-top:20px;width:15%;" src="images/logo1-small.png" alt=""><h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg" style="border-radius:50px;">'.$error.'</span>';
         };
      };
      ?>
      <input style="border-radius:50px;" type="email" name="email" required placeholder="enter your email">
      <input style="border-radius:50px;" type="password" name="password" required placeholder="enter your password">
      <input style="border-radius:50px;" type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>
   
</div>


</body>
</html>
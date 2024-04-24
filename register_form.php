<?php

@include 'connection.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($db, $_POST['name']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($db, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO users(username, email, password) VALUES('$name','$email','$pass')";
         mysqli_query($db, $insert);
         header('location:login.php');
      }
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
   
<div class="form-container">

   <form action="" method="post" style="border-radius:50px;">
      <h3> <img class="col-md-2"style="margin-top:20px;width:10%;" src="images/logo1-small.png" alt=""><h3 style="margin-left:5px;">register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg" style="border-radius:50px;">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" style="border-radius:50px;" name="name" required placeholder="enter your name">
      <input type="email" style="border-radius:50px;" name="email" required placeholder="enter your email">
      <input type="password" style="border-radius:50px;" name="password" required placeholder="enter your password">
      <input type="password" style="border-radius:50px;" name="cpassword" required placeholder="confirm your password">
      <input type="submit" style="border-radius:50px;" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>
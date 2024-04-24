<?php
//session_start();

/*$username = "";
$email = "";
$errors = array();

*/
 $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'mini' ) or die(mysqli_error($db));


/*

        //reg user
if(isset($_POST['reg_user'])) {

        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($username)){ array_push($errors, "Username is required");}
        if(empty($email)){ array_push($errors, "Email is required");}
        if(empty($password)){ array_push($errors, "Password is required");}
}

$user_check_query = "SELECT * FROM users WHERE USERNAME='$username' OR email='$email' LIMIT 1";
$result= mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user){
        if($user['USERNAME'] == $username){
                array_push($errors, "username already exists");
}
        if($user['email'] == $email){
                array_push($errors, "email already exists");
        }
}

if(count($errors)==0){
        $password = md5($password);
        $query = "INSERT INTO users (USERNAME, email, PASSWORD) VALUES ('$username','$email','$password')";
        mysqli_query($db, $query);
        $_SESSION['username']= $username;
        $_SESSION['success'] = "you are now logged in";
        header('location: index.php');
}

if(isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($username)){ array_push($errors, "Username is required");}
        if(empty($password)){ array_push($errors, "password is required");}

        if(count($errors)==0){
                $password = md5($password);
                $query = "SELECT * FROM users WHERE USERNAME='$username' AND PASSWORD='$password'";
                mysqli_query($db, $query);
                if(mysqli_num_row($results)==1){
                $_SESSION['username']= $username;
                $_SESSION['success'] = "you are now logged in";
                header('location: index.php');}
                else{array_push($errors, "Wrong username");}
        }
}*/
?>
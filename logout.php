
<?php

session_start();

session_destroy();

echo "<script>alert('You are Logged Out!'); window.location.href='login.php';</script>";  

?>
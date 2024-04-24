<?php 
if(isset($_POST['topic'])){
    $editortext = $_POST['topic'];
    $id =  $_POST['id'];
    include('../connection.php');
   $query = mysqli_query($db,"UPDATE tode SET `name`='$editortext' WHERE sl_no='$id'");
    if($query){
        header("arithmetic-notes.php?a=0");
    }
    else{
        //header("arithmetic-notes.php?a=0");
    }
}
else{
    //no action
}
?>
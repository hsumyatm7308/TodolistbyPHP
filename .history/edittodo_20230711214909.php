<?php 


if($_SERVER["REQUEST_METHOD"]==='POST'){
    if(isset($_POST['edit-task'])){
        header("Locaion: editpage.php");
        exit;
    }
}


?>
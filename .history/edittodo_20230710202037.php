<?php

// require "index.php";
// require "create.php";
require "database.php";
// require "todolist.php";

if(isset($_POST['edit-task'])){
    $getdata = $_POST['textbox'];
    echo "hie".$getdata;
}
?>



<?php 
require "database.php";


if (isset($_GET['edit-task']) && empty($_GET['edkit-task'])) {
    $editTaskID = $_GET['edit-task'];
    

   
    echo "Editing task with ID: $editTaskID";
}

?>

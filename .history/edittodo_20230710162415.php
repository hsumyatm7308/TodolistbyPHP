<?php 
require "database.php";


if (isset($_GET['edit-task']) && empty($_GET['edkit-task'])) {
    $editTaskID = $_GET['edit-task'];
    

    $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :id");
   
    echo "Editing task with ID: $editTaskID";
}

?>

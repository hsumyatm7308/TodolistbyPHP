<?php 
require "database.php";


if (isset($_GET['edit-task']) && empty($_GET['edkit-task'])) {
    $editTaskID = $_GET['edit-task'];
    
$task = $gettask;
    $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :id");

    $stmt->execute();
   
    echo "Editing task with ID: $editTaskID";
}

?>

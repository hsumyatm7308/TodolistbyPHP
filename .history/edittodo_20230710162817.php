<?php 
require "database.php";

if (isset($_GET['edit-task']) && empty($_GET['edkit-task'])) {
    $editTaskID = $_GET['edit-task'];
    
    global $task;

    $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :id");

    $stmt->bindParam(':task',$task);
    $stmt->bindParam(':id',$editTaskID);

    echo "task".$task;

    $stmt->execute();
   
    echo "Editing task with ID: $editTaskID";
}

?>

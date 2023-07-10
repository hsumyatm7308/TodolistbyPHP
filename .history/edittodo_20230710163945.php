<?php 
require "database.php";

if (isset($_GET['edit-task']) && !empty($_GET['edit-task'])) {
    $editTaskID = $_GET['edit-task'];
    
    

   
    echo "Editing task with ID: $editTaskID";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    $task = $_POST['textbox'];

    $editTaskID = $_GET['edit-task'];
    $newTask = $_POST['new-task'];

    try {
        $stmt = $conn->prepare("UPDATE todolist SET task = :newTask WHERE id = :editTaskID");
        $stmt->bindParam(':newTask', $newTask);
        $stmt->bindParam(':editTaskID', $editTaskID);
        $stmt->execute();

        echo "Task updated successfully!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>







<?php
ob_start(); 

require_once("create.php");
require_once("todoform.php");
require_once("database.php");

if (isset($_POST['delete-task'])) {
    $deleteTaskID = $_POST['delete-task'];

    try {
        $stmt = $conn->prepare("DELETE FROM todolist WHERE id = :delid");
        $stmt->bindParam(":delid", $deleteTaskID);
        $stmt->execute();

       

        ob_end_clean(); 

        header("Location: index.php");
        exit();
       
    } catch (Exception $e) {
        echo "Error found: " . $e->getMessage();
    }
}


if (isset($_GET['id'])) {
    $completedTaskId = $_GET['id'];
    try {
        // Mark the task as complete in the database
        $completeStmt = $conn->prepare("UPDATE todolist SET complete = 1 WHERE id = :completedTaskId");
        $completeStmt->bindParam(":completedTaskId", $completedTaskId);
        $completeStmt->execute();

        $stmt = $conn->prepare("SELECT id, task FROM todolist WHERE id NOT IN (SELECT id FROM todolist WHERE complete = 1)");
        
        $stmt->execute();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<?php
ini_set('display_errors', 1);
require_once("database.php");

if (isset($_GET['id'])) {
    $comid = $_GET['id'];

    try {
        $stmt = $conn->prepare("SELECT id, task FROM todolist WHERE id = :id");
        $stmt->bindParam(":id", $comid);
        $stmt->execute();

        $completedTask = $stmt->fetch();

        // Insert completed task into completed_tasks table
        $insertStmt = $conn->prepare("INSERT INTO completed_tasks (comtask) VALUES (:task)");
        $insertStmt->bindParam(":task", $completedTask['task']);
        $insertStmt->execute();

        echo "Task completed and inserted into completed_tasks table.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


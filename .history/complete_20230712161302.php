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
        $insertStmt = $conn->prepare("INSERT INTO completed_tasks (comtask,todolist_id) VALUES (:task,:todoid)");
        $insertStmt->bindParam(":task", $completedTask['task']);
        $insertStmt->bindParam(":todoid", $comid);
        $insertStmt->execute();

        $todonull = null;
        $delestmt = $conn->prepare("DELETE FROM todolist WHERE id = :delid");

        $delestmt = $conn->prepare("UPDATE todolist SET task = :task  WHERE id = :nullid");
        $delestmt->bindParam(":task",$todonull);
        $delestmt->bindParam(":nullid",$comid);
        $delestmt->execute();

        echo "Task completed and inserted into completed_tasks table.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


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

     
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}


if (isset($_POST['complete-trash'])) {
    $delid = $_POST['complete-trash'];

    try {
        $stmt = $conn->prepare("DELETE ct FROM completed_tasks ct
                                INNER JOIN todolist tl ON ct.todolist_id = tl.id
                                WHERE ct.id = :id");
        $stmt->bindParam(":id", $delid);
        $stmt->execute();

        // Redirect back to the desired page after deletion
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>


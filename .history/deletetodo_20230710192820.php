<?php
require_once("create.php");
require_once("updatetodo.php");
require_once("database.php");
require_once("edittodo.php");


if (isset($_POST['delete-task'])) {
    $deleteTaskID = $_POST['delete-task'];

    try {
        $stmt = $conn->prepare("DELETE FROM todolist WHERE id = :delid");
        $stmt->bindParam(":delid", $deleteTaskID);
        $stmt->execute();

      
    } catch (Exception $e) {
        echo "Error found: " . $e->getMessage();
    }
}
?>



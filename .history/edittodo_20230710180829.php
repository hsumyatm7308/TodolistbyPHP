<?php
require_once("create.php");
require_once("updatetodo.php");
require_once("database.php");

if (isset($_POST['edit-task'])) {
    $editTask = $_POST['edit-task'];

    try {
        $stmt = $conn->prepare("DELETE FROM todolist WHERE id = :delid");
        $stmt->bindParam(":delid", $editTask);
        $stmt->execute();

      
    } catch (Exception $e) {
        echo "Error found: " . $e->getMessage();
    }
}
?>



<?php
require_once("create.php");
require_once("todoform.php");
require_once("database.php");

if (isset($_POST['delete-task'])) {
    $deleteTaskID = $_POST['delete-task'];

    try {
        $stmt = $conn->prepare("DELETE FROM todolist WHERE id = :delid");
        $stmt->bindParam(":delid", $deleteTaskID);
        $stmt->execute();

        // header("Location: index.php");
    } catch (Exception $e) {
        echo "Error found: " . $e->getMessage();
    }
}
?>

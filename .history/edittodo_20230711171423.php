<?php
require_once("create.php");
require_once("todoform.php");
require_once("database.php");



if (isset($_POST['update'])) {
    if (isset($_POST['edit-task'])) {
        $editId = $_POST['edit-task'];

        $task = $_POST['textbox'];

        try {

            $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :id");
            $stmt->bindParam(":task", $task);
            $stmt->bindParam(":id", $editId);
            $stmt->execute();
            echo $editId;

        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    // Rest of your code
}


?>
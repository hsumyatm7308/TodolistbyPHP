<?php
require_once("create.php");
require_once("updatetodo.php");
require_once("database.php");

if (isset($_POST['edit-task']) && isset($_POST['textbox'])) {
    $editTask = $_POST['edit-task'];



    try {
        $stmt = $conn->prepare("UPDATE todolist SET task = :newtask WHERE id = :edittask");
        $stmt->bindParam(":edittask", $editTask);
        $stmt->execute();

      
    } catch (Exception $e) {
        echo "Error found: " . $e->getMessage();
    }
}
?>



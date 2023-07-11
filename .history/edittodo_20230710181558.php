<?php
require_once("create.php");
require_once("updatetodo.php");
require_once("database.php");

if (isset($_POST['edit-task'])) {
    $editTask = $_POST['edit-task'];

    $task = $_POST['textbox'];


    try {
        $stmt = $conn->prepare("UPDATE todolist SET task = :newtask WHERE id = :edittask");
        $stmt->bindParam(":edittask", $editTask);
        $stmt->bindParam(':newtask',$task);
        $stmt->execute();

      echo "edkittask". $editTask . "task". $task;
    } catch (Exception $e) {
        echo "Error found: " . $e->getMessage();
    }
}
?>



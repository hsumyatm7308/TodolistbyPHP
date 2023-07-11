<?php
require_once("create.php");
require_once("updatetodo.php");
require_once("database.php");


if (isset($_POST['edit-task'])) {
    global $conn;

    

    $editTask = $_POST['edit-task'];
    try {
        $stmt = $conn->prepare("UPDATE todolist SET task = :newtask WHERE id = :edittask");

        $stmt->bindParam(":edittask", $editTask);
        $stmt->bindParam(':newtask', $getdata);
        $stmt->execute();

        echo $getdata;

    } catch (Exception $e) {
        echo "Error found: " . $e->getMessage();
    }



}

?>



<?php
require_once("create.php");
require_once("updatetodo.php");
require_once("database.php");


if (isset($_POST['delete-task'])) {
    $deleteTaskID = $_POST['delete-task'];

    

    echo "Task with ID $deleteTaskID deleted successfully!";
}
?>

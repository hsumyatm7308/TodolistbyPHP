<?php
require_once("create.php");
require_once("updatetodo.php");

if (isset($_POST['delete-task'])) {
    $deleteTaskID = $_POST['delete-task'];

    // Perform the necessary operations to delete the task based on the ID
    // ...

    echo "Task with ID $deleteTaskID deleted successfully!";
}
?>

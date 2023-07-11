<?php
require "database.php";





    if (isset($_GET['edit-task']) && !empty($_GET['edit-task'])) {
        $task = $_POST['textbox'];

        $editTaskID = $_GET['edit-task'];

        try {
            $stmt = $conn->prepare("UPDATE todolist SET task = :newTask WHERE id = :editTaskID");
            $stmt->bindParam(':newTask', $task);
            $stmt->bindParam(':editTaskID', $editTaskID);
            $stmt->execute();

            echo "Task updated successfully!";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }


        echo $taskl
    }



?>
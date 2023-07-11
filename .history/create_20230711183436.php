<?php
ini_set('display_errors', 1);

require_once("database.php");
require_once("update.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $getdata = $_POST['textbox'];

    if (isset($_POST['submit'])) {
        try {
            $stmt = $conn->prepare("INSERT INTO todolist (task) VALUES (:task)");

            $task = $getdata;

            if (empty($task)) {
                echo "";
            } else {
                $stmt->bindParam(':task', $task);
                $stmt->execute();
            }
        } catch (Exception $e) {
            echo "Error Found: " . $e->getMessage();
        }
    }

    if (isset($_POST['update'])) {
        // if (isset($_POST['update'])) {
            $editId = $_POST['edit-task'];

            $task = $_POST['textbox'];

            try {
                $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :id");
                $stmt->bindParam(":task", $task);
                $stmt->bindParam(":id", $editId);
                $stmt->execute();
            } catch (Exception $e) {
                echo "Error Found: " . $e->getMessage();
            }

            echo $editId;
        // }
    }

    echo "update";
}
?>

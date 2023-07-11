<?php
ini_set('display_errors', 1);

require_once("database.php");
require_once("edittodo.php");

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



                if (isset($_POST['edit-task'])) {

                    // $getdata = 'hkjsdfs';
             
                     $editId = $_POST['edit-task'];
             
             
                     try {
             
                         $upd = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :updid");
             
             
                         $upd->bindValue(':task', $getdata);
                         $upd->bindParam(':updid', $editId);
                         $upd->execute();
             
                         
             
                     } catch (Exception $e) {
                         echo "Error Found: " . $e->getMessage();
                     }
             
                 }
            }

          


        } catch (Exception $e) {
            echo "Error Found: " . $e->getMessage();
        }
    }






}
?>
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
            }
        } catch (Exception $e) {
            echo "Error Found: " . $e->getMessage();
        }
    }






    if (isset($_POST['edit-task'])) {

        $editId = $_POST['edit-task'];

       




        try {
          
        $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :updid");
        

        $stmt->bindParam(':task',$getdata);
        $stmt->bindParam(':updid',$editId);

          
        } catch (Exception $e) {
            echo "Error Found: " . $e->getMessage();
        }
      
    }

}
?>
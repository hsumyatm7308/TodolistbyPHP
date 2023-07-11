<?php
require_once("create.php");
require_once("todoform.php");
require_once("database.php");
require_once("index.php");



// $data = [];

// function editfun(){
   

    if (isset($_POST['edit-task'])) {

       $getdata = 'hkjsdfs';

        $editId = $_POST['edit-task'];


        try {

            $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :updid");


            $stmt->bindValue(':task', $getdata);
            $stmt->bindParam(':updid', $editId);
            $stmt->execute();


        } catch (Exception $e) {
            echo "Error Found: " . $e->getMessage();
        }

    }
// }

// return $data;


?>
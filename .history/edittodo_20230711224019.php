<?php
ini_set('display_errors', 1);
require_once("database.php");


if(isset($_POST['edit-task'])){

    $editid = $_POST['edit-task'];

    try {
        $stmt = $conn->prepare("SELECT id, task FROM todolist WHERE id = :editid");

        


        $stmt->bindParam(":editid",$editid);
        $stmt->execute();
    } catch (Exception $e) {
        echo "Found Error: " . $e->getMessage();
    }

    echo $editid."edit";
}



?>







<?php


require_once("edittodo.php");
require_once("editpage.php");
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['update'])) {

      $id = $_POST["updat-task"];

      try{

        $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :upid");

      }catch(Exception $e){

        echo "error found :".$e->getMessage();

      }

      


    }

}

?>
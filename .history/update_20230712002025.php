<?php


require_once("edittodo.php");
require_once("editpage.php");
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['update'])) {

      $gettask = $_POST["updat-task"];
      $editid = $_GET['id'];

      try{

        $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :upid");
        $stmt->bindParam(":task",$gettask);
        $stmt->bindParam(":upid",$gettask);

      }catch(Exception $e){

        echo "error found :".$e->getMessage();

      }

      


    }

}

?>
<?php
ob_start();

require_once("create.php");
require_once("todoform.php");
require_once("complete.php");
require_once("database.php");

if (isset($_POST['delete-task'])) {
    $deleteTaskID = $_POST['delete-task'];

    try {
        $stmt = $conn->prepare("DELETE FROM todolist WHERE id = :delid");
        $stmt->bindParam(":delid", $deleteTaskID);
        $stmt->execute();


      


        ob_end_clean();

        header("Location: index.php");
        exit();

    } catch (Exception $e) {
        echo "Error found: " . $e->getMessage();
    }
}


// if (isset($_GET['id'])) {
//     $comid = $_GET['id'];

//     try {
    
     
//     } catch (Exception $e) {
//         echo "Error: " . $e->getMessage();
//     }
// }




?>
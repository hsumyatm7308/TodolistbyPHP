<?php
// session_start();
ini_set('display_errors', 1);

require_once("database.php");
require_once("updatetodo.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["completeid"])) {
    $completeids = $_POST["completeid"];

   

    try {
        global $conn;


        foreach($completeids as $completeid){
            $stmt = $conn->prepare("SELECT id,task FROM todolist WHERE id = :complete");

            $stmt->bindParam(':complete',$id);

            $id = $completeid;
       
        
            $stmt->execute();
        }
       



    } catch (Exception $e) {
        echo "Found Error: " . $e->getMessage();
    }
}

?>

<!-- complete work -->
<form action="" method="post" class="mt-3" enctype="multipart/form-data">
    <h3 class="text-gray-400 ml-7 mb-1">Complete</h3>

   
   


</form>
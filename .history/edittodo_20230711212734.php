<?php
// require_once("create.php");
require_once("todoform.php");
require_once("database.php");
// require_once("index.php");



// $data = [];

// function editfun(){
   

  
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


// }

// return $data;


?>
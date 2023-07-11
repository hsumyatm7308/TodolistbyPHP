<?php
require_once("create.php");
require_once("todoform.php");
require_once("database.php");



// $data = [];

// function editfun(){
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        global $conn;
    
        if (isset($_POST['edit-task'])) {
    
            $editId = $_POST['edit-task'];
        
            // $task = $_POST['textbox'];
        
            try {
        
                $stmt = $conn->prepare("SELECT id, task,complete FROM todolist WHERE id = :id");
        
            //     // $stmt->bindParam(":task", $task);
                $stmt->bindParam(":id", $editId);
                $stmt->execute();
        
                echo $editId."edit";

               $selectedData = $stmt->fetch(PDO::FETCH_ASSOC);
        
               $getask = "jksfdsl";

               $upd = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :updid");
        

               $upd->bindParam(':task',$getask);
               $upd->bindParam(':id',$selectedData['id']);


               

            //    $upd->execute();


               echo "<pre>".print_r($selectedData['id'],true)."</pre>";


            } catch (Exception $e) {
                echo "Error Found: " . $e->getMessage();
            }
    
        
        }
    
    }
// }

// return $data;


?>
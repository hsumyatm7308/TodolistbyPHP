<?php 


    
    if(isset($_POST['edit-task'])){
        $editask = $_POST['edit-task'];

        $stmt = $conn->prepare("UPDATE todolist SET task = :edit WHERE id = :id");

        $stmt->bindParam(':id',$editask);
        $stmt->bindParam(":edit",$update);

        
    }


?>
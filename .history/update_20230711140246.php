<?php 


    function update(){
        $data = "hello"; // New data to be updated

        // Perform update operations here (e.g., update data in the database)


      if(isset($_POST['edit-task'])){
        $editask = $_POST['edit-task'];

        return $editask;
      }
        
    }


?>
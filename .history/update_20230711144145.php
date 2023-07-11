<?php 


    function update(){
        $data = "hello"; // New data to be updated

        // Perform update operations here (e.g., update data in the database)

        if (isset($_POST['taskId'])) {
            $taskId = $_POST['taskId'];
            // Perform update operations with the $taskId
         
         
            // Call the update function or write your update logic here
        }

        return $data;

  
        
    }


?>
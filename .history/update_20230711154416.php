<?php 


function update()
{
    if (isset($_POST['taskId'])) {
        $taskId = $_POST['taskId'];
        // Perform update operations with the $taskId
        
        // Return the $taskId
        echo $taskId;
    }

    return ""; // Return an empty string if no update was performed
}
 
    
const submitBtn = document.getElementById('submitBtn');
                submitBtn.setAttribute('name', 'update');

?>
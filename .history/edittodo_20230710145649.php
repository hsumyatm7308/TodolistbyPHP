<?php 
require "updatetodo.php";

$id = $_GET['edit-task'];

// Perform the necessary operations to edit the task based on the ID
// ...

if (isset($id)) {
    echo "Editing task with ID: $id";
} else {
    echo "No task ID specified.";
}

echo "<pre>".print_r($id,true)."</pre>";
?>

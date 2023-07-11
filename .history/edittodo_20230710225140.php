<?php

// require "index.php";
// require "create.php";
require "database.php";



function edittaskfun()
{
    if (isset($_POST['add'])) {

        try {
            global $conn;

            $stmt = $conn->prepare("SELECT id, task FROM todolist");
            $stmt->execute();
        } catch (Exception $e) {
            echo "Found Error: " . $e->getMessage();
        }
    }
}

?>



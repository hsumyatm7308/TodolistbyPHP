<?php
require_once("create.php");
require_once("todoform.php");
require_once("database.php");


    if (isset($_GET['edit-task']) && !empty($_GET['edit-task'])) {
        $task = $_POST['textbox'];

        $editTaskID = $_GET['edit-task'];

       echo $editTaskID;


        echo $task;
    }



?>
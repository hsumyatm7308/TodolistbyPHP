<?php
session_start();
ini_set('display_errors', 1);

require_once("database.php");



// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     global $conn;

//     $getdata = $_POST['textbox'];


//         try {
//             $stmt = $conn->prepare("INSERT INTO todolist (task) VALUES (:task)");
//             $task = $getdata;

//             if (!empty($task)) {
//                 $stmt->bindParam(':task', $task);
//                 $stmt->execute();
//             }


//             $_SESSION['task'] = $task;
          


//         } catch (Exception $e) {
//             echo "Error Found: " . $e->getMessage();
//         }


// }



if(isset($_POST['add'])){
    
}

?>





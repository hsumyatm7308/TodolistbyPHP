<?php
session_start();
ini_set('display_errors', 1);

require_once("database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    $getdata = $_POST['textbox'];


        try {
            $stmt = $conn->prepare("INSERT INTO todolist (task) VALUES (:task)");
            $task = $getdata;

            if (!empty($task)) {
                $stmt->bindParam(':task', $task);
                $stmt->execute();
            }


          


        } catch (Exception $e) {
            echo "Error Found: " . $e->getMessage();
        }

    
        // if (isset($_POST['edit-task']) && !empty($_POST['edit-task'])) {
        //     global $conn;
    
        //     $editTask = $_POST['edit-task'];
        //     try {
        //         $stmt = $conn->prepare("UPDATE todolist SET task = :newtask WHERE id = :edittask");
    
        //         $stmt->bindParam(":edittask", $editTask);
        //         $stmt->bindParam(':newtask', $getdata);
        //         $stmt->execute();
    
    
        //     } catch (Exception $e) {
        //         echo "Error found: " . $e->getMessage();
        //     }
    
        //     echo $getdata;
    
    
        // }


}


?>




<!-- to do form  -->
<!-- <form action="index.php" method="post" enctype="multipart/form-data">


    <div class="w-full h-auto flex justify-center items-center p-1">
        <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center rounded-3xl">
            <input type="text" name="textbox"
                class="w-[85%] bg-stone-200 rounded-tl-3xl rounded-bl-3xl p-3 focus:outline-none"
                placeholder="Text item">

            <button type="submit" name="create" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 mr-2 text-stone-500 hover:text-stone-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>

    </div>
    <hr class="mt-3">
</form> -->
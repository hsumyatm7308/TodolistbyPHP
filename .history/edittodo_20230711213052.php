<?php
require_once("create.php");
require_once("todoform.php");
require_once("database.php");
// require_once("index.php");



// $data = [];

// function editfun(){
   

  
    if (isset($_POST['edit-task'])) {

        // $getdata = 'hkjsdfs';
 
         $editId = $_POST['edit-task'];
 
 
         try {
 
             $upd = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :updid");
 
 
             $upd->bindValue(':task', $getdata);
             $upd->bindParam(':updid', $editId);
             $upd->execute();
 
             
 
         } catch (Exception $e) {
             echo "Error Found: " . $e->getMessage();
         }
 
     }


// }

// return $data;


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            font-family: sans-serif;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>

</head>

<body>
    <div class="w-screen h-screen container flex justify-center items-center">
        <div class="w-[400px] h-[600px] bg-stone-100">
            <!-- header nav  -->
            <div class="w-full h-14 flex justify-between items-center p-8">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </div>
                <div>
                    <h4> Daily List</h4>
                </div>
            </div>


         


           


            <?php

            include("todoform.php");


            ?>

            <div class="w-full h-[500px] overflow-y-scroll scrollbar-hide">

                <?php

            
                


                ?>
            </div>







        </div>
    </div>










</body>

</html>
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

                include("update.php");
                // include("complete.php");
                // include("edittodo.php");
                include("deletetodo.php");

                ?>
            </div>







        </div>
    </div>




  
    <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const editBtns = document.querySelectorAll('[class^="editbtn-"]');

        editBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                const taskId = btn.className.split(' ')[1].split('-')[1];
                const submitBtn = document.getElementById('submitBtn');

                submitBtn.name = 'update';
                submitBtn.value = taskId;
            });
        });
    });
</script> -->


<button type="text" class="mr-4 editbtn" data-taskid="<?php echo $row['id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
    </svg>
</button>
<input type="hidden" name="edit-task-id" value="<?php echo $row['id']; ?>">





</body>

</html>
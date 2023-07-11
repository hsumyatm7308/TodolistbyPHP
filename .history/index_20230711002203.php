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



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editBtns = document.getElementsByClassName('editbtn');
        const submitBtn = document.getElementById('submitBtn');

        for (let i = 0; i < editBtns.length; i++) {
            editBtns[i].addEventListener('click', function() {
                const taskId = this.getAttribute('data-taskid');
                submitBtn.name = 'update';
                submitBtn.value = taskId;
            });
        }
    });
</script>



</body>

</html>
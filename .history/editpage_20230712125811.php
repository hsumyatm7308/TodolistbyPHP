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




            <form action="update.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" id="">

                <div class="w-full h-auto flex justify-center items-center p-1">
                    <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center rounded-3xl">
                        <input type="text" name="updattask"
                            class="w-[85%] bg-stone-200 rounded-tl-3xl rounded-bl-3xl p-3 focus:outline-none"
                            placeholder="Text item">


                        <button type="submit" name="update" id="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-stone-500 hover:text-stone-600 mr-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                            </svg>

                        </button>

                    </div>
                </div>
                <hr class="mt-3">



            </form>




            <div class="w-full h-[500px] overflow-y-scroll scrollbar-hide">
                <?php

                require_once("edittodo.php");
                require_once("update.php");

                ?>

            </div>







        </div>
    </div>










</body>

</html>
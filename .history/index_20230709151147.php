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

            include "todoform.php";
            
            ?>
         


         
            <!-- complete work -->
            <form action="" method="post" class="mt-3" enctype="multipart/form-data">
                <h3 class="text-gray-400 ml-7 mb-1">Complete</h3>

                <div class="w-full h-auto flex justify-center items-center p-1">


                    <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center p-3">

                        <span>
                            <i class="fa-solid fa-circle-check text-green-600"></i>
                            <span class="ml-1">to do homework</span>
                        </span>

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>

                        </div>

                    </div>



                </div>

                <div class="w-full h-auto flex justify-center items-center p-1">

                    <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center p-3">

                        <span>
                            <i class="fa-solid fa-circle-check text-green-600"></i>
                            <span class="ml-1">to do homework</span>
                        </span>

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>


                        </div>

                    </div>



                </div>
            </form>

        </div>
    </div>
</body>

</html>
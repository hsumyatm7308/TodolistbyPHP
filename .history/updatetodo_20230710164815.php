<?php

// session_start();
ini_set('display_errors', 1);

require_once("database.php");
require_once("create.php");
// require_once("edittodo.php");

    try {
        global $conn;

        $stmt = $conn->prepare("SELECT id,task FROM todolist");
        $stmt->execute();
    
    
        
    
    
    } catch (Exception $e) {
        "Found Error : " . $e->getMessage();
    }


?>








<!-- update to do  -->
<form action="" method="post" class="mt-3" enctype="multipart/form-data">
    <h3 class="text-gray-400 ml-7 mb-1">To do</h3>


    <?php while ($row = $stmt->fetch()): ?>
        <div name="taskitems" class="w-full h-auto flex justify-center items-center p-1">


            <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center p-3">
                <span>
                    <button class="complete-check">
                        <i class="fa-regular fa-circle-check"></i>
                    </button>
                    <span class="ml-1">
                        <?php echo $row['task'] ?>
                    </span>
                </span>

                <div name="index.php?edit-task=<?php $row['id'] ?>">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg> -->


                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </div>
            </div>



        </div>

    <?php endwhile; ?>







</form>




<script>
    const completeCheck = document.querySelectorAll('.complete-check');

    for (let i = 0; i < completeCheck.length; i++) {
        completeCheck[i].addEventListener('click', function() {
            completeCheck[i].parentElement.parentElement.remove();
            console.log('Task removed');
        });
    }
</script>
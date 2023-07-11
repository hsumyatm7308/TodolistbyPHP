<?php

require "create.php";
require "edittodo.php";
require "update.php";
require "database.php";



// $edittask = edittaskfun();





?>






<!-- to do form  -->
<form action="index.php" method="post" enctype="multipart/form-data">


    <div class="w-full h-auto flex justify-center items-center p-1">
        <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center rounded-3xl">
            <input type="text" name="task" value="<?php echo isset($edittask['task']) ? $edittask['task'] : ''; ?>"
                class="w-[85%] bg-stone-200 rounded-tl-3xl rounded-bl-3xl p-3 focus:outline-none"
                placeholder="Text item">

            <button type="submit" name="<?php echo count($edittask['task']) ? 'update' : 'add'; ?>" class="text-red-500">
                <?php echo count($edittask['task']) ? 'update' : 'add'; ?>
            </button>
        </div>

    </div>
    <hr class="mt-3">
</form>
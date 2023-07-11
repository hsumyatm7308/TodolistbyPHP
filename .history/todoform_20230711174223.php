<?php
ini_set('display_errors', 1);
require_once("database.php");
require_once("create.php");

try {
    $stmt = $conn->prepare("SELECT id, task FROM todolist");
    $stmt->execute();
} catch (Exception $e) {
    echo "Found Error: " . $e->getMessage();
}
?>

<!-- update to do  -->
<h3 class="text-gray-400 ml-7 mb-1">To do</h3>
<h3 class="text-gray-400 ml-7 mb-1 editbtn">Edit Mood</h3>
<h3 class="text-gray-400 ml-7 mb-1 addmood">Add Mood</h3>



<form action="" method="post" enctype="multipart/form-data" id="todoForm">
    <div class="w-full h-auto flex justify-center items-center p-1">
        <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center rounded-3xl">
            <input type="text" name="textbox"
                class="w-[85%] bg-stone-200 rounded-tl-3xl rounded-bl-3xl p-3 focus:outline-none"
                placeholder="Text item">

            <button type="submit" name="submit" id="submitBtn" class="block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 h-10 mr-2 text-stone-500 hover:text-stone-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>

            <button type="submit" name="update" id="updateBtn" class="hidden">
                UPDATE
            </button>
        </div>
    </div>
    <hr class="mt-3">
</form>





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
            <div class="flex justify-center items-center">
                <form action="" class="edit-form" method="post">
                    <input type="hidden" name="edit-task" value="<?php echo $row['id']; ?>">
                    <button class="mr-4 editbtn" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </button>
                </form>
                <form action="deletetodo.php" method="post" class="flex justify-center items-center">
                    <button type="submit" name="delete-task" value="<?php echo $row['id']; ?>" class="delete-task">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
<?php endwhile; ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const todoForm = $('#todoForm');
        const submitBtn = $('#submitBtn');
        const updateBtn = $('#updateBtn');

        $('.editbtn').click(function(e) {
            e.preventDefault();
            const editId = $(this).closest('.edit-form').find('[name="edit-task"]').val();
            const taskInput = $('[name="textbox"]');
            const currentTask = $(this).closest('.flex').find('.ml-1').text();

            taskInput.val(currentTask);
            todoForm.find('[name="edit-task"]').remove();
            todoForm.append('<input type="hidden" name="edit-task" value="' + editId + '">');
            submitBtn.show();
            updateBtn.hide();
        });
    });
</script>

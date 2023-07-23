<?php
// ini_set('display_errors', 1);
require_once("database.php");
require_once("create.php");

try {
    $stmt = $conn->prepare("SELECT id, task FROM todolist");
    $stmt->execute();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

if (isset($_GET['id'])) {
    $completedTaskId = $_GET['id'];
    try {
        // Mark the task as complete in the database
        $completeStmt = $conn->prepare("UPDATE todolist SET complete = 1 WHERE id = :completedTaskId");
        $completeStmt->bindParam(":completedTaskId", $completedTaskId);
        $completeStmt->execute();

        // $stmt = $conn->prepare("SELECT id, task FROM todolist WHERE id NOT IN (SELECT id FROM todolist WHERE complete = 1)");

        // $stmt->execute();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}





?>


<style>
    .completed {
        text-decoration: line-through;
    }
</style>

<!-- update to do  -->

<h3 class="text-gray-400 ml-7 mb-1">To do</h3>

<?php while ($row = $stmt->fetch()): ?>
    <div name="taskitems" class="w-full h-auto flex justify-center items-center p-1">
        <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center p-3">
            <span class="flex justify-center items-center">
                <button name="complete-check" class="complete-check">
                    <i class="fa-regular fa-circle-check"></i>
                </button>
                <span class="ml-1 complete-sts  <?php echo ($row['complete'] == 1) ? 'completed' : ''; ?>">
                    <?php echo $row['task'] ?>
                </span>
            </span>
            <div class="flex justify-center items-center">
                <form action="editpage.php" class="edit-form" method="post">
                    <a href="editpage.php?id=<?php echo $row['id']; ?>" class="mr-4" type="submit" name="edit-task"
                        value="<?php echo $row['id']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </a>
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

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Rest of your HTML code -->

<script>
    $(document).ready(function () {
        const completeCheck = document.querySelectorAll('.complete-check');
        for (var x = 0; x < completeCheck.length; x++) {
            $(completeCheck[x]).click(function () {
                $(this).html('<i class="fa-solid fa-circle-check text-green-600"></i>');
                $(this).siblings('.complete-sts').toggleClass('completed');
            });
        }
    });

</script>
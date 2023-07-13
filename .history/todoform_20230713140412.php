<?php
error_reporting(0);

// ini_set('display_errors', 1);
require_once("database.php");
require_once("create.php");

// Check if a task has been marked as complete
if (isset($_POST['complete-task'])) {
    $taskId = $_POST['complete-task'];
    // Update the completion status in the database or set a cookie indicating the completion status
    // Example using cookies:
    setcookie("task_$taskId", 1, time() + (86400 * 30), "/"); // Cookie expires in 30 days
}

try {
    $stmt = $conn->prepare("SELECT id, task FROM todolist");
    $stmt->execute();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
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
                <form action="" method="post" class="complete-form">
                    <input type="hidden" name="complete-task" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="complete" class="complete-check">
                        <i class="fa-regular fa-circle-check <?php echo isset($_COOKIE['task_'.$row['id']]) ? 'text-green-600' : ''; ?>"></i>
                    </button>
                </form>
                <span class="ml-1 complete-sts <?php echo isset($_COOKIE['task_'.$row['id']]) ? 'completed' : ''; ?>">
                    <?php echo $row['task'] ?>
                </span>
            </span>
            <div class="flex justify-center items-center">
                <!-- Edit and delete buttons -->
            </div>
        </div>
    </div>
<?php endwhile; ?>

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Rest of your HTML code -->

<script>
    $(document).ready(function () {
        const completeForm = document.querySelectorAll('.complete-form');
        for (var x = 0; x < completeForm.length; x++) {
            $(completeForm[x]).submit(function (event) {
                event.preventDefault();
                var formData = $(this).serialize();
                var button = $(this).find('.complete-check');
                var taskStatus = $(button).find('.fa-circle-check');

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function () {
                        // Toggle completion status
                        $(taskStatus).toggleClass('text-green-600');
                        $(button).siblings('.complete-sts').toggleClass('completed');
                    },
                    error: function () {
                        // Handle error
                    }
                });
            });
        }
    });
</script>

<?php
require_once("create.php");
require_once("updatetodo.php");
require_once("database.php");

if (isset($_POST['delete-task'])) {
    $deleteTaskID = $_POST['delete-task'];

    try {
        $stmt = $conn->prepare("DELETE FROM todolist WHERE id = :delid");
        $stmt->bindParam(":delid", $deleteTaskID);
        $stmt->execute();

        header("Location: index.php");
        exit(); // Exit to prevent further execution of the script

    } catch (Exception $e) {
        echo "Error found: " . $e->getMessage();
    }
}
?>

<script>
    const completeCheck = document.querySelectorAll('.delete-task');

    for (let i = 0; i < completeCheck.length; i++) {
        completeCheck[i].addEventListener('click', function() {
            const taskElement = completeCheck[i].closest('.taskitems');
            taskElement.remove();
            console.log('Task removed');
        });
    }
</script>

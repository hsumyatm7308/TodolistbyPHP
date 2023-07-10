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

        echo "Task with ID $deleteTaskID deleted successfully!";

    } catch (Exception $e) {
        "error found" . $e->getMessage();
    }


}
?>



<script>
    const completeCheck = document.querySelectorAll('.delete-task');

    for (let i = 0; i < completeCheck.length; i++) {
        completeCheck[i].addEventListener('click', function() {
            completeCheck[i].parentElement.parentElement.remove();
            console.log('Task removed');
        });
    }
</script>
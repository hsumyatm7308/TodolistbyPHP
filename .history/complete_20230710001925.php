<?php
// session_start();
ini_set('display_errors', 1);

require_once("database.php");
require_once("create.php");
require_once("index.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["completeid"])) {
    $completeid = $_POST["completeid"];

    try {
        global $conn;

        $stmt = $conn->prepare("SELECT id, task FROM todolist WHERE id = :completeid");
        $stmt->bindParam(':completeid', $completeid);
        $stmt->execute();

        $completedTask = $stmt->fetch(); // Fetch the completed task

    } catch (Exception $e) {
        echo "Found Error: " . $e->getMessage();
    }
}

?>

<!-- complete work -->
<form action="" method="post" class="mt-3" enctype="multipart/form-data">
    <h3 class="text-gray-400 ml-7 mb-1">Complete</h3>

    <?php if (isset($completedTask)): ?>

        <div class="w-full h-auto flex justify-center items-center p-1">
            <div class="w-[85%] h-auto bg-stone-200 flex justify-between items-center p-3">
                <span>
                    <i class="fa-solid fa-circle-check text-green-600"></i>
                    <span class="ml-1">
                        <?php echo $completedTask['task']; ?>
                    </span>
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
    <?php endif; ?>


</form>
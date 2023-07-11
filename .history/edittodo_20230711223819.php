<?php
ini_set('display_errors', 1);
require_once("database.php");


if(isset($_POST['edit-task'])){

    $editid = $_POST['edit-task'];

    try {
        $stmt = $conn->prepare("SELECT id, task FROM todolist WHERE id = :editid");
        $stmt->bindParam(":editid",$editid);
        $stmt->execute();
    } catch (Exception $e) {
        echo "Found Error: " . $e->getMessage();
    }

    echo $editid."edit";
}



?>



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
                <form action="editpage.php" class="edit-form" method="post">
                    <a href="editpage.php?id=<?php echo $row['id']; ?>" class="mr-4" type="submit" name="edit-task" value="<?php echo $row['id']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </a>
                </form>
              
            </div>
        </div>
    </div>
<?php endwhile; ?>




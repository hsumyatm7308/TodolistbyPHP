<?php
ini_set('display_errors', 1);
require_once("database.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    global $conn;
    if (isset($_POST['edit-task'])) {
        $editid = $_GET['edit-task'];

        try {
            $stmt = $conn->prepare("SELECT id, task FROM todolist WHERE id = :editid");
            $stmt->bindParam(":editid", $editid);
            $stmt->execute();
        } catch (Exception $e) {
            echo "Found Error: " . $e->getMessage();
        }

        while ($row = $stmt->fetch()) {
            echo $row['id'] . " - " . $row['task']; // Display the fetched data as per your requirement
        }
    }
}



?>




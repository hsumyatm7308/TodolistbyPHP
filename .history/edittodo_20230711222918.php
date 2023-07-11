<?php
ini_set('display_errors', 1);
require_once("database.php");
require_once("editpage.php");
try {
    $stmt = $conn->prepare("SELECT id, task FROM todolist");
    $stmt->execute();
} catch (Exception $e) {
    echo "Found Error: " . $e->getMessage();
}
?>






<?php
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['update'])) {

      $gettask = $_POST["update-task"];
      $editid = $_GET['id'];

      try {
        $stmt = $conn->prepare("UPDATE todolist SET task = :task WHERE id = :upid");
        $stmt->bindParam(":task", $gettask);
        $stmt->bindParam(":upid", $editid);
        $stmt->execute();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }

    }
}
?>

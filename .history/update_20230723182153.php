<?php

ob_start();

ini_set("dispaly_errors", 1);
require_once("database.php");
require_once("editpage.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['update'])) {

        $gettask = $_POST['updattask'];
        $editid = $_GET['id'];

        try {
            $stmt = $conn->prepare("UPDATE todotask SET task = :task WHERE id = :upid");
            $stmt->bindParam(":task", $gettask);
            $stmt->bindParam(":upid", $editid);
            $stmt->execute();

            ob_end_clean();
            header("Location: index.php");
            exit();

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }


    }

    echo "update" . $gettask;

}
?>
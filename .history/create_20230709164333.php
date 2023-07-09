session_start();
ini_set('display_errors', 1);

require_once("database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $conn;

    $getdata = $_POST['textbox'];
    $getid = 1;

    try {
        $stmt = $conn->prepare("INSERT INTO todolist (id, task) VALUES (:id, :task)");
        
        $id = $getid;
        $task = $getdata;
        
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':task', $task);
        
        $stmt->execute();
    } catch (Exception $e) {
        echo "Error Found: " . $e->getMessage();
    }
}

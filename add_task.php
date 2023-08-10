<?php // Connect to database
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 
// Insert task into database
$task_name = $_POST["task_name"];
$description = $_POST["description"];
$due_date = $_POST["due_date"];
$category = $_POST["category"];
$priority = $_POST["priority"];
$completed = isset($_POST['completed']) ? 1 : 0;
$stmt = mysqli_prepare($conn, "INSERT INTO task_table (task_name, description, due_date, category, priority, completed) VALUES (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssssii", $task_name, $description, $due_date, $category, $priority, $completed);
        mysqli_stmt_execute($stmt);
//call category thing
        
        
// Redirect back to index.php
header('Location: index.php');
?>

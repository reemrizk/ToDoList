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
$category = $_POST["category"];
$stmt = mysqli_prepare($conn, "INSERT INTO category_table (name) VALUES (?)");
        mysqli_stmt_bind_param($stmt, "s", $category);
        mysqli_stmt_execute($stmt);
//call category thing
        
        
// Redirect back to index.php
header('Location: index.php');
?>

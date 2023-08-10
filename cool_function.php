<?php
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//from task db show categories

// Execute the SQL query
$sql = "UPDATE task_table SET category = REPLACE(category, 'woot', ' ');";
$result = mysqli_query($conn, $sql);

$conn-> close();
?>
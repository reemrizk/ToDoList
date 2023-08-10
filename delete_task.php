<?php // Connect to database
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);



  
if ($_GET) {
    if (isset($_GET['task_name'])) {
        $task_name=$_GET['task_name'];
        $stmt = mysqli_prepare($conn,"DELETE FROM task_table WHERE task_name=?");
        mysqli_stmt_bind_param($stmt,"s",$task_name);
        mysqli_stmt_execute($stmt);
        mysqli_close($conn);
        header("location:index.php");
    }
} else {
    header("location:index.php");
}




?>
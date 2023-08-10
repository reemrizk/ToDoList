<?php // Connect to database
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);



  
if ($_GET) {
    if (isset($_GET['name'])) {
        $name=$_GET['name'];
        $stmt = mysqli_prepare($conn,"DELETE FROM category_table WHERE name=?");
        $sql = "UPDATE task_table SET category = REPLACE(category, '$name', ' ');";
        mysqli_stmt_bind_param($stmt,"s",$name);
        mysqli_stmt_execute($stmt);
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
        header("location:index.php");
    }
} else {
    header("location:index.php");
}

//include("cool_function.php");




?>
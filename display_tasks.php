
<?php // Connect to database
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);



// Retrieve tasks from database
$sql = "SELECT * FROM task_table";
$result = mysqli_query($conn, $sql);

// Display tasks in table
while ($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>' . $row['task_name'] . '</td>';
	echo '<td>' . $row['description'] . '</td>';
	echo '<td>' . $row['due_date'] . '</td>';
	echo '<td>' . $row['category'] . '</td>';
	echo '<td>' . $row['priority'] . '</td>';
	echo '<td>' . ($row['completed'] ? 'Yes' : 'No') . '</td>';
	echo "<td><a href='delete_task.php?task_name=" . $row['task_name'] . "'>Delete</a></td>\n";
	echo '</tr>';
}
?>
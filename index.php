<?php // Connect to database
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

?>

<!DOCTYPE html>

<html>
  <head>
  
 <link rel="stylesheet" type="text/css" href="style.css">
  </head>

<body>



        
        <div class="navbar">
            <a class="active" href="index.php">Home</a>
            <a class="active" href="about.html">Authors</a>
             <a class="active" href="erd.html">Diagrams</a>
            
          </div>


        <h1>Group 7</h1>
        <h2>To-Do List</h2>
        <div>
      <!-- //allow user to add new task -->
        <h3>Enter a new task: </h3>
        <!-- form used to add new tasks -->
        <form method="POST" action="new_action.php">
        <label for="task_name"> Task Name </label>
        <input type="text" name="task_name"  required>

        <label for="description"> Task Description </label>
        <input type="text" name="description" required>

        <label for="due_date"> Due Date </label>
        <input type="date" name="due_date" required>

        <label for="category">Category</label>
        <input type="text" name="category" >


        <label for="priority"> Priority </label>
        <input type="number" name="priority" min="1" max="4" >

        <label for "completed" >Completed</label>
        <input type="checkbox" name="completed">
        <br><br>
      <!-- <input type="number" name="status" min="Active" max="Inactive" placeholder="Status"> -->
      <button type="submit" name="submit">Add Task</button>
    </form>
    


    <!-- <p><a href="index.php">Go Back</a></p> -->
        </div><br><br>
            

<!-- table stuff -->
  
  <table class = "center" style="border: 1px solid black;">
      <tr>
          <th>Task name</th>
          <th>Task Description</th>
          <th>Due Date</th>
          <th>Category</th>
          <th>Priority</th>
          <th>Completed</th>
          <th>Action</th>

          <!--<th></th>-->
      </tr>
      
<?php include 'display_tasks.php'; ?>
</table>
<br><br>

<!-- task category table -->
<table class = "center" style="border: 1px solid black;">
<br><h3>Categories</h3>
      <tr>

          <th>Name</th>
          <th>Action</th>

          <!--<th></th>-->
      </tr>


<?php // Connect to database
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//from task db show categories

// Execute the SQL query
$sql = "SELECT name FROM category_table";
$result = mysqli_query($conn, $sql);

// Display the results in a table
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row["name"] . "</td>";
  echo "<td><a href='delete_categories.php?name=" . $row['name'] . "'>Delete</a></td>\n";
  echo "</tr>";
}

// Close the database connection
mysqli_close($conn);

?>


</table>

<!--views/reports-->
 <div class="views-or-reports-section">
         
  <h1>Views or Reports</h1>
  
  <div class="overdue-tasks">
    <h3>Overdue and Due-Today Tasks</h3>
    <table class = "center" style="border: 1px solid black;">
      <tr>
          <th>Task name</th>
          <th>Due Date</th>
          <th>Priority</th>


          <!--<th></th>-->
      </tr>
      
<?php //display overdue tasks and tasks due today
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//from task db show categories

// Execute the SQL query
$sql = "SELECT * FROM task_table
WHERE (due_date <= CURDATE())
OR (due_date = CURDATE())
ORDER BY priority DESC;";
$result = mysqli_query($conn, $sql);

// Display the results in a table
while ($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>' . $row['task_name'] . '</td>';
	echo '<td>' . $row['due_date'] . '</td>';
	echo '<td>' . $row['priority'] . '</td>';
	echo "<td><a href='delete_task.php?task_name=" . $row['task_name'] . "'>Delete</a></td>\n";
	echo '</tr>';
}

// Close the database connection
mysqli_close($conn);

?>
</table>
  </div>
  
  <div class="due-today-tasks">
    <h3>Due-Today Tasks</h3>
    <table class = "center" style="border: 1px solid black;">
      <tr>
          <th>Task name</th>
          <th>Due Date</th>
          <th>Priority</th>


          <!--<th></th>-->
      </tr>
      
<?php //display due today
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//from task db show categories

// Execute the SQL query
$sql = "SELECT * FROM task_table
WHERE (completed = 0) AND (due_date = CURDATE())
ORDER BY priority DESC";
$result = mysqli_query($conn, $sql);

// Display the results in a table
while ($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>' . $row['task_name'] . '</td>';
	echo '<td>' . $row['due_date'] . '</td>';
	echo '<td>' . $row['priority'] . '</td>';
	echo "<td><a href='delete_task.php?task_name=" . $row['task_name'] . "'>Delete</a></td>\n";
	echo '</tr>';
}

// Close the database connection
mysqli_close($conn);

?>



</table>
  </div>
  <div class="due-tomorrow-tasks">
    <h3>Due-Tomorrow Tasks</h3>

<table class = "center" style="border: 1px solid black;">
      <tr>
          <th>Task name</th>
          <th>Due Date</th>
          <th>Priority</th>


          <!--<th></th>-->
      </tr>
      
<?php //display due tomorrow
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//from task db show categories

// Execute the SQL query
$sql = "SELECT * FROM task_table
WHERE (due_date = DATE_ADD(CURDATE(), INTERVAL 1 DAY))
ORDER BY priority DESC";
$result = mysqli_query($conn, $sql);

// Display the results in a table
while ($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>' . $row['task_name'] . '</td>';
	echo '<td>' . $row['due_date'] . '</td>';
	echo '<td>' . $row['priority'] . '</td>';
	echo "<td><a href='delete_task.php?task_name=" . $row['task_name'] . "'>Delete</a></td>\n";
	echo '</tr>';
}

// Close the database connection
mysqli_close($conn);

?>
</table>
  </div>
  
    <div class="due-within-7-days-tasks">
       <h3>Due Within the Week</h3>
<table class = "center" style="border: 1px solid black;">
      <tr>
          <th>Task name</th>
          <th>Due Date</th>
          <th>Priority</th>


          <!--<th></th>-->
      </tr>
      
<?php //display due in a week
$db_host = 'localhost';
$db_name = 'id20316018_tasks';
$db_user = 'id20316018_username';
$db_pass = '/_G]1H]0Y<X@PqRG';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//from task db show categories

// Execute the SQL query
$sql = "SELECT * FROM task_table
WHERE (due_date BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY))
ORDER BY due_date ASC, priority DESC";
$result = mysqli_query($conn, $sql);

// Display the results in a table
while ($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>' . $row['task_name'] . '</td>';
	echo '<td>' . $row['due_date'] . '</td>';
	echo '<td>' . $row['priority'] . '</td>';
	echo "<td><a href='delete_task.php?task_name=" . $row['task_name'] . "'>Delete</a></td>\n";
	echo '</tr>';
}

// Close the database connection
mysqli_close($conn);

?>


</table>

<br><br>
  </div>


  <!--<div class="report tasks-completed-per-day">-->
  <!--  <h3>Tasks Completed per Day for a Specific Week</h3>-->
  <!--  <form>-->
  <!--    <label for="start-date">Select Week Start Date:</label>-->
  <!--    <input type="date" id="start-date" name="start-date">-->
  <!--    <button type="submit">Print Report</button>-->
  <!--  </form>-->
  <!--  <br>-->
  <!--  <table>-->
  <!--    <thead>-->
  <!--      <tr>-->
  <!--        <th>Day</th>-->
  <!--        <th>Tasks Completed</th>-->
  <!--      </tr>-->
  <!--    </thead>-->
  <!--    <tbody>-->
        <!-- PHP code-->
  <!--    </tbody>-->
  <!--  </table>-->
  <!--</div>-->
</div>

</body>
</html>

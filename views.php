<!DOCTYPE html>

<html>
    <style>
    body{
    background-color: #F7F0F5;
    text-align: center;
    color:#433633;

}

h1{
    text-align: center;
    color:#433633;
}

table, tr, td, th {
  margin: 0 auto;
  border: 1px solid black;
}


.navbar{
    background-color: #5C5552;
    color:#F7F0F5;
    overflow: hidden;
}

.navbar a {
  
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

</style>
 
        <title>To-Do List Website</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    
    <body>
     
  <div class="views-or-reports-section">
         
  <h1>Views or Reports</h1>
  
  <div class="overdue tasks and due-today tasks">
    <h3>Overdue and Due-Today Tasks</h3>
    <table>
      <thead>
        <tr>
          <th>Task Description</th>
          <th>Due Date</th>
          <th>Task Category</th>
          <th>Priority Level</th>
          
        </tr>
      </thead>
      <tbody>
        <!-- PHP code-->
      </tbody>
    </table>
  </div>
  
  <div class="due-today-tasks">
    <h3>Due-Today Tasks</h3>
    <table>
      <thead>
        <tr>
          <th>Task Description</th>
          <th>Due Date</th>
          <th>Task Category</th>
          <th>Priority Level</th>
          
        </tr>
      </thead>
      <tbody>
        <!-- PHP code-->
      </tbody>
    </table>
  </div>
  <div class="due-tomorrow-tasks">
    <h3>Due-Tomorrow Tasks</h3>
    <table>
      <thead>
        <tr>
          <th>Task Description</th>
          <th>Due Date</th>
          <th>Task Category</th>
          <th>Priority Level</th>
          
        </tr>
      </thead>
      <tbody>
        <!-- PHP code-->
      </tbody>
    </table>
  </div>
  <div class="due-within-7-days-tasks">
    <h3>Due within Next 7 Days</h3>
    <table>
      <thead>
        <tr>
          <th>Task Description</th>
          <th>Due Date</th>
          <th>Task Category</th>
          <th>Priority Level</th>
          
        </tr>
      </thead>
      <tbody>
        <!-- PHP code -->
      </tbody>
    </table>
  </div>
  
  
  <div class="report tasks-completed-per-day">
    <h3>Tasks Completed per Day for a Specific Week</h3>
    <form>
      <label for="week-start-date">Select Week Start Date:</label>
      <input type="date" id="week-start-date" name="week-start-date">
      <button type="submit">Print Report</button>
    </form>
    <br>
    <table>
      <thead>
        <tr>
          <th>Day</th>
          <th>Tasks Completed</th>
        </tr>
      </thead>
      <tbody>
        <!-- PHP code-->
      </tbody>
    </table>
  </div>
</div>
    </body>
</html>
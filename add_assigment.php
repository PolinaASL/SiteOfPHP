<?php
session_start();
include("./includes/connect.php");
include("./functions/process_add_assignment.php");

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<?php
        include("./templates/head.php"); 
?>
<head>
    <title>Adding taska</title>
</head>
<body>

    <div class="container">
        <h2>Adding tasks</h2>
        <form action="dashboard.php" method="post">
            <label for="title">Name:</label>
            <input type="text" id="title" name="title" required>

            <label for="deadline">Deadline:</label>
            <input type="date" id="deadline" name="deadline" required>

            <label for="description">Description of the task:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit">Add a task</button>
        </form>
    </div>
</body>
</html>
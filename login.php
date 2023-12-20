<?php
session_start();
include("./includes/connect.php");
include("./functions/process_login.php");

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<?php
        include("./templates/head.php"); 
?>
<head>
    <title>Entrance</title>
</head>
<body>

    <div class="container">
        <h2>Entrance</h2>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Enter</button>
        </form>
    </div>
</body>
</html>
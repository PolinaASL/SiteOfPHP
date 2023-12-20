<?php
session_start();
include("./includes/connect.php");

$query = "SELECT * FROM assignments WHERE deadline >= CURDATE() ORDER BY deadline";
$result = $conn->query($query);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<?php
        include("./templates/head.php"); 
?>
<head>

    <title>Student Dashboard</title>
</head>
<body>

    <div class="container">
        <h2>Student Dashboard</h2>
        <h3>Uncoming taska</h3>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>Name:</strong> " .$row["title"] . "</p>";
                echo "<p><strong>Deadline:</strong> " .$row["description"] . "</p>";
                echo "<p><strong>Description:</strong> " .$row["description"] . "</p>";
                echo "<hr>";
            }
        } else {
            echo "There are no upcoming tasks!";
        }
        ?>
    </div>
</body>
</html>
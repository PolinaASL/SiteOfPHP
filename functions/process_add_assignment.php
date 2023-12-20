<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $deadline = $_POST["deadline"];
    $description = $_POST["description"];

    $query = "INSERT INTO assignments (title, deadline, description) VALUES ('$title', '$deadline', '$description')";

    if ($conn->query($query) === TRUE) {
        echo "The task was added successfully!";
    } else {
        echo "The task was not added, an error occurred: " . $conn->error;
    }
}
?>
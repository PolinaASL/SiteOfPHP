<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = 'student';

    $query = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";

    if ($conn->query($query) === TRUE) {
        echo "You're registered!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
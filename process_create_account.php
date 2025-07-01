<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "Vishnu@2003";
$dbname = "trading";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Account created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
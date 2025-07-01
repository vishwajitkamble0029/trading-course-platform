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
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages (full_name, email, message) VALUES ('$full_name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
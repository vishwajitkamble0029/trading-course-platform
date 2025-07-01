<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'Vishnu@2003';
$db_name = 'trading';

//// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error sending message: " . $conn->error;
}

// Close connection
$conn->close();
?>
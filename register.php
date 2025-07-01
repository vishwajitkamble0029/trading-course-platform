<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'Vishnu@2003;
$db_name = 'trading';

// Connect to database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];

// Insert data into database
$sql = "INSERT INTO users (email) VALUES ('$email')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
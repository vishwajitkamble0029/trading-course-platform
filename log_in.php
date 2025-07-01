<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'Vishnu@2003';
$db_name = 'trading';

// Connect to database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Query database
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

// Check if user exists
if ($result->num_rows > 0) {
    // Log in user
    session_start();
    $_SESSION['email'] = $email;
    header('Location: index.html');
    exit;
} else {
    // Display error message
    echo 'Invalid email or password';
}

// Close connection
$conn->close();
?>
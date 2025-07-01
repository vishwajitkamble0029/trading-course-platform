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
    $email = $_POST['email'];
    $otp = $_POST['otp'];

    // Check if email exists and OTP is correct
    $sql = "SELECT * FROM users WHERE email = '$email' AND otp = '$otp'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // OTP is correct, redirect to reset password page
        header("Location: reset_password.html");
    } else {
        // OTP is incorrect
        echo "Invalid OTP. Please try again.";
    }
}

$conn->close();
?>
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
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $capital = $_POST['capital'];
    $experience = $_POST['experience'];
    $batch = $_POST['batch'];
    $payment = $_POST['payment'];
    $terms = $_POST['terms'];

    $sql = "INSERT INTO get_started (phone, city, capital, experience, batch, payment, terms) VALUES ('$phone', '$city', '$capital', '$experience', '$batch', '$payment', '$terms')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
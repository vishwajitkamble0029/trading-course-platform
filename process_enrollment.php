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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "INSERT INTO enrollments (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "Enrollment successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
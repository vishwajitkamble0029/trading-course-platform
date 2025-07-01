<?php
$conn = mysqli_connect("localhost", "root", "Vishnu@2003", "trading");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$sql = "INSERT INTO enrollments (name, email, phone) VALUES ('$name', '$email', '$phone')";

if (mysqli_query($conn, $sql)) {
    echo "Enrollment successful!";
} else {
    echo "Error enrolling: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
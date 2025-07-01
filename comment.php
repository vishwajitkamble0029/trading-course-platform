<?php
$conn = mysqli_connect("localhost", "root", "Vishnu@2003", "trading");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

$sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

if (mysqli_query($conn, $sql)) {
    echo "Comment added successfully!";
} else {
    echo "Error adding comment: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
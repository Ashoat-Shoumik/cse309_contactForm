<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_me";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$message = $_POST["message"];

// Insert the data into the database
$sql = "INSERT INTO contact_info (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>
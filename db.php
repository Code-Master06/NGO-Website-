<?php
$servername = "localhost";
$username = "root";
$password = ""; // Keep this empty for XAMPP
$database = "ngo_donation";

// Create connection (without port)
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database verified!";
} else {
    die("Error creating database: " . $conn->error);
}

$conn->close();

// Connect to the actual database
$conn = new mysqli($servername, $username, $password, $database);

// Final check
if ($conn->connect_error) {
    die("Final Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to database successfully!";
}
?>

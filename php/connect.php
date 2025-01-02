<?php
// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$db_name = "data";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database.";
}

// Close the connection
$conn->close();
?>
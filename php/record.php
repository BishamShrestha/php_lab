<?php
// Database connection details
$host = "localhost";
$username = "root";
$db_name = "swastik";

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, address, date_of_birth FROM students";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Student Records</h2>";
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Date of Birth</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['date_of_birth'] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No student records found.";
}

$conn->close();
?>
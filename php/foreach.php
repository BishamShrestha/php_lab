<?php
// Array with student records
$students = [
    ['first_name' => 'Jerry', 'last_name' => 'Wood', 'email' => 'jerry@example.com', 'dob' => '1999-11-23'],
    ['first_name' => 'Tom', 'last_name' => 'Swary', 'email' => 'tom@example.com', 'dob' => '2000-07-10']
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Records</title>
</head>

<body>

    <h1>Student Records</h1>

    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
        </tr>
        <?php
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['first_name'] . "</td>";
            echo "<td>" . $student['last_name'] . "</td>";
            echo "<td>" . $student['email'] . "</td>";
            echo "<td>" . $student['dob'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>
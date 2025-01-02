<?php
if (isset($_GET['first_name']) && isset($_GET['last_name'])) {
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
} else {
    $first_name = '';
    $last_name = '';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>GET Form Example</title>
</head>

<body>

    <h1>Submit Your Information</h1>

    <form method="GET" action="">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>"
            required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>"
            required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($first_name && $last_name) {
        echo "<h1>Welcome, " . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "!</h1>";
    }
    ?>

</body>

</html>
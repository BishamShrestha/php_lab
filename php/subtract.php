<?php
if (isset($_POST['submit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 - $num2;
} else {
    $result = '';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Subtract Two Numbers</title>
</head>

<body>
    <h1>Subtraction of Two Numbers</h1>

    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <input type="submit" name="submit" value="Subtract"><br><br>

        <label for="result">Result:</label>
        <input type="text" id="result" value="<?php echo isset($result) ? $result : ''; ?>" readonly><br><br>
    </form>
</body>

</html
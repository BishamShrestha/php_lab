<?php
$cookie_name = "Sulek";
$cookie_value = "buddy";
$expiration_time = time() + (60 * 60 * 24);

// Set the cookie
setcookie($cookie_name, $cookie_value, $expiration_time);

if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie     $cookie_name is set!<br>";
    echo "Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '$cookie_name' is not set yet.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Set Cookie</title>
</head>

<body>
    <h2>Set Cookie for 24 hours</h2>
</body>

</html>
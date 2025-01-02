<?php
$file_name = "example.txt";

$string_to_write = "Hello, this is a things written to the file.";

file_put_contents($file_name, $string_to_write);

// Check if the file exists and read its content
if (file_exists($file_name)) {
    $file_content = file_get_contents($file_name);
    echo "<h2>File Content:</h2>";
    echo "<pre>" . $file_content . "</pre>";
} else {
    echo "Error: File not found.";
}
?>
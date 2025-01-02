<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    // Get file details
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_error = $_FILES['file']['error'];

    // Define a folder to store uploaded files
    $upload_directory = "uploads/";

    if (!is_dir($upload_directory)) {
        mkdir($upload_directory, 0777, true);
    }

    $file_path = $upload_directory . basename($file_name);

    if ($file_error === 0) {
        if ($file_size <= 5 * 1024 * 1024) {
            // Move the file to the upload directory
            if (move_uploaded_file($file_tmp, $file_path)) {
                echo "File uploaded successfully!";
                echo "<br>File name: " . $file_name;
                echo "<br>File size: " . $file_size . " bytes";
            } else {
                echo "Error: Failed to upload the file.";
            }
        } else {
            echo "Error: The file is too large. Maximum allowed size is 5MB.";
        }
    } else {
        echo "Error: There was an issue uploading the file. Error code: " . $file_error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>

<body>
    <h2>Upload a File</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="file">Choose a file:</label>
        <input type="file" name="file" id="file" required><br><br>
        <input type="submit" value="Upload File">
    </form>
</body>

</html>
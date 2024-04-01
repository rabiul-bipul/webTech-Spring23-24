<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name php</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $namePattern = "/^[A-Za-z.-]*$/";

    if (empty($name)) {
        echo "Name cannot be empty.";
    } elseif (!preg_match($namePattern, $name)) {
        echo "Invalid name format.";
    } elseif (count($name) < 2) {
        echo "Name must contain at least two words.";
    } else {
        echo "Form submitted";
    }
}

?>

</body>
</html>

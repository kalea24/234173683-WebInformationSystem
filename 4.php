<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Temperature Converter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Temperature Converter</h1>
    <p>
<?php

$celsius = $_GET['celsius'];

$fahrenheit = ($celsius * 9/5) + 32;

echo "$celsius °C is equal to $fahrenheit °F.";

?>
    </p>
    <a href="formAction.php">Back to Form</a>
</body>
</html>

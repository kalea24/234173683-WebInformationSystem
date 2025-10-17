<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area and Perimeter of a Rectangle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Area and Perimeter of a Rectangle</h1>
    <p>
<?php

$length = $_GET['length'];
$width = $_GET['width'];

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area of the rectangle: $area<br>";
echo "Perimeter of the rectangle: $perimeter<br>";

?>
    </p>
    <a href="formAction.php">Back to Form</a>
</body>
</html>

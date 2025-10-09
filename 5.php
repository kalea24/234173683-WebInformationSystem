<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swapping Variables</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Swapping Variables</h1>
    <p>
<?php

$a = "rawrs";
$b = "meows";

echo "Before swapping:<br> The dog $a, when the cat $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "After swapping: <br> The dog $a, when the cat $b<br>";

?>
    </p>
</body>
</html>

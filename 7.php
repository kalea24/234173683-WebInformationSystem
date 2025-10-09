<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>BMI Calculator</h1>
    <p>
<?php

$weight = 52; 
$height = 1.51; 

$bmi = $weight / ($height * $height);

echo "BMI: $bmi";

?>
    </p>
</body>
</html>

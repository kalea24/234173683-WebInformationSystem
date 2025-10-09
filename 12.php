<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Cost Estimator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Travel Cost Estimator</h1>
    <p>
<?php

$distance = 200;
$fuel_consumption = 10;
$fuel_price = 50;

$fuel_needed = $distance / $fuel_consumption;
$cost = $fuel_needed * $fuel_price;

echo "The estimated travel cost for a 200km drive is $cost php";

?>
    </p>
</body>
</html>

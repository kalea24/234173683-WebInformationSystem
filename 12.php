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

$distance = $_POST['distance'];
$fuel_consumption = $_POST['fuel_consumption'];
$fuel_price = $_POST['fuel_price'];

$fuel_needed = $distance / $fuel_consumption;
$cost = $fuel_needed * $fuel_price;

echo "The estimated travel cost for a $distance km drive is $cost php";

?>
    </p>
    <a href="formAction.php">Back to Form</a>
</body>
</html>

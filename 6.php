<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salary Calculator</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Salary Calculator</h1>
    <p>
<?php

$basic_salary = $_POST['basic_salary'];
$allowance = $_POST['allowance'];
$tax = $_POST['tax'];

$net_salary = $basic_salary + $allowance - $tax;

echo "Your net salary is $net_salary";

?>
    </p>
    <a href="formAction.php">Back to Form</a>
</body>
</html>

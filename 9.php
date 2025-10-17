<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Account Simulation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bank Account Simulation</h1>
    <p>
<?php

$balance = $_POST['balance'];
$deposit = $_POST['deposit'];
$withdraw = $_POST['withdraw'];

$balance += $deposit;
$balance -= $withdraw;

echo "Final balance: $balance";

?>
    </p>
    <a href="formAction.php">Back to Form</a>
</body>
</html>

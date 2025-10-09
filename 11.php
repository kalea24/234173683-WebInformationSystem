<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currency Converter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Currency Converter</h1>
    <p>
<?php

$amount_php = 10000;

$exchange_rate_usd = 0.020;
$exchange_rate_eur = 0.018;
$exchange_rate_jpy = 2.20;

$amount_usd = $amount_php * $exchange_rate_usd;
$amount_eur = $amount_php * $exchange_rate_eur;
$amount_jpy = $amount_php * $exchange_rate_jpy;

echo "PHP $amount_php is equivalent to:<br>";
echo "USD $amount_usd<br>";
echo "EUR $amount_eur<br>";
echo "JPY $amount_jpy<br>";

?>
    </p>
</body>
</html>

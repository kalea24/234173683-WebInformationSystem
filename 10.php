<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Grading System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Simple Grading System</h1>
    <p>
<?php

$math_score = $_POST['math_score'];
$english_score = $_POST['english_score'];
$science_score = $_POST['science_score'];

$average = ($math_score + $english_score + $science_score) / 3;

if ($average >= 90) {
    $grade = 'A';
} elseif ($average >= 80) {
    $grade = 'B';
} elseif ($average >= 70) {
    $grade = 'C';
} elseif ($average >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

echo "Average score: $average<br>";
echo "Grade: $grade";

?>
    </p>
    <a href="formAction.php">Back to Form</a>
</body>
</html>

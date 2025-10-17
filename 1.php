<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Introduce Yourself</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Intro</h1>
    <p>
<?php

$name = $_POST['name'];
$age = $_POST['age'];
$college = $_POST['college'];
$color = $_POST['color'];

echo "Hey there $name! Who's $age years old, from $college. 
Fun fact about you: your favorite color is $color.";

?>
    </p>
    <a href="formAction.php">Back to Form</a>
</body>
</html>

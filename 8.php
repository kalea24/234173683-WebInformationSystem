<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Manipulation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>String Manipulation</h1>
    <p>
<?php

$sentence = "The fate of Ophelia by Taylor Swift";

$num_characters = strlen($sentence);
$num_words = str_word_count($sentence);
$uppercase = strtoupper($sentence);
$lowercase = strtolower($sentence);

echo "Number of characters: $num_characters<br>";
echo "Number of words: $num_words<br>";
echo "Uppercase: $uppercase<br>";
echo "Lowercase: $lowercase<br>";

?>
    </p>
</body>
</html>

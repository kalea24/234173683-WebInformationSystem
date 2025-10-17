<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercises</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>PHP Exercises</h1>
    <ul>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<li><a href='$i.php'>Exercise $i</a></li>";
        }
        ?>
    </ul>
</body>
</html>

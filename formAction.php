<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Form Action</title>
</head>
<body>
    <h1>Tell me something about you</h1>
    <form action="1.php" method="post">
        Name: <input type="text" name="name" required><br>
        Age: <input type="int" name="age" required><br>
        College: <input type="text" name="college" required><br>
        Favorite Color: <input type="text" name="color" required><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <section>
        <h1>Your very own simple Calculator</h1>
        <form action="2.php" method="get">
            First Number: <input type="number" name="a"><br>
            Second Number: <input type="number" name="b"><br>
            <input type="submit" value="Calculate">
        </form>
    </section>

    <section>
        <h1>Area and Perimeter of a Rectangle</h1>
        <form action="3.php" method="get">
            Length: <input type="number" name="length" required><br>
            Width: <input type="number" name="width" required><br>
            <input type="submit" value="Calculate">
        </form>
    </section>

    <section>
        <h1>Temperature Converter</h1>
        <form action="4.php" method="get">
            Celsius: <input type="number" name="celsius" required><br>
            <input type="submit" value="Convert">
        </form>
    </section>

    <section>
        <h1>Swapping Variables</h1>
        <form action="5.php" method="get">
            Variable A: <input type="text" name="a" required><br>
            Variable B: <input type="text" name="b" required><br>
            <input type="submit" value="Swap">
        </form>
    </section>

    <section>
        <h1>Salary Calculator</h1>
        <form action="6.php" method="post">
            Basic Salary: <input type="number" name="basic_salary" required><br>
            Allowance: <input type="number" name="allowance" required><br>
            Tax: <input type="number" name="tax" required><br>
            <input type="submit" value="Calculate">
        </form>
    </section>

    <section>
        <h1>BMI Calculator</h1>
        <form action="7.php" method="post">
            Weight (kg): <input type="number" name="weight" required><br>
            Height (m): <input type="number" name="height" required><br>
            <input type="submit" value="Calculate">
        </form>
    </section>

    <section>
        <h1>String Manipulation</h1>
        <form action="8.php" method="post">
            Sentence: <input type="text" name="sentence" required><br>
            <input type="submit" value="Analyze">
        </form>
    </section>

    <section>
        <h1>Bank Account Simulation</h1>
        <form action="9.php" method="post">
            Initial Balance: <input type="number" name="balance" required><br>
            Deposit: <input type="number" name="deposit" required><br>
            Withdraw: <input type="number" name="withdraw" required><br>
            <input type="submit" value="Simulate">
        </form>
    </section>

    <section>
        <h1>Simple Grading System</h1>
        <form action="10.php" method="post">
            Math Score: <input type="number" name="math_score" required><br>
            English Score: <input type="number" name="english_score" required><br>
            Science Score: <input type="number" name="science_score" required><br>
            <input type="submit" value="Grade">
        </form>
    </section>

    <section>
        <h1>Currency Converter</h1>
        <form action="11.php" method="post">
            Amount in PHP: <input type="number" name="amount_php" required><br>
            <input type="submit" value="Convert">
        </form>
    </section>

    <section>
        <h1>Travel Cost Estimator</h1>
        <form action="12.php" method="post">
            Distance (km): <input type="number" name="distance" required><br>
            Fuel Consumption (km/L): <input type="number" name="fuel_consumption" required><br>
            Fuel Price (per L): <input type="number" name="fuel_price" required><br>
            <input type="submit" value="Estimate">
        </form>
    </section>
</body>
</html>

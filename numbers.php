<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Increment, Decrement, Max, Min</title>
</head>
<body style="font-family: sans-serif; padding: 20px; background-color: #e3f2fd;">
    <h1>PHP Math Operations: Increment, Decrement, Max & Min</h1>

    <h2>🔢 Variables and Operations</h2>
    <p>
        <?php
            // Initial variables
            $x = 5;
            $y = 10;
            $z = 15;

            echo "Initial values:<br>";
            echo "x = $x, y = $y, z = $z<br><br>";

            // Incrementing and Decrementing
            $x++; // Increment x by 1
            $y--; // Decrement y by 1

            echo "After Increment and Decrement:<br>";
            echo "x = $x (after increment), y = $y (after decrement), z = $z<br><br>";

            // Finding Maximum and Minimum
            $maxValue = max($x, $y, $z); // Find maximum value
            $minValue = min($x, $y, $z); // Find minimum value

            echo "Maximum value: $maxValue<br>";
            echo "Minimum value: $minValue<br>";
        ?>
    </p>
</body>
</html>

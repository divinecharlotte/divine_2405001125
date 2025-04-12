<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>N PHP Page</title>
</head>
<body style="font-family: sans-serif; padding: 20px; background-color: #eef2f3;">
    <h1>Y Registration Page</h1>

    <p>
        <?php
            $yRegNumber = "Y-REG-2025-009";
            $message = "You are successfully registered for the new academic year!";

            echo "Registration Number: <strong>$yRegNumber</strong><br>";
            echo "Status: <em>$message</em>";
        ?>
    </p>
</body>
</html>

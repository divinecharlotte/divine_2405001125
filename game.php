<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color & Celebrity Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fefefe;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #ffffff;
            padding: 30px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 30px;
            padding: 20px;
            background-color: #e9f7ef;
            border-left: 5px solid #28a745;
            font-size: 16px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Fill in the blanks</h2>
        <form action="" method="get">
            <label>Enter a color:</label>
            <input type="text" name="color" required>

            <label>Enter a plural noun:</label>
            <input type="text" name="pluralNoun" required>

            <label>Enter a celebrity name:</label>
            <input type="text" name="celebrity" required>

            <input type="submit" value="Submit">
        </form>

        <?php
            if (isset($_GET["color"]) && isset($_GET["pluralNoun"]) && isset($_GET["celebrity"])) {
                $color = htmlspecialchars($_GET["color"]);
                $pluralNoun = htmlspecialchars($_GET["pluralNoun"]);
                $celebrity = htmlspecialchars($_GET["celebrity"]);

                echo "<div class='message'>";
                echo "The roses are <strong>$color</strong>, <strong>$pluralNoun</strong> are fantastic, I love <strong>$celebrity</strong>.";
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>

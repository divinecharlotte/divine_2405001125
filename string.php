<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Tools</title>

</head>
<body>
<div>
  <?php
        $text = "Charlotte built PHP";
        $search = "PHP";

        echo "<p><strong>Original string:</strong> <code>$text</code></p>";
        echo "<p><strong>Lowercase:</strong> " . strtolower($text) . "</p>";
        echo "<p><strong>Uppercase:</strong> " . strtoupper($text) . "</p>";
        echo "<p><strong>Character count:</strong> " . strlen($text) . "</p>";

        $pos = strpos($text, $search);
        if ($pos !== false) {
            echo "<p><strong>Position of \"$search\":</strong> $pos</p>";
        } else {
            echo "<p><strong>\"$search\" not found in the string.</strong></p>";
        }
    ?>

     
    </div>

</body>
</html>

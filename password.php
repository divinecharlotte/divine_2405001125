<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Password Form</title>
</head>
<body>

<h2>Enter Your Password</h2>

<form method="post">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password"])) {
    $password = htmlspecialchars($_POST["password"]);
    echo "<p>Your password is: <strong>$password</strong></p>";
}
?>

</body>
</html>

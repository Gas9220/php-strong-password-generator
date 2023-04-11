<?php
require __DIR__ . '/functions.php';
include __DIR__ . '/session.php';

$_SESSION['generated_password'] = generatePassword($password_length);

if ($_POST["pass-lenght"] !== null && (strlen($_SESSION['generated_password']) == $_POST["pass-lenght"])) {
    header("Location: ./password.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3>Password Generator</h3>
        <form action="index.php" method="post">
            <label for="pass-lenght">Lunghezza password:</label>
            <input type="number" name="pass-lenght" placeholder="password characters">
            <div class="options">
                <label for="enable-numbers">Numbers</label>
                <input type="checkbox" name="enable-numbers" checked>
                <br>
                <label for="enable-symbols">Symbols</label>
                <input type="checkbox" name="enable-symbols" checked>
            </div>
        </form>
    </div>
</body>

</html>
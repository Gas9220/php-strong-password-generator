<?php
require __DIR__ . '/functions.php';
include __DIR__ . '/session.php';

$allowRepeated = $_POST["repeat-char"] === 'repeat' ? true : false;

if ($_POST["pass-lenght"] !== null) {
    $_SESSION['generated_password'] = generatePassword($_POST["pass-lenght"], $_POST["enable-numbers"], $_POST["enable-symbols"], $allowRepeated);

    if ((strlen($_SESSION['generated_password']) == $_POST["pass-lenght"])) {
        header("Location: ./password.php");
    }
}

var_dump($_POST["pass-lenght"]);
var_dump($_POST["enable-numbers"]);
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
                <br>
                <label for="">Repeated characters</label>
                <input type="radio" id="yes" name="repeat-char" value="repeat" checked>
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="repeat-char" balue="no-repeat">
                <label for="no">No</label><br>
            </div>
        </form>
    </div>
</body>

</html>